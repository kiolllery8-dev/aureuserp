<?php

return [
    'title' => '付款',

    'navigation' => [
        'title' => '付款',
        'group' => '發票',
    ],

    'global-search' => [
        'partner' => '夥伴',
        'amount'  => '金額',
        'date'    => '日期',
    ],

    'form' => [
        'sections' => [
            'fields' => [
                'payment-type'          => 'Payment Type',
                'memo'                  => 'Memo',
                'date'                  => '日期',
                'amount'                => '金額',
                'currency'              => '幣別',
                'payment-method'        => 'Payment Method',
                'customer'              => '客戶',
                'vendor'                => '供應商',
                'journal'               => '日記帳',
                'customer-bank-account' => 'Customer Bank Account',
                'vendor-bank-account'   => 'Vendor Bank Account',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'            => '名稱',
            'date'            => '日期',
            'journal'         => '日記帳',
            'payment-method'  => 'Payment Method',
            'partner'         => '夥伴',
            'amount-currency' => 'Amount (Currency)',
            'amount'          => '金額',
            'state'           => '狀態',
            'company'         => '公司',
            'currency'        => '幣別',
            'created-by'      => '建立者',
        ],

        'groups' => [
            'name'                             => '名稱',
            'company'                          => '公司',
            'journal'                          => '日記帳',
            'partner'                          => '夥伴',
            'payment-method-line'              => 'Payment Method Line',
            'payment-method'                   => 'Payment Method',
            'partner-bank-account'             => 'Partner Bank Account',
            'created-at'                       => '建立時間',
            'updated-at'                       => '更新時間',
        ],

        'filters' => [
            'company'                          => '公司',
            'journal'                          => '日記帳',
            'customer-bank-account'            => 'Customer Bank Account',
            'payment-method'                   => 'Payment Method',
            'currency'                         => '幣別',
            'partner'                          => '夥伴',
            'payment-method-line'              => 'Payment Method Line',
            'created-at'                       => '建立時間',
            'updated-at'                       => '更新時間',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Payment deleted',
                    'body'  => 'The payment has been deleted成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Payments deleted',
                    'body'  => 'The payments has been deleted成功.',
                ],
            ],
        ],

        'toolbar-actions' => [
            'export' => [
                'label' => '匯出',
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'payment-information' => [
                'title'   => 'Payment Information',
                'entries' => [
                    'state'                 => '狀態',
                    'vendor'                => '供應商',
                    'customer'              => '客戶',
                    'payment-type'          => 'Payment Type',
                    'journal'               => '日記帳',
                    'customer-bank-account' => 'Customer Bank Account',
                    'vendor-bank-account'   => 'Vendor Bank Account',
                    'amount'                => '金額',
                    'payment-method'        => 'Payment Method',
                    'date'                  => '日期',
                    'memo'                  => 'Memo',
                ],
            ],
        ],
    ],

];
