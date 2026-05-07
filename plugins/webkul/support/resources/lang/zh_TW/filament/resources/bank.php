<?php

return [
    'form' => [
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

    'table' => [
        'columns' => [
            'name'           => '名稱',
            'code'           => 'Bank Identifier Code',
            'country'        => '國家',
            'created-at'     => '建立時間',
            'updated-at'     => '更新時間',
            'deleted-at'     => 'Deleted At',
        ],

        'groups' => [
            'country'               => '國家',
            'created-at'            => '建立時間',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Bank updated',
                    'body'  => 'The bank has been updated成功.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Bank restored',
                    'body'  => 'The bank has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Bank deleted',
                    'body'  => 'The bank has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Bank force deleted',
                    'body'  => 'The bank has been force deleted成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Banks restored',
                    'body'  => 'The banks has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Banks deleted',
                    'body'  => 'The banks has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Banks force deleted',
                    'body'  => 'The banks has been force deleted成功.',
                ],
            ],
        ],
    ],
];
