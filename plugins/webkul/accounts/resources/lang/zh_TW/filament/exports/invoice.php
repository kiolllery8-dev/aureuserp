<?php

return [
    'columns' => [
        'number'           => 'Number',
        'state'            => '狀態',
        'customer'         => '客戶',
        'invoice-date'     => 'Invoice Date',
        'due-date'         => '到期日',
        'tax-excluded'     => 'Tax Excluded',
        'tax'              => '稅',
        'total'            => '總計',
        'amount-due'       => 'Amount Due',
        'payment-state'    => 'Payment State',
        'checked'          => 'Checked',
        'accounting-date'  => 'Accounting Date',
        'source-document'  => 'Source Document',
        'reference'        => '參考',
        'sales-person'     => 'Sales Person',
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
