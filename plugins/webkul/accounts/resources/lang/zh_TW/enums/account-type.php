<?php

return [
    'assets' => [
        'label'   => '資產',
        'options' => [
            'receivable'  => '應收帳款',
            'cash'        => 'Bank and Cash',
            'current'     => '流動資產',
            'non-current' => '非流動資產',
            'prepayments' => '預付款',
            'fixed'       => '固定資產',
        ],
    ],

    'liabilities' => [
        'label'   => '負債',
        'options' => [
            'payable'     => '應付帳款',
            'credit-card' => '信用卡',
            'current'     => '流動負債',
            'non-current' => '非流動負債',
        ],
    ],

    'equity' => [
        'label'   => '權益',
        'options' => [
            'equity'     => '權益',
            'unaffected' => '本年度盈餘',
        ],
    ],

    'income' => [
        'label'   => '收入',
        'options' => [
            'income' => '收入',
            'other'  => '其他收入',
        ],
    ],

    'expenses' => [
        'label'   => '費用',
        'options' => [
            'expense'      => '費用',
            'depreciation' => '折舊',
            'direct-cost'  => 'Cost of Revenue',
        ],
    ],

    'off-balance' => [
        'label'   => '資產負債表外',
        'options' => [
            'off-balance' => '資產負債表外',
        ],
    ],
];
