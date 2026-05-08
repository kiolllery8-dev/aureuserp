<?php

namespace Webkul\Accounting\Filament\Clusters\Reporting\Pages;

use BezhanSalleh\FilamentShield\Traits\HasPageShield;
use Carbon\Carbon;
use Filament\Actions\Action;
use Filament\Forms\Components\Select;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Pages\Page;
use Filament\Schemas\Components\Section;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Computed;
use Webkul\Accounting\Filament\Clusters\Reporting;

/**
 * 台灣 401 營業稅申報表
 *
 * 雙月申報，奇數月 1 日至 15 日申報前一雙月的營業稅。
 * 例：5 月 1-15 日申報 3-4 月份。
 *
 * 報表內容：
 * - 銷項憑證明細表（含 5% / 零稅率 / 免稅）
 * - 進項憑證明細表（可扣抵 / 不可扣抵）
 * - 試算：銷項稅合計 - 進項稅合計 = 應補（退）營業稅
 * - 媒體申報 CSV 匯出（依國稅局規格）
 */
class Tw401 extends Page implements HasForms
{
    use HasPageShield, InteractsWithForms;

    protected string $view = 'accounting::filament.clusters.reporting.pages.tw-401';

    protected static ?string $cluster = Reporting::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-document-text';

    protected static ?int $navigationSort = 9;

    protected static ?string $modelLabel = '401 營業稅申報';

    protected static ?string $pluralModelLabel = '401 營業稅申報';

    public ?array $data = [];

    public ?string $period = null; // 'YYYY-MM' (雙月起始月)

    protected static function getPagePermission(): ?string
    {
        return null; // 暫時不限權限
    }

    public static function getNavigationGroup(): ?string
    {
        return '台灣會計報表';
    }

    public static function getNavigationLabel(): string
    {
        return '401 營業稅申報';
    }

    public function getTitle(): string
    {
        return '台灣 401 營業稅申報表';
    }

    public function mount(): void
    {
        // 預設為當前雙月（往回推 1 期）
        $now = now();
        $month = $now->month;
        $startMonth = $month % 2 === 0 ? $month - 1 : $month - 2;
        if ($startMonth <= 0) {
            $this->period = sprintf('%d-%02d', $now->year - 1, 11);
        } else {
            $this->period = sprintf('%d-%02d', $now->year, $startMonth);
        }
        $this->form->fill(['period' => $this->period]);
    }

    public function form(\Filament\Schemas\Schema $schema): \Filament\Schemas\Schema
    {
        $options = [];
        $now = now();
        for ($i = 0; $i < 12; $i++) {
            $d = $now->copy()->subMonths($i * 2);
            $start = $d->month % 2 === 0 ? $d->month - 1 : $d->month;
            if ($start <= 0) continue;
            $endMonth = $start + 1;
            $key = sprintf('%d-%02d', $d->year, $start);
            $label = sprintf('民國 %d 年 %d-%d 月', $d->year - 1911, $start, $endMonth);
            $options[$key] = $label;
        }

        return $schema->schema([
            Section::make('申報期間')
                ->schema([
                    Select::make('period')
                        ->label('雙月期間')
                        ->options($options)
                        ->default($this->period)
                        ->live()
                        ->afterStateUpdated(fn ($state) => $this->period = $state),
                ]),
        ]);
    }

    protected function getHeaderActions(): array
    {
        return [
            Action::make('export_csv')
                ->label('匯出 401 媒體申報檔')
                ->icon('heroicon-o-document-arrow-down')
                ->color('success')
                ->action(function () {
                    return $this->exportMediaFile();
                }),
        ];
    }

    /**
     * 取得選定期間的起訖日期
     */
    protected function getDateRange(): array
    {
        [$year, $month] = explode('-', $this->period ?? now()->format('Y-m'));
        $start = Carbon::create((int) $year, (int) $month, 1)->startOfDay();
        $end = $start->copy()->addMonth()->endOfMonth()->endOfDay();
        return [$start, $end];
    }

