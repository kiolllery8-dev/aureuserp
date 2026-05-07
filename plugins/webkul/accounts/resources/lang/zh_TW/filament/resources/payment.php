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
                'payment-type'          => 'Payment類型',
                'memo'                  => 'Memo',
                'date'                  => '日期',
                'amount'                => '金額',
                'currency'              => '幣別',
                'payment-method'        => '付款方式',
                'customer'              => '客戶',
                'vendor'                => '供應商',
                'journal'               => '帳本',
                'customer-bank-account' => 'Customer Bank Account',
                'vendor-bank-account'   => 'Vendor Bank Account',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'            => '名稱',
            'date'            => '日期',
            'journal'         => '帳本',
            'payment-method'  => '付款方式',
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
            'journal'                          => '帳本',
            'partner'                          => '夥伴',
            'payment-method-line'              => 'Payment Method Line',
            'payment-method'                   => '付款方式',
            'partner-bank-account'             => 'Partner Bank Account',
            'created-at'                       => '建立時間',
            'updated-at'                       => '更新時間',
        ],

        'filters' => [
            'company'                          => '公司',
            'journal'                          => '帳本',
            'customer-bank-account'            => 'Customer Bank Account',
            'payment-method'                   => '付款方式',
            'currency'                         => '幣別',
            'partner'                          => '夥伴',
            'payment-method-line'              => 'Payment Method Line',
            'created-at'                       => '建立時間',
            'updated-at'                       => '更新時間',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Payment已刪除',
                    'body'  => 'The payment has been已刪除成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Payments已刪除',
                    'body'  => 'The payments has been已刪除成功.',
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
                'title'   => 'Payment資料',
                'entries' => [
                    'state'                 => '狀態',
                    'vendor'                => '供應商',
                    'customer'              => '客戶',
                    'payment-type'          => 'Payment類型',
                    'journal'               => '帳本',
                    'customer-bank-account' => 'Customer Bank Account',
                    'vendor-bank-account'   => 'Vendor Bank Account',
                    'amount'                => '金額',
                    'payment-method'        => '付款方式',
                    'date'                  => '日期',
                    'memo'                  => 'Memo',
                ],
            ],
        ],
    ],

];
