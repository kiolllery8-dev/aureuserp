<?php

return [
    'title'         => '忘記密碼',
    'heading'       => '忘記密碼',
    'notifications' => [
        'throttled' => [
            'title' => '嘗試過多，請於 :seconds 秒後重試。',
            'body'  => '請等待 :seconds 秒（:minutes 分鐘）後再試。',
        ],
    ],
    'form' => [
        'email' => [
            'label' => '電子郵件',
        ],
        'actions' => [
            'request' => [
                'label' => '寄送重設連結',
            ],
        ],
    ],
    'actions' => [
        'login' => [
            'label' => '回到登入',
        ],
    ],
];
