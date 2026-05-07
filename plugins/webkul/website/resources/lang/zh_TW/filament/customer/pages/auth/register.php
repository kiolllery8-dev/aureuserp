<?php

return [
    'title'         => '註冊',
    'heading'       => '註冊',
    'notifications' => [
        'throttled' => [
            'title' => '嘗試過多，請於 :seconds 秒後重試。',
            'body'  => '請等待 :seconds 秒（:minutes 分鐘）後再試。',
        ],
    ],
    'form' => [
        'name' => [
            'label' => '名稱',
        ],
        'email' => [
            'label' => '電子郵件',
        ],
        'password' => [
            'label'                => '密碼',
            'validation_attribute' => '密碼',
        ],
        'password_confirmation' => [
            'label' => '確認密碼',
        ],
        'actions' => [
            'register' => [
                'label' => '新增account',
            ],
        ],
    ],
    'actions' => [
        'login' => [
            'before' => '已經有帳號？',
            'label'  => '登入',
        ],
    ],
];
