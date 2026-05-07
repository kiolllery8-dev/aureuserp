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
            'label' => '銀行轉帳與付款',

            'fields' => [
                'bank-suspense-account' => [
                    'label' => '銀行暫掛科目',
                ],

                'transfer-account' => [
                    'label' => '轉帳科目',
                ],
            ],
        ],

        'product-accounts' => [
            'label' => '商品科目',

            'fields' => [
                'income-account' => [
                    'label' => '收入科目',
                ],

                'expense-account' => [
                    'label' => '費用科目',
                ],
            ],
        ],
    ],
];
