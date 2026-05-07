<?php

return [
    'navigation' => [
        'title' => '專案',
        'group' => '專案',
    ],

    'global-search' => [
        'project-manager' => '專案 主管',
        'customer'        => '客戶',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => '一般',

                'fields' => [
                    'name'             => '名稱',
                    'name-placeholder' => 'Project名稱...',
                    'description'      => '描述',
                ],
            ],

            'additional' => [
                'title' => '其他資料',

                'fields' => [
                    'project-manager'             => '專案 主管',
                    'customer'                    => '客戶',
                    'start-date'                  => '開始日期',
                    'end-date'                    => '結束日期',
                    'allocated-hours'             => 'Allocated Hours',
                    'allocated-hours-helper-text' => 'In hours (Eg. 1.5 hours means 1 hour 30 minutes)',
                    'tags'                        => '標籤',
                    'company'                     => '公司',
                ],
            ],

            'settings' => [
                'title' => '設定',

                'fields' => [
                    'visibility'                   => 'Visibility',
                    'visibility-hint-tooltip'      => 'Allow employees to access your project or tasks by adding them as followers. They will automatically gain access to any tasks assigned to them..',
                    'private-description'          => 'Invited internal users only.',
                    'internal-description'         => 'All internal users can see.',
                    'public-description'           => 'Invited portal users and all internal users.',
                    'time-management'              => '時間 Management',
                    'allow-timesheets'             => 'Allow時間sheets',
                    'allow-timesheets-helper-text' => 'Log time on tasks and track progress',
                    'task-management'              => '任務 Management',
                    'allow-milestones'             => 'Allow Milestones',
                    'allow-milestones-helper-text' => 'Monitor key milestones that are essential for achieving success.',
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
            'remaining-hours' => 'Remaining Hours',
            'project-manager' => '專案 主管',
        ],

        'groups' => [
            'stage'           => '階段',
            'project-manager' => '專案 主管',
            'customer'        => '客戶',
            'created-at'      => '建立時間',
        ],

        'filters' => [
            'name'             => '名稱',
            'visibility'       => 'Visibility',
            'start-date'       => '開始日期',
            'end-date'         => '結束日期',
            'allow-timesheets' => 'Allow時間sheets',
            'allow-milestones' => 'Allow Milestones',
            'allocated-hours'  => 'Allocated Hours',
            'created-at'       => '建立時間',
            'updated-at'       => '更新時間',
            'stage'            => '階段',
            'customer'         => '客戶',
            'project-manager'  => '專案 主管',
            'company'          => '公司',
            'creator'          => '建立者',
            'tags'             => '標籤',
        ],

        'actions' => [
            'tasks'      => ':count Tasks',
            'milestones' => ':completed milestones completed out of :all',

            'restore' => [
                'notification' => [
                    'title' => '專案 restored',
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
                        'title' => '專案 permanently已刪除',
                        'body'  => 'The project has been permanently已刪除成功.',
                    ],

                    'error' => [
                        'title' => '專案 cannot be permanently已刪除',
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
                    'description'      => '描述',
                ],
            ],

            'additional' => [
                'title' => '其他資料',

                'entries' => [
                    'project-manager'        => '專案 主管',
                    'customer'               => '客戶',
                    'project-timeline'       => 'Project時間line',
                    'allocated-hours'        => 'Allocated Hours',
                    'allocated-hours-suffix' => ' Hours',
                    'remaining-hours'        => 'Remaining Hours',
                    'remaining-hours-suffix' => ' Hours',
                    'current-stage'          => 'Current 階段',
                    'tags'                   => '標籤',
                ],
            ],

            'statistics' => [
                'title' => '統計',

                'entries' => [
                    'total-tasks'         => '總計 任務',
                    'milestones-progress' => 'Milestones Progress',
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
                'title' => '專案 設定',

                'entries' => [
                    'visibility'         => 'Visibility',
                    'timesheets-enabled' => 'Timesheets 啟用',
                    'milestones-enabled' => 'Milestones 啟用',
                ],
            ],
        ],
    ],
];
