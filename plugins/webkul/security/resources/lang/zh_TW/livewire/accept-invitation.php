<?php

return [
    'header' => [
        'sub-heading' => [
            'accept-invitation' => '接受邀請',
        ],
    ],

    'title' => '註冊',

    'heading' => '註冊',

    'actions' => [

        'login' => [
            'before' => '或',
            'label'  => '登入您的帳戶',
        ],

    ],

    'form' => [

        'email' => [
            'label' => '電子郵件',
        ],

        'name' => [
            'label' => '名稱',
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
                'label' => '註冊',
            ],

        ],

    ],

    'notifications' => [

        'throttled' => [
            'title' => 'Too many registration attempts',
            'body'  => 'Please try again in :seconds seconds.',
        ],

    ],

];
