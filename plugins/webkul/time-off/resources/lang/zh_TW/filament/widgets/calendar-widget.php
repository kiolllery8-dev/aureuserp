<?php

return [
    'heading' => [
        'title' => '請假申請',
    ],

    'modal-actions' => [
        'edit' => [
            'title'                         => '編輯',
            'duration-display'              => ':count working day|:count working days',
            'duration-display-with-weekend' => ':count working day (+ :weekend weekend day)|:count working days (+ :weekend weekend days)',

            'notification' => [
                'title' => '請假已更新',
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
                'title' => '請假已建立',
                'body'  => 'Time off request has been已建立成功.',
            ],

            'employee-not-found' => [
                'notification' => [
                    'title' => '找不到員工',
                    'body'  => '建立請假申請前，請先在個人資料中新增員工。',
                ],
            ],

            'success' => [
                'notification' => [
                    'title' => '請假已建立',
                    'body'  => 'Your time off request has been已建立成功.',
                ],
            ],
        ],
    ],

    'form' => [
        'title'       => '請假申請',
        'description' => '新增or edit your time off request with the following details:',

        'fields' => [
            'time-off-type'             => '假別',
            'time-off-type-placeholder' => '選擇請假類型',
            'time-off-type-helper'      => '選擇要申請的請假類型。',
            'request-date-from'         => '申請開始日',
            'request-date-to'           => '申請結束日',
            'period'                    => '期間',
            'half-day'                  => '半天',
            'half-day-helper'           => '切換半天假。',
            'requested-days'            => '已申請（日／時）',
            'description'               => '說明',
            'description-placeholder'   => '未提供說明',
            'description-helper'        => '請簡述請假原因。',
            'duration'                  => '持續時間',
            'please-select-dates'       => '請選擇起訖日期。',
        ],
    ],

    'infolist' => [
        'title'       => '請假詳情',
        'description' => '以下是您的請假詳情：',
        'entries'     => [
            'time-off-type'           => '假別',
            'request-date-from'       => '申請開始日',
            'request-date-to'         => '申請結束日',
            'description'             => '說明',
            'description-placeholder' => '未提供說明',
            'duration'                => '持續時間',
            'status'                  => '狀態',
        ],
    ],

    'events' => [
        'title' => ':name On :status: :days day(s)',
    ],
];
