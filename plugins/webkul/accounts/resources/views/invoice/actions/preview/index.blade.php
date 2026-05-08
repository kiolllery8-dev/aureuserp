<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style type="text/css">
        body {
            font-family: 'sun-extb', 'Arial', sans-serif;
            font-size: 13px;
            color: #222;
            line-height: 1.5;
            margin: 0;
        }
        .agreement {
            margin-bottom: 50px;
            page-break-after: always;
        }
        .agreement:last-child {
            page-break-after: auto;
        }
        .invoice-title {
            text-align: center;
            font-size: 28px;
            font-weight: bold;
            letter-spacing: 12px;
            border: 3px double #b8860b;
            padding: 12px 0;
            color: #b8860b;
            margin-bottom: 6px;
        }
        .invoice-subtitle {
            text-align: center;
            font-size: 14px;
            color: #666;
            margin-bottom: 18px;
        }
        .meta-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 16px;
        }
        .meta-table td {
            padding: 6px 10px;
            border: 1px solid #999;
            vertical-align: top;
        }
        .meta-table .label {
            background: #f5e8c0;
            font-weight: bold;
            width: 80px;
            white-space: nowrap;
        }
        .items-table {
            width: 100%;
            border-collapse: collapse;
            margin: 16px 0 8px 0;
        }
        .items-table th {
            background: #f5e8c0;
            border: 1px solid #999;
            padding: 8px 10px;
            text-align: center;
            font-weight: bold;
        }
        .items-table td {
            border: 1px solid #999;
            padding: 8px 10px;
        }
        .items-table .num { text-align: right; font-family: 'Consolas', 'Courier New', monospace; }
        .items-table .ctr { text-align: center; }
        .summary-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 0;
        }
        .summary-table td {
            border: 1px solid #999;
            padding: 8px 12px;
        }
        .summary-table .label {
            background: #f5e8c0;
            text-align: right;
            font-weight: bold;
            width: 130px;
        }
        .summary-table .amount {
            text-align: right;
            font-family: 'Consolas', 'Courier New', monospace;
            width: 160px;
        }
        .summary-table .total .label,
        .summary-table .total .amount {
            background: #b8860b;
            color: white;
            font-size: 16px;
        }
        .signatures {
            margin-top: 24px;
            width: 100%;
            border-collapse: collapse;
        }
        .signatures td {
            width: 33%;
            border: 1px solid #999;
            height: 60px;
            text-align: center;
            padding: 6px;
            vertical-align: top;
        }
        .signatures .label {
            font-weight: bold;
            color: #555;
        }
        .footer-note {
            margin-top: 18px;
            font-size: 11px;
            color: #888;
            text-align: center;
        }
    </style>
</head>
<body>
@php
    // 計算金額：含稅總額、未稅小計、稅額
    $amountUntaxed = $record->amount_untaxed ?? 0;
    $amountTax = $record->amount_tax ?? 0;
    $amountTotal = $record->amount_total ?? 0;
    $totalDiscount = $record->total_discount ?? 0;

    // 中文大寫金額
    if (! function_exists('twNumToChinese')) {
        function twNumToChinese($num) {
            $num = (int) round($num);
            if ($num == 0) return '零元整';
            $digits = ['零','壹','貳','參','肆','伍','陸','柒','捌','玖'];
            $units  = ['','拾','佰','仟','萬','拾','佰','仟','億','拾','佰','仟'];
            $str = (string) abs($num);
            $len = strlen($str);
            $result = '';
            for ($i = 0; $i < $len; $i++) {
                $d = (int) $str[$i];
                $u = $units[$len - 1 - $i];
                if ($d === 0) {
                    if (in_array($u, ['萬','億'])) $result .= $u;
                    elseif (substr($result, -2) !== '零') $result .= '零';
                } else {
                    $result .= $digits[$d] . $u;
                }
            }
            $result = preg_replace('/零+/u', '零', $result);
            $result = rtrim($result, '零');
            return $result . '元整';
        }
    }

    // 字軌 + 流水號（從 record 拉，不存在就用 invoice number）
    $invoiceTrack = $record->l10n_tw_invoice_track ?? null;
    $invoiceNumber = $record->l10n_tw_invoice_number ?? null;
    $buyerTaxId = $record->l10n_tw_buyer_tax_id ?? ($record->partner->company_registry ?? '');
    $invoiceType = $record->l10n_tw_invoice_type ?? '三聯式';

    $sellerCompany = $record->company;
    $sellerTaxId = $sellerCompany->tax_id ?? '';
    $buyer = $record->partner;
@endphp

