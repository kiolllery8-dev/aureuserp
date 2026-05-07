<?php

return [
    'title'                   => '個人資料',
    'heading'                 => '個人資料',
    'subheading'              => '管理your account settings and preferences.',
    'information_section'     => 'Profile資料',
    'information_description' => "更新您的帳號個人資料與電子郵件。",

    'notification' => [
        'success' => [
            'title' => '個人資料已更新',
            'body'  => 'Your profile has been已更新成功.',
        ],

        'error' => [
            'title' => '個人資料更新失敗',
            'body'  => '更新個人資料時發生錯誤。',
        ],

        'validation-error' => [
            'title' => '驗證錯誤',
        ],
    ],

    'actions' => [
        'save' => '儲存變更',
    ],

    'fields' => [
        'avatar' => '個人照片',
        'name'   => '名稱',
        'email'  => '電子郵件',
    ],

    'password' => [
        'section'     => '更新密碼',
        'description' => '請確保您的帳號使用長且隨機的密碼以保安全。',
        'current'     => '目前密碼',
        'new'         => '新增Password',
        'confirm'     => '確認密碼',
        'helper'      => '至少需 8 個字元。',

        'errors' => [
            'current-required'  => 'Current password為必填.',
            'current-incorrect' => '目前密碼不正確，請再試一次。',
            'same-as-current'   => '新密碼必須與目前密碼不同。',
        ],

        'current-helper' => '輸入目前密碼以驗證身分。',

        'notification' => [
            'success' => [
                'title' => '密碼已更新',
                'body'  => 'Your password has been已更新成功.',
            ],

            'error' => [
                'title' => '密碼更新失敗',
                'body'  => '更新密碼時發生錯誤。',
            ],
        ],
    ],
];
