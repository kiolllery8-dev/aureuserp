<?php

return [
    'navigation' => [
        'title' => '活動計畫',
        'group' => '活動',
    ],

    'global-search' => [
        'name'         => '部門',
        'department'   => '部門',
        'manager'      => '主管',
        'company'      => '公司',
        'plugin'       => 'Plugin',
        'creator-name' => '建立者',
    ],

    'table' => [
        'columns' => [
            'name'       => '名稱',
            'status'     => '狀態',
            'department' => '部門',
            'company'    => '公司',
            'manager'    => '主管',
            'created-by' => '建立者',
            'created-at' => '建立時間',
            'updated-at' => '更新時間',
        ],

        'filters' => [
            'name'           => '名稱',
            'plugin'         => 'Plugin',
            'activity-types' => 'Activity類型s',
            'company'        => '公司',
            'department'     => '部門',
            'is-active'      => '狀態',
            'updated-at'     => '更新時間',
            'created-at'     => '建立時間',
        ],

        'groups' => [
            'status'     => '狀態',
            'name'       => '名稱',
            'created-by' => '建立者',
            'created-at' => '建立時間',
            'updated-at' => '更新時間',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Activity Plan restored',
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
                    'title' => 'Activity Plan force已刪除',
                    'body'  => 'The activity plan has been force已刪除成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Activity Plans restored',
                    'body'  => 'The activity plans has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Activity Plans已刪除',
                    'body'  => 'The activity plans has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Activity Plans force已刪除',
                    'body'  => 'The activity plans has been force已刪除成功.',
                ],
            ],
        ],

        'empty-state' => [
            'create' => [
                'notification' => [
                    'title' => 'Activity Plan已建立',
                    'body'  => 'The activity plan has been已建立成功.',
                ],
            ],
        ],
    ],
];
