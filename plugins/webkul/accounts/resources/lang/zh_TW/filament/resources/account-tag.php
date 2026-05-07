<?php

return [
    'form' => [
        'fields' => [
            'color'         => 'Color',
            'country'       => '國家',
            'applicability' => 'Applicability',
            'name'          => '名稱',
            'status'        => '狀態',
            'tax-negate'    => 'Tax Negate',
        ],
    ],

    'table' => [
        'columns' => [
            'color'         => 'Color',
            'country'       => '國家',
            'created-by'    => '建立者',
            'applicability' => 'Applicability',
            'name'          => '名稱',
            'status'        => '狀態',
            'tax-negate'    => 'Tax Negate',
            'created-at'    => '建立時間',
            'updated-at'    => '更新時間',
            'deleted-at'    => 'Deleted At',
        ],

        'filters' => [
            'bank'           => '銀行',
            'account-holder' => 'Account Holder',
            'creator'        => 'Creator',
            'can-send-money' => 'Can Send Money',
        ],

        'groups' => [
            'country'       => '國家',
            'created-by'    => '建立者',
            'applicability' => 'Applicability',
            'name'          => '名稱',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Account Tag updated',
                    'body'  => 'The account Tag has been updated成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Account Tag deleted',
                    'body'  => 'The account Tag has been deleted成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Account Tags deleted',
                    'body'  => 'The account Tags has been deleted成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'color'         => 'Color',
            'country'       => '國家',
            'applicability' => 'Applicability',
            'name'          => '名稱',
            'status'        => '狀態',
            'tax-negate'    => 'Tax Negate',
        ],
    ],
];
