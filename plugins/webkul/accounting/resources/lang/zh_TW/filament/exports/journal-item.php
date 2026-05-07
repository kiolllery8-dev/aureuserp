<?php

return [
    'columns' => [
        'number'           => '編號',
        'date'             => '日期',
        'account'          => '帳戶',
        'partner'          => '夥伴',
        'label'            => '標籤',
        'reference'        => '參考編號',
        'journal'          => '帳本',
        'debit'            => '借方',
        'credit'           => '貸方',
        'balance'          => '餘額',
        'currency'         => '幣別',
        'company'          => '公司',
        'status'           => '狀態',
        'amount-currency'  => '金額 幣別',
        'amount-residual'  => '金額 Residual',
        'reconciled'       => '已核對',
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
