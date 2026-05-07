<?php

return [
    'notification' => [
        'title' => 'User updated',
        'body'  => 'The user has been updated成功.',
    ],

    'header-actions' => [
        'change-password' => [
            'label' => 'Change Password',

            'notification' => [
                'title' => 'Password changed',
                'body'  => 'The password has been changed成功.',
            ],

            'form' => [
                'new-password'         => '新增Password',
                'confirm-new-password' => 'Confirm 新增Password',
            ],
        ],

        'delete' => [
            'notification' => [
                'title' => 'User deleted',
                'body'  => 'The user has been deleted成功.',
                'error' => [
                    'title' => 'User Cannot Be Deleted',
                    'body'  => 'This is a default user or you cannot delete yourself.',
                ],
            ],
        ],
    ],
];
