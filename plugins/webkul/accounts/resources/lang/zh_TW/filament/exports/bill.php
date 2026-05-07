<?php

return [
    'columns' => [
        'number'          => 'Number',
        'state'           => '狀態',
        'customer'        => '客戶',
        'bill-date'       => 'Bill Date',
        'due-date'        => '到期日',
        'tax-excluded'    => 'Tax Excluded',
        'tax'             => '稅',
        'total'           => '總計',
        'amount-due'      => 'Amount Due',
        'payment-state'   => 'Payment State',
        'checked'         => 'Checked',
        'accounting-date' => 'Accounting Date',
        'source-document' => 'Source Document',
        'reference'       => '參考',
        'sales-person'    => 'Sales Person',
        'bill-currency'   => 'Bill Currency',
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
