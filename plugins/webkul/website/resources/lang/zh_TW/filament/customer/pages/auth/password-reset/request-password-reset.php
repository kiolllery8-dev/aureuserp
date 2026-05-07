<?php

return [
    'title'         => '忘記密碼',
    'heading'       => '忘記密碼',
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
        'actions' => [
            'request' => [
                'label' => 'Send reset link',
            ],
        ],
    ],
    'actions' => [
        'login' => [
            'label' => 'Back to login',
        ],
    ],
];
