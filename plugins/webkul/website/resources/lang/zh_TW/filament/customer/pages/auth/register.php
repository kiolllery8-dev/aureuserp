<?php

return [
    'title'         => '註冊',
    'heading'       => '註冊',
    'notifications' => [
        'throttled' => [
            'title' => 'Too many attempts. Try again in :seconds seconds.',
            'body'  => 'Please wait :seconds seconds (:minutes minutes) before trying again.',
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
