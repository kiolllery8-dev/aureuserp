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
                    'default-user'        => '預設 使用者',
                    'summary'             => '摘要',
                    'note'                => '備註',
                ],
            ],

            'delay-information' => [
                'title' => 'Delay資料',

                'fields' => [
                    'delay-count'            => 'Delay Count',
                    'delay-unit'             => 'Delay 單位',
                    'delay-form'             => 'Delay Form',
                    'delay-form-helper-text' => '來源 of delay calculation',
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
                'title' => '狀態 & 組態設定',

                'fields' => [
                    'status'               => '狀態',
                    'keep-done-activities' => 'Keep Done 活動',
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
            'action-category'  => '動作 分類',
            'status'           => '狀態',
            'delay-count'      => 'Delay Count',
            'delay-unit'       => 'Delay 單位',
            'delay-source'     => 'Delay 來源',
            'associated-model' => 'Associated Model',
            'chaining-type'    => 'Chaining類型',
            'decoration-type'  => 'Decoration類型',
            'default-user'     => '預設 使用者',
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
                    'title' => '活動 type restored',
                    'body'  => 'The activity type has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => '活動 type已刪除',
                    'body'  => 'The activity type has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => '活動 type force已刪除',
                        'body'  => 'The 活動 type has been force已刪除成功.',
                    ],
                    'error' => [
                        'title' => '活動 type  could not be已刪除',
                        'body'  => 'The 活動 type  cannot be已刪除 because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => '活動 types restored',
                    'body'  => 'The activity types has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => '活動 types已刪除',
                    'body'  => 'The activity types has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => '活動 types force已刪除',
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
                    'default-user'        => '預設 使用者',
                    'plugin'              => 'Plugin',
                    'summary'             => '摘要',
                    'note'                => '備註',
                ],
            ],

            'delay-information' => [
                'title' => 'Delay資料',

                'entries' => [
                    'delay-count'            => 'Delay Count',
                    'delay-unit'             => 'Delay 單位',
                    'delay-form'             => 'Delay Form',
                    'delay-form-helper-text' => '來源 of delay calculation',
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
                'title' => '狀態 & 組態設定',

                'entries' => [
                    'status'               => '狀態',
                    'keep-done-activities' => 'Keep Done 活動',
                ],
            ],
        ],
    ],
];
