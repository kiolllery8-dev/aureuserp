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
                    'title-placeholder' => 'Task Title...',
                    'tags'              => '標籤',
                    'name'              => '名稱',
                    'color'             => 'Color',
                    'description'       => '描述',
                    'project'           => '專案',
                    'status'            => '狀態',
                    'start_date'        => '開始日期',
                    'end_date'          => '結束日期',
                ],
            ],

            'additional' => [
                'title' => 'Additional Information',
            ],

            'settings' => [
                'title' => '設定',

                'fields' => [
                    'project'                     => '專案',
                    'milestone'                   => '里程碑',
                    'milestone-hint-text'         => 'Automatically deliver your services upon reaching a milestone by linking it to a sales order item.',
                    'name'                        => '名稱',
                    'deadline'                    => '截止日',
                    'is-completed'                => 'Is Completed',
                    'customer'                    => '客戶',
                    'assignees'                   => 'Assignees',
                    'allocated-hours'             => 'Allocated Hours',
                    'allocated-hours-helper-text' => 'In hours (Eg. 1.5 hours means 1 hour 30 minutes)',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'id'                  => 'ID',
            'priority'            => '優先順序',
            'state'               => '狀態',
            'new-state'           => '新增State',
            'update-state'        => 'Update State',
            'title'               => '標題',
            'project'             => '專案',
            'project-placeholder' => 'Private Task',
            'milestone'           => '里程碑',
            'customer'            => '客戶',
            'assignees'           => 'Assignees',
            'allocated-time'      => 'Allocated Time',
            'time-spent'          => 'Time Spent',
            'time-remaining'      => 'Time Remaining',
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
            'total-hours-spent' => 'Total Hours Spent',
            'remaining-hours'   => 'Remaining Hours',
            'overtime'          => 'Overtime',
            'progress'          => 'Progress',
            'deadline'          => '截止日',
            'created-at'        => '建立時間',
            'updated-at'        => '更新時間',
            'assignees'         => 'Assignees',
            'customer'          => '客戶',
            'project'           => '專案',
            'stage'             => '階段',
            'milestone'         => '里程碑',
            'company'           => '公司',
            'creator'           => 'Creator',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Task restored',
                    'body'  => 'The task has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Task deleted',
                    'body'  => 'The task has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Task force deleted',
                    'body'  => 'The task has been force deleted成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Tasks restored',
                    'body'  => 'The tasks has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Tasks deleted',
                    'body'  => 'The tasks has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Tasks force deleted',
                    'body'  => 'The tasks has been force deleted成功.',
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
                'title' => 'Project Information',

                'entries' => [
                    'project'   => '專案',
                    'milestone' => '里程碑',
                    'customer'  => '客戶',
                    'assignees' => 'Assignees',
                    'deadline'  => '截止日',
                    'stage'     => '階段',
                ],
            ],

            'time-tracking' => [
                'title' => 'Time Tracking',

                'entries' => [
                    'allocated-time'        => 'Allocated Time',
                    'time-spent'            => 'Time Spent',
                    'time-spent-suffix'     => ' Hours',
                    'time-remaining'        => 'Time Remaining',
                    'time-remaining-suffix' => ' Hours',
                    'progress'              => 'Progress',
                ],
            ],

            'additional-information' => [
                'title' => 'Additional Information',
            ],

            'record-information' => [
                'title' => 'Record Information',

                'entries' => [
                    'created-at'   => '建立時間',
                    'created-by'   => '建立者',
                    'last-updated' => 'Last Updated',
                ],
            ],

            'statistics' => [
                'title' => 'Statistics',

                'entries' => [
                    'sub-tasks'         => 'Sub Tasks',
                    'timesheet-entries' => 'Timesheet Entries',
                ],
            ],
        ],
    ],
];
