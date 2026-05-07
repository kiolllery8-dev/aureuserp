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
                    'name-tooltip'        => '輸入官方活動類型名稱',
                    'action'              => '動作',
                    'default-user'        => '預設使用者',
                    'summary'             => '摘要',
                    'note'                => '備註',
                ],
            ],

            'delay-information' => [
                'title' => 'Delay資料',

                'fields' => [
                    'delay-count'            => '延遲次數',
                    'delay-unit'             => '延遲單位',
                    'delay-form'             => '延遲表單',
                    'delay-form-helper-text' => '延遲計算來源',
                ],
            ],

            'advanced-information' => [
                'title' => 'Advanced資料',

                'fields' => [
                    'icon'                => '圖示',
                    'decoration-type'     => 'Decoration類型',
                    'chaining-type'       => 'Chaining類型',
                    'suggest'             => '建議',
                    'trigger'             => '觸發',
                ],
            ],

            'status-and-configuration-information' => [
                'title' => '狀態與設定',

                'fields' => [
                    'status'               => '狀態',
                    'keep-done-activities' => '保留已完成活動',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => '活動類型',
            'summary'    => '摘要',
            'planned-in' => '排定於',
            'type'       => '類型',
            'action'     => '動作',
            'status'     => '狀態',
            'created-at' => '建立時間',
            'updated-at' => '更新時間',
        ],

        'groups' => [
            'name'             => '名稱',
            'action-category'  => '動作類別',
            'status'           => '狀態',
            'delay-count'      => '延遲次數',
            'delay-unit'       => '延遲單位',
            'delay-source'     => '延遲來源',
            'associated-model' => '關聯模型',
            'chaining-type'    => 'Chaining類型',
            'decoration-type'  => 'Decoration類型',
            'default-user'     => '預設使用者',
            'creation-date'    => 'Creation日期',
            'last-update'      => '最後更新',
        ],

        'filters' => [
            'action'    => '動作',
            'status'    => '狀態',
            'has-delay' => '有延遲',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => '活動類型已還原',
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
                    'title' => '活動類型已還原',
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
                    'name-tooltip'        => '輸入官方活動類型名稱',
                    'action'              => '動作',
                    'default-user'        => '預設使用者',
                    'plugin'              => '外掛',
                    'summary'             => '摘要',
                    'note'                => '備註',
                ],
            ],

            'delay-information' => [
                'title' => 'Delay資料',

                'entries' => [
                    'delay-count'            => '延遲次數',
                    'delay-unit'             => '延遲單位',
                    'delay-form'             => '延遲表單',
                    'delay-form-helper-text' => '延遲計算來源',
                ],
            ],

            'advanced-information' => [
                'title' => 'Advanced資料',

                'entries' => [
                    'icon'                => '圖示',
                    'decoration-type'     => 'Decoration類型',
                    'chaining-type'       => 'Chaining類型',
                    'suggest'             => '建議',
                    'trigger'             => '觸發',
                ],
            ],

            'status-and-configuration-information' => [
                'title' => '狀態與設定',

                'entries' => [
                    'status'               => '狀態',
                    'keep-done-activities' => '保留已完成活動',
                ],
            ],
        ],
    ],
];
