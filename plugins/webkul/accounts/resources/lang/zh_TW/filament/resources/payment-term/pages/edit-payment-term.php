<?php

return [
    'notification' => [
        'success' => [
            'title' => 'Payment term已更新',
            'body'  => 'The payment term has been已更新成功.',
        ],

        'validation-error' => [
            'title' => '驗證錯誤',
            'body'  => '到期條件至少需一個百分比行，且總和需為 100%。',
        ],
    ],

    'header-actions' => [
        'delete' => [
            'notification' => [
                'title' => 'Payment term已刪除',
                'body'  => 'The payment term has been已刪除成功.',
            ],
        ],
    ],
];
