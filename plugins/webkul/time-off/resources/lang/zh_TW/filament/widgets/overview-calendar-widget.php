<?php

return [
    'heading' => [
        'title' => '請假 總覽',
    ],

    'modal-actions' => [
        'edit' => [
            'title'        => '編輯',
            'notification' => [
                'title' => '請假 Updated',
                'body'  => '時間 off request has been已更新成功.',
            ],
        ],

        'delete' => [
            'title' => '刪除',
        ],
    ],

    'view-action' => [
        'title'       => '檢視',
        'description' => '檢視請假 Request',
    ],

    'header-actions' => [
        'create' => [
            'title'       => '新增請假',
            'description' => '新增請假 Request',

            'notification' => [
                'title' => '請假 Created',
                'body'  => '時間 off request has been已建立成功.',
            ],

            'employee-not-found' => [
                'notification' => [
                    'title' => '員工 Not Found',
                    'body'  => 'Please add an employee to your profile before creating a time off request.',
                ],
            ],
        ],
    ],

    'form' => [
        'fields' => [
            'time-off-type'     => '假別',
            'request-date-from' => '申請開始日',
            'request-date-to'   => '申請結束日',
            'period'            => 'Period',
            'half-day'          => 'Half Day',
            'requested-days'    => 'Requested (天數/Hours)',
            'description'       => '描述',
        ],
    ],

    'infolist' => [
        'entries' => [
            'time-off-type'           => '假別',
            'request-date-from'       => '申請開始日',
            'request-date-to'         => '申請結束日',
            'description'             => '描述',
            'description-placeholder' => 'No description provided',
            'duration'                => 'Duration',
            'status'                  => '狀態',
        ],
    ],
];
