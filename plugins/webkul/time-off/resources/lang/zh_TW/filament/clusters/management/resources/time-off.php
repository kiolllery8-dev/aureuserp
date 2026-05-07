<?php

return [
    'title' => '請假',

    'model-label' => '請假',

    'navigation' => [
        'title' => '請假',
    ],

    'global-search' => [
        'employee'      => 'Employee',
        'time-off-type' => '假別',
        'date-from'     => '開始日期',
        'date-to'       => '結束日期',
    ],

    'form' => [
        'fields' => [
            'employee-name'     => '員工姓名',
            'department-name'   => 'Department名稱',
            'time-off-type'     => '假別',
            'date'              => '日期',
            'dates'             => 'Dates',
            'request-date-from' => '申請開始日',
            'request-date-to'   => '申請結束日',
            'description'       => '說明',
            'period'            => '期間',
            'half-day'          => '半天',
            'requested-days'    => 'Requested (Days/Hours)',
            'description'       => '說明',
            'attachment'        => '附件',
            'day'               => ':day day',
            'days'              => ':days day(s)',
        ],
    ],

    'table' => [
        'columns' => [
            'employee-name'  => 'Employee',
            'time-off-type'  => '假別',
            'description'    => '說明',
            'date-from'      => '開始日期',
            'date-to'        => '結束日期',
            'duration'       => '持續時間',
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
                    'validate' => '驗證',
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
                'title'        => '拒絕',
                'notification' => [
                    'title' => 'Time Off refused',
                    'body'  => 'The time off has been refused成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Time Off已刪除',
                    'body'  => 'The time off has been已刪除成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'employee-name'     => '員工姓名',
            'department-name'   => 'Department名稱',
            'time-off-type'     => '假別',
            'date'              => '日期',
            'dates'             => 'Dates',
            'request-date-from' => '申請開始日',
            'request-date-to'   => '申請結束日',
            'description'       => '說明',
            'period'            => '期間',
            'half-day'          => '半天',
            'requested-days'    => 'Requested (Days/Hours)',
            'attachment'        => '附件',
            'day'               => ':day day',
            'days'              => ':days day(s)',
            'date-from'         => '開始日期',
            'date-to'           => '結束日期',
            'status'            => '狀態',
        ],
    ],
];
