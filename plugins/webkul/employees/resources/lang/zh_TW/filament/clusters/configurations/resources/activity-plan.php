<?php

return [
    'navigation' => [
        'title' => '活動計畫',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => '一般資料',
                'fields' => [
                    'name'       => '名稱',
                    'status'     => '狀態',
                    'department' => '部門',
                    'company'    => '公司',
                ],
            ],
        ],
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
            'activity-types' => '活動類型s',
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

        'activity-plan' => [
            'create' => [
                'notification' => [
                    'title' => '活動 Plan已建立',
                    'body'  => 'The activity plan has been已建立成功.',
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
        'sections' => [
            'general' => [
                'title'   => '一般資料',
                'entries' => [
                    'name'       => '名稱',
                    'status'     => '狀態',
                    'department' => '部門',
                    'manager'    => '主管',
                    'company'    => '公司',
                ],
            ],
        ],
    ],
];
