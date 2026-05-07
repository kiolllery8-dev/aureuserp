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
                'body'  => 'Time off request has been updated成功.',
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
            'description' => 'Create Time Off Request',

            'notification' => [
                'title' => 'Time Off Created',
                'body'  => 'Time off request has been created成功.',
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
            'time-off-type'     => 'Time Off Type',
            'request-date-from' => 'Request Date From',
            'request-date-to'   => 'Request Date To',
            'period'            => 'Period',
            'half-day'          => 'Half Day',
            'requested-days'    => 'Requested (Days/Hours)',
            'description'       => '描述',
        ],
    ],

    'infolist' => [
        'entries' => [
            'time-off-type'           => 'Time Off Type',
            'request-date-from'       => 'Request Date From',
            'request-date-to'         => 'Request Date To',
            'description'             => '描述',
            'description-placeholder' => 'No description provided',
            'duration'                => 'Duration',
            'status'                  => '狀態',
        ],
    ],
];
