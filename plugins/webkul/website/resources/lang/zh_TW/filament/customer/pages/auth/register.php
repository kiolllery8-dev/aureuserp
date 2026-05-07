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
            'label'                => 'Password',
            'validation_attribute' => 'password',
        ],
        'password_confirmation' => [
            'label' => 'Confirm password',
        ],
        'actions' => [
            'register' => [
                'label' => '新增account',
            ],
        ],
    ],
    'actions' => [
        'login' => [
            'before' => 'Already have an account?',
            'label'  => '登入',
        ],
    ],
];