<div class="agreement">
    <!-- Title -->
    <div class="invoice-title">統 一 發 票</div>
    <div class="invoice-subtitle">{{ $invoiceType }}　{{ $record->invoice_date ? \Carbon\Carbon::parse($record->invoice_date)->format('中華民國 Y 年 m 月 d 日') : '' }}</div>

    <!-- Meta：字軌、發票號碼、買賣方資訊 -->
    <table class="meta-table">
        <tr>
            <td class="label">字　軌</td>
            <td>{{ $invoiceTrack ?: '——' }}</td>
            <td class="label">發票號碼</td>
            <td>{{ $invoiceNumber ?: $record->name }}</td>
        </tr>
        <tr>
            <td class="label">賣方營業人</td>
            <td>{{ $sellerCompany->name }}</td>
            <td class="label">統一編號</td>
            <td>{{ $sellerTaxId }}</td>
        </tr>
        <tr>
            <td class="label">賣方地址</td>
            <td colspan="3">
                @if($sellerCompany->partner)
                    {{ $sellerCompany->partner->zip ?? '' }}
                    @if($sellerCompany->partner->state){{ $sellerCompany->partner->state->name }}@endif
                    {{ $sellerCompany->partner->city ?? '' }}{{ $sellerCompany->partner->street1 ?? '' }}
                    @if($sellerCompany->partner->street2),{{ $sellerCompany->partner->street2 }}@endif
                @endif
                @if($sellerCompany->phone)　電話：{{ $sellerCompany->phone }}@endif
            </td>
        </tr>
        <tr>
            <td class="label">買受人</td>
            <td>{{ $buyer->name }}</td>
            <td class="label">統一編號</td>
            <td>{{ $buyerTaxId ?: '（個人）' }}</td>
        </tr>
        <tr>
            <td class="label">買方地址</td>
            <td colspan="3">
                {{ $buyer->zip ?? '' }}
                @if($buyer->state){{ $buyer->state->name }}@endif
                {{ $buyer->city ?? '' }}{{ $buyer->street1 ?? '' }}
                @if($buyer->street2),{{ $buyer->street2 }}@endif
                @if($buyer->phone)　電話：{{ $buyer->phone }}@endif
            </td>
        </tr>
    </table>

    <!-- 品項明細 -->
    @if (! $record->invoiceLines->isEmpty())
        <table class="items-table">
            <thead>
                <tr>
                    <th style="width:32px;">序</th>
                    <th>品名 / 規格</th>
                    <th style="width:60px;">數量</th>
                    @if (app(\Webkul\Product\Settings\ProductSettings::class)->enable_uom)
                        <th style="width:60px;">單位</th>
                    @endif
                    <th style="width:80px;">單價</th>
                    <th style="width:100px;">金額</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($record->invoiceLines as $i => $item)
                    <tr>
                        <td class="ctr">{{ $i + 1 }}</td>
                        <td>{{ $item->product?->name ?? $item->name ?? '' }}</td>
                        <td class="num">{{ number_format($item->quantity, 0) }}</td>
                        @if (app(\Webkul\Product\Settings\ProductSettings::class)->enable_uom)
                            <td class="ctr">{{ $item->product?->uom?->name ?? '' }}</td>
                        @endif
                        <td class="num">{{ number_format($item->price_unit, 0) }}</td>
                        <td class="num">{{ number_format($item->price_subtotal ?? ($item->quantity * $item->price_unit), 0) }}</td>
                    </tr>
                @endforeach
                @for($i = $record->invoiceLines->count(); $i < 8; $i++)
                    <tr>
                        <td class="ctr">{{ $i + 1 }}</td>
                        <td>&nbsp;</td><td>&nbsp;</td>
                        @if (app(\Webkul\Product\Settings\ProductSettings::class)->enable_uom)<td>&nbsp;</td>@endif
                        <td>&nbsp;</td><td>&nbsp;</td>
                    </tr>
                @endfor
            </tbody>
        </table>
    @endif

    <!-- 金額彙總（台灣三聯式格式） -->
    <table class="summary-table">
        <tr>
            <td class="label">銷售額合計</td>
            <td class="amount">{{ number_format($amountUntaxed, 0) }}</td>
            <td class="label">營業稅 5%</td>
            <td class="amount">{{ number_format($amountTax, 0) }}</td>
        </tr>
        @if($totalDiscount > 0)
        <tr>
            <td class="label">折扣</td>
            <td class="amount" colspan="3">-{{ number_format($totalDiscount, 0) }}</td>
        </tr>
        @endif
        <tr class="total">
            <td class="label">總計（含稅）</td>
            <td class="amount" colspan="3">NT$ {{ number_format($amountTotal, 0) }}</td>
        </tr>
        <tr>
            <td class="label">總計大寫</td>
            <td colspan="3">{{ twNumToChinese($amountTotal) }}</td>
        </tr>
    </table>

    <!-- 簽章 -->
    <table class="signatures">
        <tr>
            <td>
                <div class="label">營業人蓋用統一發票專用章</div>
            </td>
            <td>
                <div class="label">經手人</div>
            </td>
            <td>
                <div class="label">買方簽收</div>
            </td>
        </tr>
    </table>

    <div class="footer-note">
        本發票依加值型及非加值型營業稅法規定開立。如有疑問，請洽 {{ $sellerCompany->phone ?? $sellerCompany->email ?? '本公司' }}。
    </div>
</div>
</body>
</html>
