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
        'description'            => '描述',
        'time-spent'             => 'Time Spent',
        'time-spent-helper-text' => 'Time spent in hours (Eg. 1.5 hours means 1 hour 30 minutes)',
    ],

    'table' => [
        'columns' => [
            'date'        => '日期',
            'employee'    => 'Employee',
            'project'     => '專案',
            'task'        => '任務',
            'description' => '描述',
            'time-spent'  => 'Time Spent',
            'created-at'  => '建立時間',
            'updated-at'  => '更新時間',
        ],

        'groups' => [
            'date'       => '日期',
            'employee'   => 'Employee',
            'project'    => '專案',
            'task'       => '任務',
            'creator'    => 'Creator',
        ],

        'filters' => [
            'date-from'  => 'Date From',
            'date-until' => 'Date Until',
            'employee'   => 'Employee',
            'project'    => '專案',
            'task'       => '任務',
            'creator'    => 'Creator',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Timesheet updated',
                    'body'  => 'The timesheet has been updated成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Timesheet deleted',
                    'body'  => 'The timesheet has been deleted成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Timesheets deleted',
                    'body'  => 'The timesheets has been deleted成功.',
                ],
            ],
        ],
    ],
];
