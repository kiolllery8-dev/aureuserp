<x-filament-panels::page>
    <style>
        .tw-401 .section-title { font-size: 16px; font-weight: bold; margin: 18px 0 8px; padding: 6px 10px; background: #f5e8c0; border-left: 4px solid #b8860b; }
        .tw-401 table { width: 100%; border-collapse: collapse; margin: 8px 0 16px; font-size: 13px; }
        .tw-401 th, .tw-401 td { border: 1px solid #999; padding: 6px 8px; vertical-align: top; }
        .tw-401 th { background: #f5e8c0; text-align: center; }
        .tw-401 .num { text-align: right; font-family: 'Consolas', monospace; }
        .tw-401 .ctr { text-align: center; }
        .tw-401 .summary-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 12px; margin: 12px 0; }
        .tw-401 .summary-card { padding: 14px; border: 1px solid #d0a040; border-radius: 6px; background: #fffbe6; text-align: center; }
        .tw-401 .summary-card .label { font-size: 13px; color: #555; margin-bottom: 4px; }
        .tw-401 .summary-card .value { font-size: 22px; font-weight: bold; color: #b8860b; font-family: 'Consolas', monospace; }
        .tw-401 .summary-card.payable { border-color: #c00; background: #ffeeee; }
        .tw-401 .summary-card.payable .value { color: #c00; }
        .tw-401 .summary-card.refund { border-color: #050; background: #eeffee; }
        .tw-401 .summary-card.refund .value { color: #050; }
        .tw-401 .total-row td { background: #f5e8c0; font-weight: bold; }
    </style>

    <form wire:submit.prevent>
        {{ $this->form }}
    </form>

    <div class="tw-401" style="margin-top: 24px;">
        <h2 style="font-size: 22px; font-weight: bold;">{{ $this->getPeriodLabel() }} 401 營業稅申報</h2>

        @php
            $summary = $this->summary;
            $sales = $this->salesData;
            $purchase = $this->purchaseData;
        @endphp

        <!-- 試算 summary -->
        <div class="summary-grid">
            <div class="summary-card">
                <div class="label">銷項稅額（5%）</div>
                <div class="value">NT$ {{ number_format($summary['output_tax']) }}</div>
                <div style="font-size: 11px; color: #888; margin-top: 4px;">銷售額：{{ number_format($summary['sales_amount']) }}</div>
            </div>
            <div class="summary-card">
                <div class="label">進項稅額（5%）</div>
                <div class="value">NT$ {{ number_format($summary['input_tax']) }}</div>
                <div style="font-size: 11px; color: #888; margin-top: 4px;">進貨額：{{ number_format($summary['purchase_amount']) }}</div>
            </div>
            <div class="summary-card {{ $summary['is_payable'] ? 'payable' : 'refund' }}">
                <div class="label">{{ $summary['is_payable'] ? '本期應補繳營業稅' : '本期溢付（可退）營業稅' }}</div>
                <div class="value">NT$ {{ number_format(abs($summary['net'])) }}</div>
            </div>
        </div>

        <!-- 銷項憑證明細 -->
        <div class="section-title">銷項憑證明細表（共 {{ $sales['count'] }} 筆）</div>
        <table>
            <thead>
                <tr>
                    <th style="width: 32px;">序</th>
                    <th style="width: 110px;">日期</th>
                    <th>發票號碼</th>
                    <th>買受人</th>
                    <th style="width: 100px;">買方統編</th>
                    <th style="width: 110px;">銷售額</th>
                    <th style="width: 90px;">稅額</th>
                    <th style="width: 110px;">總計</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($sales['rows'] as $i => $r)
                    <tr>
                        <td class="ctr">{{ $i + 1 }}</td>
                        <td class="ctr">{{ $r->invoice_date }}</td>
                        <td>{{ $r->name }}</td>
                        <td>{{ $r->partner_name ?? '—' }}</td>
                        <td class="ctr">{{ $r->buyer_tax_id ?? '—' }}</td>
                        <td class="num">{{ number_format($r->amount_untaxed, 0) }}</td>
                        <td class="num">{{ number_format($r->amount_tax, 0) }}</td>
                        <td class="num">{{ number_format($r->amount_total, 0) }}</td>
                    </tr>
                @empty
                    <tr><td colspan="8" class="ctr" style="color: #999; padding: 24px;">本期無銷項資料</td></tr>
                @endforelse
                @if ($sales['count'] > 0)
                    <tr class="total-row">
                        <td colspan="5" class="ctr">合計</td>
                        <td class="num">{{ number_format($sales['total_untaxed'], 0) }}</td>
                        <td class="num">{{ number_format($sales['total_tax'], 0) }}</td>
                        <td class="num">{{ number_format($sales['total_amount'], 0) }}</td>
                    </tr>
                @endif
            </tbody>
        </table>

        <!-- 進項憑證明細 -->
        <div class="section-title">進項憑證明細表（共 {{ $purchase['count'] }} 筆）</div>
        <table>
            <thead>
                <tr>
                    <th style="width: 32px;">序</th>
                    <th style="width: 110px;">日期</th>
                    <th>發票/帳單號</th>
                    <th>供應商</th>
                    <th style="width: 100px;">供應商統編</th>
                    <th style="width: 110px;">進貨額</th>
                    <th style="width: 90px;">稅額</th>
                    <th style="width: 110px;">總計</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($purchase['rows'] as $i => $r)
                    <tr>
                        <td class="ctr">{{ $i + 1 }}</td>
                        <td class="ctr">{{ $r->invoice_date }}</td>
                        <td>{{ $r->name }}</td>
                        <td>{{ $r->partner_name ?? '—' }}</td>
                        <td class="ctr">{{ $r->vendor_tax_id ?? '—' }}</td>
                        <td class="num">{{ number_format($r->amount_untaxed, 0) }}</td>
                        <td class="num">{{ number_format($r->amount_tax, 0) }}</td>
                        <td class="num">{{ number_format($r->amount_total, 0) }}</td>
                    </tr>
                @empty
                    <tr><td colspan="8" class="ctr" style="color: #999; padding: 24px;">本期無進項資料</td></tr>
                @endforelse
                @if ($purchase['count'] > 0)
                    <tr class="total-row">
                        <td colspan="5" class="ctr">合計</td>
                        <td class="num">{{ number_format($purchase['total_untaxed'], 0) }}</td>
                        <td class="num">{{ number_format($purchase['total_tax'], 0) }}</td>
                        <td class="num">{{ number_format($purchase['total_amount'], 0) }}</td>
                    </tr>
                @endif
            </tbody>
        </table>

        <div style="margin-top: 24px; padding: 14px; background: #f9f9f9; border-radius: 6px; font-size: 12px; color: #666; line-height: 1.7;">
            <strong>說明：</strong><br>
            • 401 營業稅每雙月申報一次，於奇數月（1、3、5、7、9、11 月）的 1-15 日申報前一雙月份。<br>
            • 「應補繳」 = 銷項稅額 - 進項稅額（為正）；「溢付」 = 進項大於銷項。<br>
            • 點右上角「匯出 401 媒體申報檔」可下載 CSV，可進一步轉成國稅局媒體申報格式 (.txt)。<br>
            • 媒體申報格式請依財政部國稅局最新公告為準。
        </div>
    </div>
</x-filament-panels::page>
