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
                    'name'                => 'Activity Type',
                    'name-tooltip'        => 'Enter the official activity type name',
                    'action'              => 'Action',
                    'default-user'        => 'Default User',
                    'summary'             => '摘要',
                    'note'                => '備註',
                ],
            ],

            'delay-information' => [
                'title' => 'Delay Information',

                'fields' => [
                    'delay-count'            => 'Delay Count',
                    'delay-unit'             => 'Delay Unit',
                    'delay-form'             => 'Delay Form',
                    'delay-form-helper-text' => 'Source of delay calculation',
                ],
            ],

            'advanced-information' => [
                'title' => 'Advanced Information',

                'fields' => [
                    'icon'                => 'Icon',
                    'decoration-type'     => 'Decoration Type',
                    'chaining-type'       => 'Chaining Type',
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
            'name'       => 'Activity Type',
            'summary'    => '摘要',
            'planned-in' => 'Planned In',
            'type'       => '類型',
            'action'     => 'Action',
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
            'chaining-type'    => 'Chaining Type',
            'decoration-type'  => 'Decoration Type',
            'default-user'     => 'Default User',
            'creation-date'    => 'Creation Date',
            'last-update'      => 'Last Update',
        ],

        'filters' => [
            'action'    => 'Action',
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
                    'title' => 'Activity type deleted',
                    'body'  => 'The activity type has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Activity type force deleted',
                        'body'  => 'The Activity type has been force deleted成功.',
                    ],
                    'error' => [
                        'title' => 'Activity type  could not be deleted',
                        'body'  => 'The Activity type  cannot be deleted because it is currently in use.',
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
                    'title' => 'Activity types deleted',
                    'body'  => 'The activity types has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Activity types force deleted',
                    'body'  => 'The activity types has been force deleted成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'activity-type-details' => [
                'title' => '一般資料',

                'entries' => [
                    'name'                => 'Activity Type',
                    'name-tooltip'        => 'Enter the official activity type name',
                    'action'              => 'Action',
                    'default-user'        => 'Default User',
                    'plugin'              => 'Plugin',
                    'summary'             => '摘要',
                    'note'                => '備註',
                ],
            ],

            'delay-information' => [
                'title' => 'Delay Information',

                'entries' => [
                    'delay-count'            => 'Delay Count',
                    'delay-unit'             => 'Delay Unit',
                    'delay-form'             => 'Delay Form',
                    'delay-form-helper-text' => 'Source of delay calculation',
                ],
            ],

            'advanced-information' => [
                'title' => 'Advanced Information',

                'entries' => [
                    'icon'                => 'Icon',
                    'decoration-type'     => 'Decoration Type',
                    'chaining-type'       => 'Chaining Type',
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
