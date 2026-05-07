<?php

return [
    'title'         => '重設密碼',
    'heading'       => '重設密碼',
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
        'password' => [
            'label'                => '新增password',
            'validation_attribute' => '密碼',
        ],
        'password_confirmation' => [
            'label' => '確認新密碼',
        ],
        'actions' => [
            'reset' => [
                'label' => '重設密碼',
            ],
        ],
    ],
];
