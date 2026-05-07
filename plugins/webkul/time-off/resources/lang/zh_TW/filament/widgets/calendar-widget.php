<?php

return [
    'heading' => [
        'title' => 'Time Off Requests',
    ],

    'modal-actions' => [
        'edit' => [
            'title'                         => '編輯',
            'duration-display'              => ':count working day|:count working days',
            'duration-display-with-weekend' => ':count working day (+ :weekend weekend day)|:count working days (+ :weekend weekend days)',

            'notification' => [
                'title' => 'Time Off Updated',
                'body'  => 'Your time off request has been已更新成功.',
            ],
        ],

        'delete' => [
            'title' => '刪除',
        ],
    ],

    'config' => [
        'button-text' => [
            'today' => '今天',
            'month' => '月',
            'week'  => '週',
            'list'  => '列表',
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

            'success' => [
                'notification' => [
                    'title' => 'Time Off Created',
                    'body'  => 'Your time off request has been已建立成功.',
                ],
            ],
        ],
    ],

    'form' => [
        'title'       => 'Time Off Request',
        'description' => '新增or edit your time off request with the following details:',

        'fields' => [
            'time-off-type'             => '假別',
            'time-off-type-placeholder' => 'Select a time off type',
            'time-off-type-helper'      => 'Select the type of time off you are requesting.',
            'request-date-from'         => '申請開始日',
            'request-date-to'           => '申請結束日',
            'period'                    => '期間',
            'half-day'                  => '半天',
            'half-day-helper'           => 'Toggle for half-day leave.',
            'requested-days'            => 'Requested (Days/Hours)',
            'description'               => '說明',
            'description-placeholder'   => 'No description provided',
            'description-helper'        => 'Provide a brief description of your time off request.',
            'duration'                  => '持續時間',
            'please-select-dates'       => 'Please select the request date from and to.',
        ],
    ],

    'infolist' => [
        'title'       => 'Time Off Details',
        'description' => 'Here are the details of your time off request:',
        'entries'     => [
            'time-off-type'           => '假別',
            'request-date-from'       => '申請開始日',
            'request-date-to'         => '申請結束日',
            'description'             => '說明',
            'description-placeholder' => 'No description provided',
            'duration'                => '持續時間',
            'status'                  => '狀態',
        ],
    ],

    'events' => [
        'title' => ':name On :status: :days day(s)',
    ],
];
