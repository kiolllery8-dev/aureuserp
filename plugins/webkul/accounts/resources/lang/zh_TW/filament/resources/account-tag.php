<?php

return [
    'form' => [
        'fields' => [
            'color'         => '顏色',
            'country'       => '國家',
            'applicability' => 'Applicability',
            'name'          => '名稱',
            'status'        => '狀態',
            'tax-negate'    => 'Tax Negate',
        ],
    ],

    'table' => [
        'columns' => [
            'color'         => '顏色',
            'country'       => '國家',
            'created-by'    => '建立者',
            'applicability' => 'Applicability',
            'name'          => '名稱',
            'status'        => '狀態',
            'tax-negate'    => 'Tax Negate',
            'created-at'    => '建立時間',
            'updated-at'    => '更新時間',
            'deleted-at'    => '刪除時間',
        ],

        'filters' => [
            'bank'           => '銀行',
            'account-holder' => 'Account Holder',
            'creator'        => '建立者',
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
                    'title' => 'Account Tag已更新',
                    'body'  => 'The account Tag has been已更新成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Account Tag已刪除',
                    'body'  => 'The account Tag has been已刪除成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Account Tags已刪除',
                    'body'  => 'The account Tags has been已刪除成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'color'         => '顏色',
            'country'       => '國家',
            'applicability' => 'Applicability',
            'name'          => '名稱',
            'status'        => '狀態',
            'tax-negate'    => 'Tax Negate',
        ],
    ],
];
