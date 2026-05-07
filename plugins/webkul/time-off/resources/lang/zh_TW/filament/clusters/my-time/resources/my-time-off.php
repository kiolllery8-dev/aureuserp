<?php

return [
    'title' => '請假',

    'model-label' => 'My時間 off',

    'navigation' => [
        'title' => 'My時間 off',
    ],

    'form' => [
        'fields' => [
            'time-off-type'     => '假別',
            'date'              => '日期',
            'dates'             => 'Dates',
            'request-date-from' => '申請開始日',
            'request-date-to'   => '申請結束日',
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
            'time-off-type'  => '假別',
            'description'    => '描述',
            'date-from'      => '開始日期',
            'date-to'        => '結束日期',
            'duration'       => 'Duration',
            'status'         => '狀態',
        ],

        'groups' => [
            'employee-name' => 'Employee',
            'time-off-type' => '假別',
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
                    'title' => 'Time Off已刪除',
                    'body'  => 'The time off has been已刪除成功.',
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
                    'title' => 'Time Offs已刪除',
                    'body'  => 'The time offs has been已刪除成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'time-off-type'     => '假別',
            'date'              => '日期',
            'dates'             => 'Dates',
            'request-date-from' => '申請開始日',
            'request-date-to'   => '申請結束日',
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
