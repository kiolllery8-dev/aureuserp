<?php

return [
    'title' => '任務',

    'navigation' => [
        'title' => '任務',
        'group' => '專案',
    ],

    'global-search' => [
        'project'   => '專案',
        'customer'  => '客戶',
        'milestone' => '里程碑',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => '一般',

                'fields' => [
                    'title'             => '標題',
                    'title-placeholder' => '任務 標題...',
                    'tags'              => '標籤',
                    'name'              => '名稱',
                    'color'             => '顏色',
                    'description'       => '描述',
                    'project'           => '專案',
                    'status'            => '狀態',
                    'start_date'        => '開始日期',
                    'end_date'          => '結束日期',
                ],
            ],

            'additional' => [
                'title' => '其他資料',
            ],

            'settings' => [
                'title' => '設定',

                'fields' => [
                    'project'                     => '專案',
                    'milestone'                   => '里程碑',
                    'milestone-hint-text'         => 'Automatically deliver your services upon reaching a milestone by linking it to a sales order item.',
                    'name'                        => '名稱',
                    'deadline'                    => '截止日',
                    'is-completed'                => 'Is 已完成',
                    'customer'                    => '客戶',
                    'assignees'                   => '指派對象',
                    'allocated-hours'             => 'Allocated Hours',
                    'allocated-hours-helper-text' => 'In hours (Eg. 1.5 hours means 1 hour 30 minutes)',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'id'                  => '編號',
            'priority'            => '優先順序',
            'state'               => '狀態',
            'new-state'           => '新增State',
            'update-state'        => 'Update State',
            'title'               => '標題',
            'project'             => '專案',
            'project-placeholder' => '私人 任務',
            'milestone'           => '里程碑',
            'customer'            => '客戶',
            'assignees'           => '指派對象',
            'allocated-time'      => 'Allocated時間',
            'time-spent'          => '花費時間',
            'time-remaining'      => '時間 Remaining',
            'progress'            => 'Progress',
            'deadline'            => '截止日',
            'tags'                => '標籤',
            'stage'               => '階段',
        ],

        'groups' => [
            'state'      => '狀態',
            'project'    => '專案',
            'milestone'  => '里程碑',
            'customer'   => '客戶',
            'deadline'   => '截止日',
            'stage'      => '階段',
            'created-at' => '建立時間',
        ],

        'filters' => [
            'title'             => '標題',
            'priority'          => '優先順序',
            'low'               => '低',
            'high'              => '高',
            'state'             => '狀態',
            'tags'              => '標籤',
            'allocated-hours'   => 'Allocated Hours',
            'total-hours-spent' => '總計 Hours Spent',
            'remaining-hours'   => 'Remaining Hours',
            'overtime'          => 'Overtime',
            'progress'          => 'Progress',
            'deadline'          => '截止日',
            'created-at'        => '建立時間',
            'updated-at'        => '更新時間',
            'assignees'         => '指派對象',
            'customer'          => '客戶',
            'project'           => '專案',
            'stage'             => '階段',
            'milestone'         => '里程碑',
            'company'           => '公司',
            'creator'           => '建立者',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => '任務 restored',
                    'body'  => 'The task has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Task已刪除',
                    'body'  => 'The task has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => '任務 force已刪除',
                    'body'  => 'The task has been force已刪除成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => '任務 restored',
                    'body'  => 'The tasks has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Tasks已刪除',
                    'body'  => 'The tasks has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => '任務 force已刪除',
                    'body'  => 'The tasks has been force已刪除成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => '一般',

                'entries' => [
                    'title'       => '標題',
                    'state'       => '狀態',
                    'tags'        => '標籤',
                    'priority'    => '優先順序',
                    'description' => '描述',
                ],
            ],

            'project-information' => [
                'title' => 'Project資料',

                'entries' => [
                    'project'   => '專案',
                    'milestone' => '里程碑',
                    'customer'  => '客戶',
                    'assignees' => '指派對象',
                    'deadline'  => '截止日',
                    'stage'     => '階段',
                ],
            ],

            'time-tracking' => [
                'title' => '時間 Tracking',

                'entries' => [
                    'allocated-time'        => 'Allocated時間',
                    'time-spent'            => '花費時間',
                    'time-spent-suffix'     => ' Hours',
                    'time-remaining'        => '時間 Remaining',
                    'time-remaining-suffix' => ' Hours',
                    'progress'              => 'Progress',
                ],
            ],

            'additional-information' => [
                'title' => '其他資料',
            ],

            'record-information' => [
                'title' => '紀錄資料',

                'entries' => [
                    'created-at'   => '建立時間',
                    'created-by'   => '建立者',
                    'last-updated' => '最後更新',
                ],
            ],

            'statistics' => [
                'title' => '統計',

                'entries' => [
                    'sub-tasks'         => 'Sub 任務',
                    'timesheet-entries' => 'Timesheet Entries',
                ],
            ],
        ],
    ],
];
