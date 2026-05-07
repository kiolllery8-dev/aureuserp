<?php

return [
    'navigation' => [
        'group' => '銀行',
        'title' => '銀行 帳戶',
    ],

    'form' => [
        'account-number'     => '帳戶 編號',
        'bank'               => '銀行',
        'account-holder'     => '帳戶 Holder',
        'can-send-money'     => 'Can Send Money',
    ],

    'table' => [
        'columns' => [
            'account-number' => '帳戶 編號',
            'bank'           => '銀行',
            'account-holder' => '帳戶 Holder',
            'send-money'     => 'Can Send Money',
            'created-at'     => '建立時間',
            'updated-at'     => '更新時間',
            'deleted-at'     => '刪除時間',
        ],

        'filters' => [
            'bank'           => '銀行',
            'account-holder' => '帳戶 Holder',
            'creator'        => '建立者',
            'can-send-money' => 'Can Send Money',
        ],

        'groups' => [
            'bank'               => '銀行',
            'can-send-money'     => 'Can Send Money',
            'created-at'         => '建立時間',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => '銀行 account已更新',
                    'body'  => 'The bank account has been已更新成功.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => '銀行 account restored',
                    'body'  => 'The bank account has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => '銀行 account已刪除',
                    'body'  => 'The bank account has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => '銀行 account force已刪除',
                    'body'  => 'The bank account has been force已刪除成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => '銀行 accounts restored',
                    'body'  => 'The bank accounts has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => '銀行 accounts已刪除',
                    'body'  => 'The bank accounts has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => '銀行 accounts force已刪除',
                    'body'  => 'The bank accounts has been force已刪除成功.',
                ],
            ],
        ],
    ],
];
