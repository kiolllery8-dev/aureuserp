<?php

return [
    'navigation' => [
        'title' => '活動計畫',
    ],

    'form' => [
        'name'   => '名稱',
        'status' => '狀態',
    ],

    'table' => [
        'columns' => [
            'name'       => '名稱',
            'status'     => '狀態',
            'created-at' => '建立時間',
            'updated-at' => '更新時間',
        ],

        'groups' => [
            'name'       => '名稱',
            'status'     => '狀態',
            'created-at' => '建立時間',
            'updated-at' => '更新時間',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => '活動 Plan restored',
                    'body'  => 'The activity plan has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => '活動計畫已刪除',
                    'body'  => 'The activity plan has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => '活動 Plan force已刪除',
                    'body'  => 'The activity plan has been force已刪除成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => '活動 Plans restored',
                    'body'  => 'The activity plans has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => '活動 Plans已刪除',
                    'body'  => 'The activity plans has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => '活動 Plans force已刪除',
                    'body'  => 'The activity plans has been force已刪除成功.',
                ],
            ],
        ],

        'empty-state' => [
            'create' => [
                'notification' => [
                    'title' => '活動 Plan已建立',
                    'body'  => 'The activity plan has been已建立成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'name'   => '名稱',
        'status' => '狀態',
    ],
];
