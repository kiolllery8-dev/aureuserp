<?php

return [
    'notification' => [
        'title'              => '請假已更新',
        'body'               => 'The time off has been已更新成功.',
        'action_not_allowed' => [
            'title' => '不允許此動作',
            'body'  => '此請假申請已鎖定，無法修改。',
        ],
        'overlap' => [
            'title' => '請假時間重疊',
            'body'  => '所選假期日期與既有申請重疊，請改選其他日期。',
        ],
    ],

    'header-actions' => [
        'delete' => [
            'notification' => [
                'title' => '請假已刪除',
                'body'  => 'The time off has been已刪除成功.',
            ],
        ],
    ],
];
