<?php

return [
    'columns' => [
        'number'           => 'Number',
        'date'             => '日期',
        'account'          => '科目',
        'partner'          => '夥伴',
        'label'            => 'Label',
        'reference'        => '參考',
        'journal'          => '日記帳',
        'debit'            => 'Debit',
        'credit'           => 'Credit',
        'balance'          => 'Balance',
        'currency'         => '幣別',
        'company'          => '公司',
        'status'           => '狀態',
        'amount-currency'  => 'Amount Currency',
        'amount-residual'  => 'Amount Residual',
        'reconciled'       => 'Reconciled',
        'due-date'         => '到期日',
    ],

    'values' => [
        'yes' => '是',
        'no'  => '否',
    ],

    'notification' => [
        'completed' => 'Your journal item export has completed and :count row(s) exported.',
        'failed'    => ':count row(s) failed to export.',
    ],
];
