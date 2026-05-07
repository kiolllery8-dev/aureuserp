<?php

return [
    'tabs' => [
        'all'      => 'All 使用者',
        'archived' => '已封存 使用者',
    ],

    'header-actions' => [
        'invite' => [
            'title' => 'Invite 使用者',
            'modal' => [
                'submit-action-label' => 'Invite 使用者',
            ],
            'form' => [
                'email' => '電子郵件',
            ],
            'notification' => [
                'success' => [
                    'title' => '使用者 invited',
                    'body'  => '使用者 has been invited成功',
                ],
                'error' => [
                    'title' => '使用者 Invitation Failed',
                    'body'  => 'The system encountered an unexpected error while trying to send the user invitation.',
                ],

                'default-company-error' => [
                    'title' => '預設 公司 Not Set',
                    'body'  => 'Please set the default company from settings, before inviting a user.',
                ],
            ],
        ],

        'create' => [
            'label' => '新增使用者',
        ],
    ],
];
