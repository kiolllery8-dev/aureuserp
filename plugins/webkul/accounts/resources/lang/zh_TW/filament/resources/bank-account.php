<?php

return [
    'navigation' => [
        'title' => '銀行帳戶',
        'group' => '銀行',
    ],

    'form' => [
        'account-number'     => '帳號',
        'bank'               => [
            'title'    => '銀行',
            'sections' => [
                'general' => [
                    'title' => '一般',

                    'fields' => [
                        'name'  => '名稱',
                        'code'  => 'Bank Identifier代碼',
                        'email' => '電子郵件',
                        'phone' => '電話',
                    ],
                ],

                'address' => [
                    'title' => '地址',

                    'fields' => [
                        'address' => '地址',
                        'city'    => '城市',
                        'street1' => '地址 1',
                        'street2' => '地址 2',
                        'state'   => '狀態',
                        'zip'     => '郵遞區號',
                        'country' => '國家',
                    ],
                ],
            ],
        ],

        'account-holder'     => '帳戶持有人',
    ],

    'table' => [
        'columns' => [
            'account-number' => '帳號',
            'bank'           => '銀行',
            'account-holder' => '帳戶持有人',
            'send-money'     => '可匯款',
            'created-at'     => '建立時間',
            'updated-at'     => '更新時間',
            'deleted-at'     => '刪除時間',
        ],

        'filters' => [
            'bank'           => '銀行',
            'account-holder' => '帳戶持有人',
            'creator'        => '建立者',
            'can-send-money' => '可匯款',
        ],

        'groups' => [
            'bank'               => '銀行',
            'can-send-money'     => '可匯款',
            'created-at'         => '建立時間',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Bank account已更新',
                    'body'  => 'The bank account has been已更新成功.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => '銀行帳戶已還原',
                    'body'  => 'The bank account has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Bank account已刪除',
                    'body'  => 'The bank account has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Bank account force已刪除',
                    'body'  => 'The bank account has been force已刪除成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => '銀行帳戶已還原',
                    'body'  => 'The bank accounts has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Bank accounts已刪除',
                    'body'  => 'The bank accounts has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Bank accounts force已刪除',
                    'body'  => 'The bank accounts has been force已刪除成功.',
                ],
            ],
        ],
    ],
];
