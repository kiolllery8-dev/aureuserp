<?php

return [
    'title' => '管理Default Accounts',

    'form' => [
        'exchange-difference-entries' => [
            'label' => '匯差分錄',

            'fields' => [
                'journal' => [
                    'label' => '帳本',
                ],

                'gain' => [
                    'label' => '收益',
                ],

                'loss' => [
                    'label' => '損失',
                ],
            ],
        ],

        'bank-transfer-and-payments' => [
            'label' => 'Bank Transfer and Payments',

            'fields' => [
                'bank-suspense-account' => [
                    'label' => 'Bank Suspense Account',
                ],

                'transfer-account' => [
                    'label' => 'Transfer Account',
                ],
            ],
        ],

        'product-accounts' => [
            'label' => 'Product Accounts',

            'fields' => [
                'income-account' => [
                    'label' => 'Income Account',
                ],

                'expense-account' => [
                    'label' => 'Expense Account',
                ],
            ],
        ],
    ],
];
