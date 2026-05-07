<?php

return [
    'navigation' => [
        'title' => '專案',
        'group' => '專案',
    ],

    'global-search' => [
        'project-manager' => 'Project Manager',
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
                    'project-manager'             => 'Project Manager',
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
                    'visibility-hint-tooltip'      => 'Allow employees to access your project or tasks by adding them as followers. They will automatically gain access to any tasks assigned to them..',
                    'private-description'          => 'Invited internal users only.',
                    'internal-description'         => 'All internal users can see.',
                    'public-description'           => 'Invited portal users and all internal users.',
                    'time-management'              => 'Time Management',
                    'allow-timesheets'             => 'Allow時間sheets',
                    'allow-timesheets-helper-text' => '記錄任務時間並追蹤進度',
                    'task-management'              => 'Task Management',
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
            'project-manager' => 'Project Manager',
        ],

        'groups' => [
            'stage'           => '階段',
            'project-manager' => 'Project Manager',
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
            'project-manager'  => 'Project Manager',
            'company'          => '公司',
            'creator'          => '建立者',
            'tags'             => '標籤',
        ],

        'actions' => [
            'tasks'      => ':count Tasks',
            'milestones' => ':completed milestones completed out of :all',

            'restore' => [
                'notification' => [
                    'title' => 'Project restored',
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
                    'project-manager'        => 'Project Manager',
                    'customer'               => '客戶',
                    'project-timeline'       => 'Project時間line',
                    'allocated-hours'        => '分配工時',
                    'allocated-hours-suffix' => ' 小時',
                    'remaining-hours'        => '剩餘工時',
                    'remaining-hours-suffix' => ' 小時',
                    'current-stage'          => 'Current Stage',
                    'tags'                   => '標籤',
                ],
            ],

            'statistics' => [
                'title' => '統計',

                'entries' => [
                    'total-tasks'         => 'Total Tasks',
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
                'title' => 'Project Settings',

                'entries' => [
                    'visibility'         => '可見度',
                    'timesheets-enabled' => 'Timesheets Enabled',
                    'milestones-enabled' => 'Milestones Enabled',
                ],
            ],
        ],
    ],
];
