<?php

return [
    'title' => '部門',

    'navigation' => [
        'title' => '部門',
        'group' => '員工',
    ],

    'form' => [
        'sections' => [
            'activity-type-details' => [
                'title' => '一般資料',

                'fields' => [
                    'name'                => '活動類型',
                    'name-tooltip'        => 'Enter the official activity type name',
                    'action'              => '動作',
                    'default-user'        => 'Default User',
                    'summary'             => '摘要',
                    'note'                => '備註',
                ],
            ],

            'delay-information' => [
                'title' => 'Delay資料',

                'fields' => [
                    'delay-count'            => 'Delay Count',
                    'delay-unit'             => 'Delay Unit',
                    'delay-form'             => 'Delay Form',
                    'delay-form-helper-text' => 'Source of delay calculation',
                ],
            ],

            'advanced-information' => [
                'title' => 'Advanced資料',

                'fields' => [
                    'icon'                => 'Icon',
                    'decoration-type'     => 'Decoration類型',
                    'chaining-type'       => 'Chaining類型',
                    'suggest'             => 'Suggest',
                    'trigger'             => 'Trigger',
                ],
            ],

            'status-and-configuration-information' => [
                'title' => 'Status & Configuration',

                'fields' => [
                    'status'               => '狀態',
                    'keep-done-activities' => 'Keep Done Activities',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => '活動類型',
            'summary'    => '摘要',
            'planned-in' => 'Planned In',
            'type'       => '類型',
            'action'     => '動作',
            'status'     => '狀態',
            'created-at' => '建立時間',
            'updated-at' => '更新時間',
        ],

        'groups' => [
            'name'             => '名稱',
            'action-category'  => 'Action Category',
            'status'           => '狀態',
            'delay-count'      => 'Delay Count',
            'delay-unit'       => 'Delay Unit',
            'delay-source'     => 'Delay Source',
            'associated-model' => 'Associated Model',
            'chaining-type'    => 'Chaining類型',
            'decoration-type'  => 'Decoration類型',
            'default-user'     => 'Default User',
            'creation-date'    => 'Creation日期',
            'last-update'      => 'Last Update',
        ],

        'filters' => [
            'action'    => '動作',
            'status'    => '狀態',
            'has-delay' => 'Has Delay',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Activity type restored',
                    'body'  => 'The activity type has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Activity type已刪除',
                    'body'  => 'The activity type has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Activity type force已刪除',
                        'body'  => 'The Activity type has been force已刪除成功.',
                    ],
                    'error' => [
                        'title' => 'Activity type  could not be已刪除',
                        'body'  => 'The Activity type  cannot be已刪除 because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Activity types restored',
                    'body'  => 'The activity types has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Activity types已刪除',
                    'body'  => 'The activity types has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Activity types force已刪除',
                    'body'  => 'The activity types has been force已刪除成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'activity-type-details' => [
                'title' => '一般資料',

                'entries' => [
                    'name'                => '活動類型',
                    'name-tooltip'        => 'Enter the official activity type name',
                    'action'              => '動作',
                    'default-user'        => 'Default User',
                    'plugin'              => 'Plugin',
                    'summary'             => '摘要',
                    'note'                => '備註',
                ],
            ],

            'delay-information' => [
                'title' => 'Delay資料',

                'entries' => [
                    'delay-count'            => 'Delay Count',
                    'delay-unit'             => 'Delay Unit',
                    'delay-form'             => 'Delay Form',
                    'delay-form-helper-text' => 'Source of delay calculation',
                ],
            ],

            'advanced-information' => [
                'title' => 'Advanced資料',

                'entries' => [
                    'icon'                => 'Icon',
                    'decoration-type'     => 'Decoration類型',
                    'chaining-type'       => 'Chaining類型',
                    'suggest'             => 'Suggest',
                    'trigger'             => 'Trigger',
                ],
            ],

            'status-and-configuration-information' => [
                'title' => 'Status & Configuration',

                'entries' => [
                    'status'               => '狀態',
                    'keep-done-activities' => 'Keep Done Activities',
                ],
            ],
        ],
    ],
];
