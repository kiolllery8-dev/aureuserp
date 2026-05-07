<?php

return [
    'heading' => [
        'title' => '請假概覽',
    ],

    'modal-actions' => [
        'edit' => [
            'title'        => '編輯',
            'notification' => [
                'title' => '請假已更新',
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
                'title' => '請假已建立',
                'body'  => 'Time off request has been已建立成功.',
            ],

            'employee-not-found' => [
                'notification' => [
                    'title' => '找不到員工',
                    'body'  => '建立請假申請前，請先在個人資料中新增員工。',
                ],
            ],
        ],
    ],

    'form' => [
        'fields' => [
            'time-off-type'     => '假別',
            'request-date-from' => '申請開始日',
            'request-date-to'   => '申請結束日',
            'period'            => '期間',
            'half-day'          => '半天',
            'requested-days'    => '已申請（日／時）',
            'description'       => '說明',
        ],
    ],

    'infolist' => [
        'entries' => [
            'time-off-type'           => '假別',
            'request-date-from'       => '申請開始日',
            'request-date-to'         => '申請結束日',
            'description'             => '說明',
            'description-placeholder' => 'No description provided',
            'duration'                => '持續時間',
            'status'                  => '狀態',
        ],
    ],
];
