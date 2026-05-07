<?php

return [
    'columns' => [
        'number'          => '編號',
        'state'           => '狀態',
        'customer'        => '客戶',
        'bill-date'       => '進貨日期',
        'due-date'        => '到期日',
        'tax-excluded'    => '稅 Excluded',
        'tax'             => '稅',
        'total'           => '總計',
        'amount-due'      => '金額 Due',
        'payment-state'   => '付款 State',
        'checked'         => '已核對',
        'accounting-date' => '入帳日期',
        'source-document' => '來源單據',
        'reference'       => '參考編號',
        'sales-person'    => '業務',
        'bill-currency'   => '進貨單 幣別',
    ],

    'values' => [
        'yes' => '是',
        'no'  => '否',
    ],

    'notification' => [
        'completed' => 'Your bill export has completed and :count row(s) exported.',
        'failed'    => ':count row(s) failed to export.',
    ],
];
