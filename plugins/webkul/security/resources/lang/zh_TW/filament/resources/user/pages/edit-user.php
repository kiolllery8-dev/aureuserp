<?php

return [
    'notification' => [
        'title' => 'User已更新',
        'body'  => 'The user has been已更新成功.',
    ],

    'header-actions' => [
        'change-password' => [
            'label' => '變更密碼',

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
                'title' => 'User已刪除',
                'body'  => 'The user has been已刪除成功.',
                'error' => [
                    'title' => 'User Cannot Be Deleted',
                    'body'  => 'This is a default user or you cannot delete yourself.',
                ],
            ],
        ],
    ],
];
