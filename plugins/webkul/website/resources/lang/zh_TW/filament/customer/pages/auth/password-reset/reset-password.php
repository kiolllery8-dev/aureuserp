<?php

return [
    'title'         => '重設密碼',
    'heading'       => '重設密碼',
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
