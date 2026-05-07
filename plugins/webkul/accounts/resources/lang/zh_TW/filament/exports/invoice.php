<?php

return [
    'columns' => [
        'number'           => '編號',
        'state'            => '狀態',
        'customer'         => '客戶',
        'invoice-date'     => '開立日期',
        'due-date'         => '到期日',
        'tax-excluded'     => 'Tax Excluded',
        'tax'              => '稅',
        'total'            => '總計',
        'amount-due'       => 'Amount Due',
        'payment-state'    => 'Payment State',
        'checked'          => '已核對',
        'accounting-date'  => '入帳日期',
        'source-document'  => '來源單據',
        'reference'        => '參考編號',
        'sales-person'     => '業務',
        'invoice-currency' => 'Invoice Currency',
    ],

    'values' => [
        'yes' => '是',
        'no'  => '否',
    ],

    'notification' => [
        'completed' => 'Your invoice export has completed and :count row(s) exported.',
        'failed'    => ':count row(s) failed to export.',
    ],
];
