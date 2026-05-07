<?php

return [
    'title' => '請假',

    'model-label' => 'My Time off',

    'navigation' => [
        'title' => 'My Time off',
    ],

    'form' => [
        'fields' => [
            'time-off-type'     => 'Time off Type',
            'date'              => '日期',
            'dates'             => 'Dates',
            'request-date-from' => 'Request Date From',
            'request-date-to'   => 'Request Date To',
            'description'       => '描述',
            'period'            => 'Period',
            'half-day'          => 'Half Day',
            'requested-days'    => 'Requested (Days/Hours)',
            'description'       => '描述',
            'attachment'        => '附件',
            'day'               => ':day day',
            'days'              => ':days day(s)',
        ],
    ],

    'table' => [
        'columns' => [
            'employee-name'  => 'Employee',
            'time-off-type'  => 'Time Off Type',
            'description'    => '描述',
            'date-from'      => 'Date From',
            'date-to'        => 'Date To',
            'duration'       => 'Duration',
            'status'         => '狀態',
        ],

        'groups' => [
            'employee-name' => 'Employee',
            'time-off-type' => 'Time Off Type',
            'status'        => '狀態',
            'start-date'    => '開始日期',
            'start-to'      => '結束日期',
            'updated-at'    => '更新時間',
            'created-at'    => '建立時間',
        ],

        'actions' => [
            'approve' => [
                'title' => [
                    'validate' => 'Validate',
                    'approve'  => '核准',
                ],
                'notification' => [
                    'title' => 'Time Off approved',
                    'body'  => 'The time off has been approved成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Time Off deleted',
                    'body'  => 'The time off has been deleted成功.',
                ],
            ],

            'refused' => [
                'title'        => 'Refuse',
                'notification' => [
                    'title' => 'Time Off refused',
                    'body'  => 'The time off has been refused成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Time Offs deleted',
                    'body'  => 'The time offs has been deleted成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'time-off-type'     => 'Time off Type',
            'date'              => '日期',
            'dates'             => 'Dates',
            'request-date-from' => 'Request Date From',
            'request-date-to'   => 'Request Date To',
            'description'       => '描述',
            'period'            => 'Period',
            'half-day'          => 'Half Day',
            'requested-days'    => 'Requested (Days/Hours)',
            'description'       => '描述',
            'attachment'        => '附件',
            'day'               => ':day day',
            'days'              => ':days day(s)',
        ],
    ],
];
