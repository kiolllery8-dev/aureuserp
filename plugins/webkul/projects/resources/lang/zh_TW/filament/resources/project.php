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
                    'name-placeholder' => 'Project Name...',
                    'description'      => '描述',
                ],
            ],

            'additional' => [
                'title' => 'Additional Information',

                'fields' => [
                    'project-manager'             => 'Project Manager',
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
                    'time-management'              => 'Time Management',
                    'allow-timesheets'             => 'Allow Timesheets',
                    'allow-timesheets-helper-text' => 'Log time on tasks and track progress',
                    'task-management'              => 'Task Management',
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
            'planned-date'    => 'Planned Date',
            'remaining-hours' => 'Remaining Hours',
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
            'visibility'       => 'Visibility',
            'start-date'       => '開始日期',
            'end-date'         => '結束日期',
            'allow-timesheets' => 'Allow Timesheets',
            'allow-milestones' => 'Allow Milestones',
            'allocated-hours'  => 'Allocated Hours',
            'created-at'       => '建立時間',
            'updated-at'       => '更新時間',
            'stage'            => '階段',
            'customer'         => '客戶',
            'project-manager'  => 'Project Manager',
            'company'          => '公司',
            'creator'          => 'Creator',
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
                    'title' => 'Project deleted',
                    'body'  => 'The project has been deleted成功.',
                ],
            ],

            'force-delete' => [

                'notification' => [

                    'success' => [
                        'title' => 'Project permanently deleted',
                        'body'  => 'The project has been permanently deleted成功.',
                    ],

                    'error' => [
                        'title' => 'Project cannot be permanently deleted',
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
                    'name-placeholder' => 'Project Name...',
                    'description'      => '描述',
                ],
            ],

            'additional' => [
                'title' => 'Additional Information',

                'entries' => [
                    'project-manager'        => 'Project Manager',
                    'customer'               => '客戶',
                    'project-timeline'       => 'Project Timeline',
                    'allocated-hours'        => 'Allocated Hours',
                    'allocated-hours-suffix' => ' Hours',
                    'remaining-hours'        => 'Remaining Hours',
                    'remaining-hours-suffix' => ' Hours',
                    'current-stage'          => 'Current Stage',
                    'tags'                   => '標籤',
                ],
            ],

            'statistics' => [
                'title' => 'Statistics',

                'entries' => [
                    'total-tasks'         => 'Total Tasks',
                    'milestones-progress' => 'Milestones Progress',
                ],
            ],

            'record-information' => [
                'title' => 'Record Information',

                'entries' => [
                    'created-at'   => '建立時間',
                    'created-by'   => '建立者',
                    'last-updated' => 'Last Updated',
                ],
            ],

            'settings' => [
                'title' => 'Project Settings',

                'entries' => [
                    'visibility'         => 'Visibility',
                    'timesheets-enabled' => 'Timesheets Enabled',
                    'milestones-enabled' => 'Milestones Enabled',
                ],
            ],
        ],
    ],
];
