<?php

return [
    'title' => '工時表',

    'navigation' => [
        'title' => '工時表',
        'group' => '專案',
    ],

    'global-search' => [
        'project' => '專案',
        'task'    => '任務',
        'date'    => '日期',
    ],

    'form' => [
        'date'                   => '日期',
        'employee'               => 'Employee',
        'project'                => '專案',
        'task'                   => '任務',
        'description'            => '說明',
        'time-spent'             => '已花時間',
        'time-spent-helper-text' => 'Time spent in hours (Eg. 1.5 hours means 1 hour 30 minutes)',
    ],

    'table' => [
        'columns' => [
            'date'        => '日期',
            'employee'    => 'Employee',
            'project'     => '專案',
            'task'        => '任務',
            'description' => '說明',
            'time-spent'  => '已花時間',
            'created-at'  => '建立時間',
            'updated-at'  => '更新時間',
        ],

        'groups' => [
            'date'       => '日期',
            'employee'   => 'Employee',
            'project'    => '專案',
            'task'       => '任務',
            'creator'    => '建立者',
        ],

        'filters' => [
            'date-from'  => '開始日期',
            'date-until' => 'Date Until',
            'employee'   => 'Employee',
            'project'    => '專案',
            'task'       => '任務',
            'creator'    => '建立者',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Timesheet已更新',
                    'body'  => 'The timesheet has been已更新成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Timesheet已刪除',
                    'body'  => 'The timesheet has been已刪除成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Timesheets已刪除',
                    'body'  => 'The timesheets has been已刪除成功.',
                ],
            ],
        ],
    ],
];