    /**
     * 銷項明細
     */
    #[Computed]
    public function salesData(): array
    {
        [$start, $end] = $this->getDateRange();
        $companyId = Auth::user()?->default_company_id ?? 1;

        // 從 accounts_account_moves 抓出客戶發票（type=out_invoice / out_refund）
        $rows = DB::table('accounts_account_moves as m')
            ->leftJoin('partners_partners as p', 'm.partner_id', '=', 'p.id')
            ->where('m.company_id', $companyId)
            ->whereIn('m.move_type', ['out_invoice', 'out_refund'])
            ->whereBetween('m.invoice_date', [$start, $end])
            ->where('m.state', 'posted')
            ->select(
                'm.id', 'm.name', 'm.invoice_date', 'm.move_type',
                'm.amount_untaxed', 'm.amount_tax', 'm.amount_total',
                'p.name as partner_name', 'p.company_registry as buyer_tax_id'
            )
            ->orderBy('m.invoice_date')
            ->get()
            ->toArray();

        $totalUntaxed = 0; $totalTax = 0; $totalAmount = 0;
        foreach ($rows as $r) {
            $totalUntaxed += $r->amount_untaxed ?? 0;
            $totalTax += $r->amount_tax ?? 0;
            $totalAmount += $r->amount_total ?? 0;
        }
        return [
            'rows' => $rows,
            'total_untaxed' => $totalUntaxed,
            'total_tax' => $totalTax,
            'total_amount' => $totalAmount,
            'count' => count($rows),
        ];
    }

    /**
     * 進項明細
     */
    #[Computed]
    public function purchaseData(): array
    {
        [$start, $end] = $this->getDateRange();
        $companyId = Auth::user()?->default_company_id ?? 1;

        $rows = DB::table('accounts_account_moves as m')
            ->leftJoin('partners_partners as p', 'm.partner_id', '=', 'p.id')
            ->where('m.company_id', $companyId)
            ->whereIn('m.move_type', ['in_invoice', 'in_refund'])
            ->whereBetween('m.invoice_date', [$start, $end])
            ->where('m.state', 'posted')
            ->select(
                'm.id', 'm.name', 'm.invoice_date', 'm.move_type',
                'm.amount_untaxed', 'm.amount_tax', 'm.amount_total',
                'p.name as partner_name', 'p.company_registry as vendor_tax_id'
            )
            ->orderBy('m.invoice_date')
            ->get()
            ->toArray();

        $totalUntaxed = 0; $totalTax = 0; $totalAmount = 0;
        foreach ($rows as $r) {
            $totalUntaxed += $r->amount_untaxed ?? 0;
            $totalTax += $r->amount_tax ?? 0;
            $totalAmount += $r->amount_total ?? 0;
        }
        return [
            'rows' => $rows,
            'total_untaxed' => $totalUntaxed,
            'total_tax' => $totalTax,
            'total_amount' => $totalAmount,
            'count' => count($rows),
        ];
    }

    /**
     * 試算：應補（退）稅額
     */
    #[Computed]
    public function summary(): array
    {
        $sales = $this->salesData();
        $purchase = $this->purchaseData();

        $output = (int) round($sales['total_tax']);   // 銷項稅
        $input = (int) round($purchase['total_tax']); // 進項稅
        $net = $output - $input;
        return [
            'output_tax' => $output,
            'input_tax' => $input,
            'net' => $net,
            'is_payable' => $net > 0,
            'sales_amount' => (int) round($sales['total_untaxed']),
            'purchase_amount' => (int) round($purchase['total_untaxed']),
        ];
    }

    /**
     * 期間文字
     */
    public function getPeriodLabel(): string
    {
        [$year, $month] = explode('-', $this->period ?? now()->format('Y-m'));
        $rocYear = (int) $year - 1911;
        $endMonth = (int) $month + 1;
        return sprintf('民國 %d 年 %d-%d 月', $rocYear, $month, $endMonth);
    }

    /**
     * 匯出媒體申報 CSV
     * 格式：依國稅局營業稅 401 媒體申報規格簡化版
     * 真實使用時請依最新國稅局規格調整欄位順序與長度。
     */
    public function exportMediaFile(): \Symfony\Component\HttpFoundation\StreamedResponse
    {
        $sales = $this->salesData();
        $purchase = $this->purchaseData();
        $period = $this->period ?? now()->format('Y-m');

        return response()->streamDownload(function () use ($sales, $purchase, $period) {
            $f = fopen('php://output', 'w');
            // BOM for Excel UTF-8
            fwrite($f, "\xEF\xBB\xBF");
            fputcsv($f, ['類型', '日期', '發票/帳單號', '對方名稱', '統編', '銷售額', '稅額', '總計']);
            foreach ($sales['rows'] as $r) {
                fputcsv($f, [
                    '銷項',
                    $r->invoice_date,
                    $r->name,
                    $r->partner_name,
                    $r->buyer_tax_id ?? '',
                    $r->amount_untaxed,
                    $r->amount_tax,
                    $r->amount_total,
                ]);
            }
            foreach ($purchase['rows'] as $r) {
                fputcsv($f, [
                    '進項',
                    $r->invoice_date,
                    $r->name,
                    $r->partner_name,
                    $r->vendor_tax_id ?? '',
                    $r->amount_untaxed,
                    $r->amount_tax,
                    $r->amount_total,
                ]);
            }
            fclose($f);
        }, '401-' . $period . '.csv');
    }
}
