<?php

return [
    'header' => [
        'sub-heading' => [
            'accept-invitation' => 'Accept Invitation',
        ],
    ],

    'title' => '註冊',

    'heading' => 'Sign up',

    'actions' => [

        'login' => [
            'before' => 'or',
            'label'  => 'sign in to your account',
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
            'label'                => 'Password',
            'validation_attribute' => 'password',
        ],

        'password_confirmation' => [
            'label' => 'Confirm password',
        ],

        'actions' => [

            'register' => [
                'label' => 'Sign up',
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
