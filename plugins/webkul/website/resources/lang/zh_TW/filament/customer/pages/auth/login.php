<?php

return [
    'title'    => '登入',
    'heading'  => '登入',
    'messages' => [
        'failed' => 'These credentials do not match our記錄s.',
    ],
    'notifications' => [
        'throttled' => [
            'title' => 'Too many attempts. Try again in :seconds seconds.',
            'body'  => 'Please wait :seconds seconds (:minutes minutes) before trying again.',
        ],
    ],
    'form' => [
        'email' => [
            'label' => '電子郵件',
        ],
        'password' => [
            'label' => 'Password',
        ],
        'remember' => [
            'label' => '記住我',
        ],
        'actions' => [
            'authenticate' => [
                'label' => '登入',
            ],
        ],
    ],
    'actions' => [
        'register' => [
            'before' => 'Don\'t have an account?',
            'label'  => '新增account',
        ],
        'request_password_reset' => [
            'label' => '忘記密碼?',
        ],
    ],
];
