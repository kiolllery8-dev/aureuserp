<?php

return [
    'breadcrumb' => '管理Users',
    'title'      => '管理Users',
    'group'      => '一般',

    'navigation' => [
        'label' => '管理Users',
    ],

    'form' => [
        'enable-user-invitation' => [
            'label'       => '啟用使用者邀請',
            'helper-text' => '允許使用者邀請其他人進入應用程式。',
        ],

        'enable-reset-password' => [
            'label'       => '啟用密碼重設',
            'helper-text' => '允許使用者重設密碼。',
        ],

        'default-role' => [
            'label'       => '預設角色',
            'helper-text' => '新使用者的預設角色。',
        ],

        'default-company' => [
            'label'       => '預設公司',
            'helper-text' => '新使用者的預設公司。',
        ],
    ],
];
