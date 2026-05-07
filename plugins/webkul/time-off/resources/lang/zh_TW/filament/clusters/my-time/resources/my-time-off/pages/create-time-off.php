<?php

return [
    'notification' => [
        'success' => [
            'title' => '請假已建立',
            'body'  => 'The time off has been已建立成功.',
        ],

        'overlap' => [
            'title' => '請假時間重疊',
            'body'  => '所選假期日期與既有申請重疊，請改選其他日期。',
        ],

        'warning' => [
            'title' => '您沒有員工帳號',
            'body'  => '您沒有員工帳號，請聯絡管理員。',
        ],

        'invalid_half_day_leave' => [
            'title' => '無效請假申請',
            'body'  => '半天假只能申請當天。',
        ],

        'leave_request_denied_no_allocation' => [
            'title' => '請假申請已拒絕',
            'body'  => '您沒有 :leaveType 的可用假數。',
        ],

        'leave_request_denied_insufficient_balance' => [
            'title' => '請假申請已拒絕',
            'body'  => '假數不足。可用 :available_balance 天，申請 :requested_days 天。',
        ],
    ],
];
