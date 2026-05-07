<?php

return [
    'form' => [
        'fields' => [
            'color'         => '顏色',
            'country'       => '國家',
            'applicability' => 'Applicability',
            'name'          => '名稱',
            'status'        => '狀態',
            'tax-negate'    => '稅 Negate',
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
            'tax-negate'    => '稅 Negate',
            'created-at'    => '建立時間',
            'updated-at'    => '更新時間',
            'deleted-at'    => '刪除時間',
        ],

        'filters' => [
            'bank'           => '銀行',
            'account-holder' => '帳戶 Holder',
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
                    'title' => '帳戶 標籤已更新',
                    'body'  => 'The account 標籤 has been已更新成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => '帳戶 標籤已刪除',
                    'body'  => 'The account 標籤 has been已刪除成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => '帳戶 標籤已刪除',
                    'body'  => 'The account 標籤 has been已刪除成功.',
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
            'tax-negate'    => '稅 Negate',
        ],
    ],
];
