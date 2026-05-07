<?php

return [
    'title' => '使用者',

    'navigation' => [
        'title' => '使用者',
        'group' => '設定',
    ],

    'global-search' => [
        'email' => '電子郵件',
    ],

    'form' => [
        'validation' => [
            'cannot-remove-last-admin'   => 'Cannot remove the admin role from the last admin user.',
            'first-user-must-be-admin'   => 'The first user in the system must be assigned an admin role.',
        ],

        'sections' => [
            'general-information' => [
                'title'  => '一般資料',
                'fields' => [
                    'name'                  => '名稱',
                    'email'                 => '電子郵件',
                    'password'              => 'Password',
                    'password-confirmation' => 'Password Confirmation',
                ],
            ],

            'permissions' => [
                'title'  => '權限',
                'fields' => [
                    'roles'                                    => '角色',
                    'permissions'                              => '權限',
                    'resource-permission'                      => 'Resource 權限',
                    'resource-permission-self-change-disabled' => 'You cannot change your own resource permission. Ask another administrator to update it.',
                    'teams'                                    => 'Teams',
                ],
            ],

            'avatar' => [
                'title' => 'Avatar',
            ],

            'lang-and-status' => [
                'title'  => '語言 &狀態',
                'fields' => [
                    'language' => 'Preferred 語言',
                    'status'   => '狀態',
                ],
            ],

            'multi-company' => [
                'title'             => 'Multi 公司',
                'allowed-companies' => 'Allowed 公司',
                'default-company'   => '預設 公司',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'avatar'              => 'Avatar',
            'name'                => '名稱',
            'email'               => '電子郵件',
            'teams'               => 'Teams',
            'role'                => '角色',
            'resource-permission' => 'Resource 權限',
            'default-company'     => '預設 公司',
            'allowed-company'     => 'Allowed 公司',
            'created-by'          => '建立者',
            'created-at'          => '建立時間',
            'updated-at'          => '更新時間',
        ],

        'filters' => [
            'resource-permission' => 'Resource 權限',
            'teams'               => 'Teams',
            'roles'               => '角色',
            'default-company'     => '預設 公司',
            'allowed-companies'   => 'Allowed 公司',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => '使用者 edited',
                    'body'  => 'The user has been edited成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => '使用者已刪除',
                    'body'  => 'The user has been已刪除成功.',
                    'error' => [
                        'title' => '使用者 Cannot Be Deleted',
                        'body'  => 'This is a default user or you cannot delete yourself.',
                    ],
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => '使用者 restored',
                    'body'  => 'The user has been restored成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => '使用者 restored',
                    'body'  => 'The users has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => '使用者已刪除',
                    'body'  => 'The users has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => '使用者 force已刪除',
                    'body'  => 'The users has been force已刪除成功.',
                    'error' => [
                        'title' => '使用者 could not be已刪除',
                        'body'  => 'The user cannot be已刪除 because it is currently in use.',
                    ],
                ],
            ],
        ],

        'empty-state-actions' => [
            'create' => [
                'notification' => [
                    'title' => '使用者已建立',
                    'body'  => 'The users has been已建立成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general-information' => [
                'title'   => '一般資料',
                'entries' => [
                    'name'                  => '名稱',
                    'email'                 => '電子郵件',
                    'password'              => 'Password',
                    'password-confirmation' => 'Password Confirmation',
                ],
            ],

            'permissions' => [
                'title'   => '權限',
                'entries' => [
                    'roles'               => '角色',
                    'permissions'         => '權限',
                    'resource-permission' => 'Resource 權限',
                    'teams'               => 'Teams',
                ],
            ],

            'avatar' => [
                'title' => 'Avatar',
            ],

            'lang-and-status' => [
                'title'   => '語言 &狀態',
                'entries' => [
                    'language' => 'Preferred 語言',
                    'status'   => '狀態',
                ],
            ],

            'multi-company' => [
                'title'             => 'Multi 公司',
                'allowed-companies' => 'Allowed 公司',
                'default-company'   => '預設 公司',
            ],
        ],
    ],
];
