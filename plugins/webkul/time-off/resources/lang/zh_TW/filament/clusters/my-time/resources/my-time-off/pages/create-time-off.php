<?php

return [
    'notification' => [
        'success' => [
            'title' => 'Time Off已建立',
            'body'  => 'The time off has been已建立成功.',
        ],

        'overlap' => [
            'title' => '請假時間重疊',
            'body'  => 'The selected leave dates overlap with an existing request. Please choose different dates.',
        ],

        'warning' => [
            'title' => '您沒有員工帳號',
            'body'  => '您沒有員工帳號，請聯絡管理員。',
        ],

        'invalid_half_day_leave' => [
            'title' => '無效請假申請',
            'body'  => '半天休假只能申請當天。',
        ],

        'leave_request_denied_no_allocation' => [
            'title' => '請假申請已拒絕',
            'body'  => 'You do not have any allocated leave for :leaveType.',
        ],

        'leave_request_denied_insufficient_balance' => [
            'title' => '請假申請已拒絕',
            'body'  => 'Insufficient leave balance. You have :available_balance day(s) available. Requested: :requested_days day(s).',
        ],
    ],
];
