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
                'title' => '密碼已變更',
                'body'  => 'The password has been changed成功.',
            ],

            'form' => [
                'new-password'         => '新增Password',
                'confirm-new-password' => '確認新密碼',
            ],
        ],

        'delete' => [
            'notification' => [
                'title' => 'User已刪除',
                'body'  => 'The user has been已刪除成功.',
                'error' => [
                    'title' => '使用者無法刪除',
                    'body'  => '這是預設使用者，或您不能刪除自己。',
                ],
            ],
        ],
    ],
];
