<?php

return [
    'navigation' => [
        'title' => 'Bank Accounts',
        'group' => '銀行',
    ],

    'form' => [
        'account-number'     => 'Account Number',
        'bank'               => [
            'title'    => '銀行',
            'sections' => [
                'general' => [
                    'title' => '一般',

                    'fields' => [
                        'name'  => '名稱',
                        'code'  => 'Bank Identifier Code',
                        'email' => '電子郵件',
                        'phone' => '電話',
                    ],
                ],

                'address' => [
                    'title' => '地址',

                    'fields' => [
                        'address' => '地址',
                        'city'    => '城市',
                        'street1' => 'Street 1',
                        'street2' => 'Street 2',
                        'state'   => '狀態',
                        'zip'     => '郵遞區號',
                        'country' => '國家',
                    ],
                ],
            ],
        ],

        'account-holder'     => 'Account Holder',
    ],

    'table' => [
        'columns' => [
            'account-number' => 'Account Number',
            'bank'           => '銀行',
            'account-holder' => 'Account Holder',
            'send-money'     => 'Can Send Money',
            'created-at'     => '建立時間',
            'updated-at'     => '更新時間',
            'deleted-at'     => 'Deleted At',
        ],

        'filters' => [
            'bank'           => '銀行',
            'account-holder' => 'Account Holder',
            'creator'        => 'Creator',
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
                    'title' => 'Bank account updated',
                    'body'  => 'The bank account has been updated成功.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Bank account restored',
                    'body'  => 'The bank account has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Bank account deleted',
                    'body'  => 'The bank account has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Bank account force deleted',
                    'body'  => 'The bank account has been force deleted成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Bank accounts restored',
                    'body'  => 'The bank accounts has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Bank accounts deleted',
                    'body'  => 'The bank accounts has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Bank accounts force deleted',
                    'body'  => 'The bank accounts has been force deleted成功.',
                ],
            ],
        ],
    ],
];
