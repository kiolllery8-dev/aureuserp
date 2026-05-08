<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ChartOfAccountsResource\Pages\ManageChartOfAccounts;
use Webkul\Account\Filament\Resources\AccountResource as BaseAccountResource;
use Webkul\Account\Models\Account;

/**
 * 會計科目 — 獨立應用
 *
 * 把原本埋在「會計 > 設定 > 科目」的會計科目表拉到頂層 navigation，
 * 作為獨立應用顯示，方便日常瀏覽 / 維護科目表。
 *
 * 同一張底層資料表 (accounts_accounts)，所以原本「會計 > 設定 > 科目」
 * 路徑仍然可用，兩邊看到的是同一份資料。
 */
class ChartOfAccountsResource extends BaseAccountResource
{
    protected static ?string $model = Account::class;

    /**
     * 跳出 Configuration cluster，作為頂層 navigation 顯示
     */
    protected static ?string $cluster = null;

    protected static bool $shouldRegisterNavigation = true;

    protected static bool $isGloballySearchable = true;

    /**
     * 排在頂層第一位（早於會計、聯絡人等大模組）
     */
    protected static ?int $navigationSort = 1;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static string|\BackedEnum|null $activeNavigationIcon = 'heroicon-s-rectangle-stack';

    protected static ?string $modelLabel = '會計科目';

    protected static ?string $pluralModelLabel = '會計科目';

    protected static ?string $slug = 'chart-of-accounts';

    public static function getNavigationLabel(): string
    {
        return '會計科目';
    }

    public static function getNavigationGroup(): ?string
    {
        // 獨立的 navigation group，跟「會計」並列
        return '會計科目（COA）';
    }

    public static function getModelLabel(): string
    {
        return '會計科目';
    }

    public static function getPluralModelLabel(): string
    {
        return '會計科目';
    }

    public static function getPages(): array
    {
        return [
            'index' => ManageChartOfAccounts::route('/'),
        ];
    }
}
