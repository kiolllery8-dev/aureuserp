<?php

return [
    'form' => [
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

    'table' => [
        'columns' => [
            'name'           => '名稱',
            'code'           => 'Bank Identifier代碼',
            'country'        => '國家',
            'created-at'     => '建立時間',
            'updated-at'     => '更新時間',
            'deleted-at'     => '刪除時間',
        ],

        'groups' => [
            'country'               => '國家',
            'created-at'            => '建立時間',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Bank已更新',
                    'body'  => 'The bank has been已更新成功.',
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
                    'title' => 'Bank已刪除',
                    'body'  => 'The bank has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Bank force已刪除',
                    'body'  => 'The bank has been force已刪除成功.',
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
                    'title' => 'Banks已刪除',
                    'body'  => 'The banks has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Banks force已刪除',
                    'body'  => 'The banks has been force已刪除成功.',
                ],
            ],
        ],
    ],
];
