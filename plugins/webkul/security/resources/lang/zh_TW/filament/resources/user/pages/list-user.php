<?php

return [
    'tabs' => [
        'all'      => '所有使用者',
        'archived' => '已封存的使用者',
    ],

    'header-actions' => [
        'invite' => [
            'title' => '邀請使用者',
            'modal' => [
                'submit-action-label' => '邀請使用者',
            ],
            'form' => [
                'email' => '電子郵件',
            ],
            'notification' => [
                'success' => [
                    'title' => '使用者已邀請',
                    'body'  => 'User has been invited成功',
                ],
                'error' => [
                    'title' => '使用者邀請失敗',
                    'body'  => '寄送使用者邀請時發生未預期錯誤。',
                ],

                'default-company-error' => [
                    'title' => '未設定預設公司',
                    'body'  => '邀請使用者前，請先在設定中指定預設公司。',
                ],
            ],
        ],

        'create' => [
            'label' => '新增User',
        ],
    ],
];
