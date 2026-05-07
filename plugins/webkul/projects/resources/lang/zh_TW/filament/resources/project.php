<?php

return [
    'navigation' => [
        'title' => '專案',
        'group' => '專案',
    ],

    'global-search' => [
        'project-manager' => '專案經理',
        'customer'        => '客戶',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => '一般',

                'fields' => [
                    'name'             => '名稱',
                    'name-placeholder' => 'Project名稱...',
                    'description'      => '說明',
                ],
            ],

            'additional' => [
                'title' => '其他資料',

                'fields' => [
                    'project-manager'             => '專案經理',
                    'customer'                    => '客戶',
                    'start-date'                  => '開始日期',
                    'end-date'                    => '結束日期',
                    'allocated-hours'             => '分配工時',
                    'allocated-hours-helper-text' => '單位：小時（例如 1.5 表示 1 小時 30 分鐘）',
                    'tags'                        => '標籤',
                    'company'                     => '公司',
                ],
            ],

            'settings' => [
                'title' => '設定',

                'fields' => [
                    'visibility'                   => '可見度',
                    'visibility-hint-tooltip'      => '把員工加為追蹤者後，他們可以存取您的專案或任務，並自動獲得指派任務的存取權。',
                    'private-description'          => '僅受邀的內部使用者。',
                    'internal-description'         => '所有內部使用者皆可看到。',
                    'public-description'           => '受邀的入口使用者與所有內部使用者。',
                    'time-management'              => '時間管理',
                    'allow-timesheets'             => 'Allow時間sheets',
                    'allow-timesheets-helper-text' => '記錄任務時間並追蹤進度',
                    'task-management'              => '任務管理',
                    'allow-milestones'             => '允許里程碑',
                    'allow-milestones-helper-text' => '監督達成成功所需的關鍵里程碑。',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'            => '名稱',
            'customer'        => '客戶',
            'start-date'      => '開始日期',
            'end-date'        => '結束日期',
            'planned-date'    => 'Planned日期',
            'remaining-hours' => '剩餘工時',
            'project-manager' => '專案經理',
        ],

        'groups' => [
            'stage'           => '階段',
            'project-manager' => '專案經理',
            'customer'        => '客戶',
            'created-at'      => '建立時間',
        ],

        'filters' => [
            'name'             => '名稱',
            'visibility'       => '可見度',
            'start-date'       => '開始日期',
            'end-date'         => '結束日期',
            'allow-timesheets' => 'Allow時間sheets',
            'allow-milestones' => '允許里程碑',
            'allocated-hours'  => '分配工時',
            'created-at'       => '建立時間',
            'updated-at'       => '更新時間',
            'stage'            => '階段',
            'customer'         => '客戶',
            'project-manager'  => '專案經理',
            'company'          => '公司',
            'creator'          => '建立者',
            'tags'             => '標籤',
        ],

        'actions' => [
            'tasks'      => ':count Tasks',
            'milestones' => ':completed milestones completed out of :all',

            'restore' => [
                'notification' => [
                    'title' => '專案已還原',
                    'body'  => 'The project has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Project已刪除',
                    'body'  => 'The project has been已刪除成功.',
                ],
            ],

            'force-delete' => [

                'notification' => [

                    'success' => [
                        'title' => 'Project permanently已刪除',
                        'body'  => 'The project has been permanently已刪除成功.',
                    ],

                    'error' => [
                        'title' => 'Project cannot be permanently已刪除',
                        'body'  => 'The project is associated with other記錄s.',
                    ],

                ],
            ],

        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => '一般',

                'entries' => [
                    'name'             => '名稱',
                    'name-placeholder' => 'Project名稱...',
                    'description'      => '說明',
                ],
            ],

            'additional' => [
                'title' => '其他資料',

                'entries' => [
                    'project-manager'        => '專案經理',
                    'customer'               => '客戶',
                    'project-timeline'       => 'Project時間line',
                    'allocated-hours'        => '分配工時',
                    'allocated-hours-suffix' => ' 小時',
                    'remaining-hours'        => '剩餘工時',
                    'remaining-hours-suffix' => ' 小時',
                    'current-stage'          => '目前階段',
                    'tags'                   => '標籤',
                ],
            ],

            'statistics' => [
                'title' => '統計',

                'entries' => [
                    'total-tasks'         => '總任務',
                    'milestones-progress' => '里程碑進度',
                ],
            ],

            'record-information' => [
                'title' => '紀錄資料',

                'entries' => [
                    'created-at'   => '建立時間',
                    'created-by'   => '建立者',
                    'last-updated' => '最後更新',
                ],
            ],

            'settings' => [
                'title' => '專案設定',

                'entries' => [
                    'visibility'         => '可見度',
                    'timesheets-enabled' => '工時表啟用',
                    'milestones-enabled' => '里程碑啟用',
                ],
            ],
        ],
    ],
];
