<?php

return [
    'heading' => [
        'title' => 'Time Off Overview',
    ],

    'modal-actions' => [
        'edit' => [
            'title'        => '編輯',
            'notification' => [
                'title' => 'Time Off Updated',
                'body'  => 'Time off request has been已更新成功.',
            ],
        ],

        'delete' => [
            'title' => '刪除',
        ],
    ],

    'view-action' => [
        'title'       => '檢視',
        'description' => '檢視Time Off Request',
    ],

    'header-actions' => [
        'create' => [
            'title'       => '新增Time Off',
            'description' => '新增Time Off Request',

            'notification' => [
                'title' => 'Time Off Created',
                'body'  => 'Time off request has been已建立成功.',
            ],

            'employee-not-found' => [
                'notification' => [
                    'title' => 'Employee Not Found',
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
            'requested-days'    => 'Requested (Days/Hours)',
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
