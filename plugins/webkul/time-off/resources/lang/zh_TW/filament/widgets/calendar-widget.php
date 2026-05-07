<?php

return [
    'heading' => [
        'title' => '請假 Requests',
    ],

    'modal-actions' => [
        'edit' => [
            'title'                         => '編輯',
            'duration-display'              => ':count working day|:count working days',
            'duration-display-with-weekend' => ':count working day (+ :weekend weekend day)|:count working days (+ :weekend weekend days)',

            'notification' => [
                'title' => '請假 Updated',
                'body'  => 'Your time off request has been已更新成功.',
            ],
        ],

        'delete' => [
            'title' => '刪除',
        ],
    ],

    'config' => [
        'button-text' => [
            'today' => 'Today',
            'month' => 'Month',
            'week'  => 'Week',
            'list'  => 'List',
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

            'success' => [
                'notification' => [
                    'title' => '請假 Created',
                    'body'  => 'Your time off request has been已建立成功.',
                ],
            ],
        ],
    ],

    'form' => [
        'title'       => '請假 Request',
        'description' => '新增or edit your time off request with the following details:',

        'fields' => [
            'time-off-type'             => '假別',
            'time-off-type-placeholder' => 'Select a time off type',
            'time-off-type-helper'      => 'Select the type of time off you are requesting.',
            'request-date-from'         => '申請開始日',
            'request-date-to'           => '申請結束日',
            'period'                    => 'Period',
            'half-day'                  => 'Half Day',
            'half-day-helper'           => 'Toggle for half-day leave.',
            'requested-days'            => 'Requested (天數/Hours)',
            'description'               => '描述',
            'description-placeholder'   => 'No description provided',
            'description-helper'        => 'Provide a brief description of your time off request.',
            'duration'                  => 'Duration',
            'please-select-dates'       => 'Please select the request date from and to.',
        ],
    ],

    'infolist' => [
        'title'       => '請假 Details',
        'description' => 'Here are the details of your time off request:',
        'entries'     => [
            'time-off-type'           => '假別',
            'request-date-from'       => '申請開始日',
            'request-date-to'         => '申請結束日',
            'description'             => '描述',
            'description-placeholder' => 'No description provided',
            'duration'                => 'Duration',
            'status'                  => '狀態',
        ],
    ],

    'events' => [
        'title' => ':name On :status: :days day(s)',
    ],
];
