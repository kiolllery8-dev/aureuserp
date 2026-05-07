<?php

return [
    'title' => '管理Default 帳戶',

    'form' => [
        'exchange-difference-entries' => [
            'label' => 'Exchange Difference Entries',

            'fields' => [
                'journal' => [
                    'label' => '帳本',
                ],

                'gain' => [
                    'label' => 'Gain',
                ],

                'loss' => [
                    'label' => 'Loss',
                ],
            ],
        ],

        'bank-transfer-and-payments' => [
            'label' => '銀行 調撥 and 付款',

            'fields' => [
                'bank-suspense-account' => [
                    'label' => '銀行 Suspense 帳戶',
                ],

                'transfer-account' => [
                    'label' => '調撥 帳戶',
                ],
            ],
        ],

        'product-accounts' => [
            'label' => '商品 帳戶',

            'fields' => [
                'income-account' => [
                    'label' => 'Income 帳戶',
                ],

                'expense-account' => [
                    'label' => 'Expense 帳戶',
                ],
            ],
        ],
    ],
];
