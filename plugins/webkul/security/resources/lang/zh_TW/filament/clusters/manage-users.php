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
            'label'       => 'Enable 使用者 Invitation',
            'helper-text' => 'Allow users to invite other users to the application.',
        ],

        'enable-reset-password' => [
            'label'       => 'Enable Reset Password',
            'helper-text' => 'Allow users to reset their password.',
        ],

        'default-role' => [
            'label'       => '預設 角色',
            'helper-text' => 'The default role assigned to new users.',
        ],

        'default-company' => [
            'label'       => '預設 公司',
            'helper-text' => 'The default company assigned to new users.',
        ],
    ],
];
