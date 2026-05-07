<?php

return [
    'assets' => [
        'label'   => '資產',
        'options' => [
            'receivable'  => '應收帳款',
            'cash'        => '銀行 and Cash',
            'current'     => 'Current Assets',
            'non-current' => 'Non-current Assets',
            'prepayments' => 'Prepayments',
            'fixed'       => 'Fixed Assets',
        ],
    ],

    'liabilities' => [
        'label'   => 'Liabilities',
        'options' => [
            'payable'     => '應付帳款',
            'credit-card' => 'Credit Card',
            'current'     => 'Current Liabilities',
            'non-current' => 'Non-current Liabilities',
        ],
    ],

    'equity' => [
        'label'   => '權益',
        'options' => [
            'equity'     => '權益',
            'unaffected' => 'Current Year Earnings',
        ],
    ],

    'income' => [
        'label'   => 'Income',
        'options' => [
            'income' => 'Income',
            'other'  => 'Other Income',
        ],
    ],

    'expenses' => [
        'label'   => '費用',
        'options' => [
            'expense'      => '費用',
            'depreciation' => 'Depreciation',
            'direct-cost'  => '成本 of Revenue',
        ],
    ],

    'off-balance' => [
        'label'   => 'Off-Balance Sheet',
        'options' => [
            'off-balance' => 'Off-Balance Sheet',
        ],
    ],
];
