<?php

return [

    'title' => '註冊',

    'heading' => '建立新帳號',

    'actions' => [

        'login' => [
            'before' => '或',
            'label' => '登入您的帳號',
        ],

    ],

    'form' => [

        'email' => [
            'label' => '電子郵件',
        ],

        'name' => [
            'label' => '姓名',
        ],

        'password' => [
            'label' => '密碼',
            'validation_attribute' => '密碼',
        ],

        'password_confirmation' => [
            'label' => '確認密碼',
        ],

        'actions' => [

            'register' => [
                'label' => '註冊',
            ],

        ],

    ],

    'messages' => [

        'notification_title' => '已成功建立帳號。',

    ],

    'notifications' => [

        'throttled' => [
            'title' => '嘗試註冊次數過多',
            'body' => '請於 :seconds 秒後重試。',
        ],

    ],

];
