<?php

return [
    'navigation' => [
        'title' => 'Activity Plans',
        'group' => '活動',
    ],

    'global-search' => [
        'name'         => '部門',
        'department'   => '部門',
        'manager'      => 'Manager',
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
            'manager'    => 'Manager',
            'created-by' => '建立者',
            'created-at' => '建立時間',
            'updated-at' => '更新時間',
        ],

        'filters' => [
            'name'           => '名稱',
            'plugin'         => 'Plugin',
            'activity-types' => 'Activity Types',
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
                    'title' => 'Activity Plan deleted',
                    'body'  => 'The activity plan has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Activity Plan force deleted',
                    'body'  => 'The activity plan has been force deleted成功.',
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
                    'title' => 'Activity Plans deleted',
                    'body'  => 'The activity plans has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Activity Plans force deleted',
                    'body'  => 'The activity plans has been force deleted成功.',
                ],
            ],
        ],

        'empty-state' => [
            'create' => [
                'notification' => [
                    'title' => 'Activity Plan created',
                    'body'  => 'The activity plan has been created成功.',
                ],
            ],
        ],
    ],
];
