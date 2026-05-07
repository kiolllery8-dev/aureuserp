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
                    'resource-permission'                      => 'Resource Permission',
                    'resource-permission-self-change-disabled' => 'You cannot change your own resource permission. Ask another administrator to update it.',
                    'teams'                                    => 'Teams',
                ],
            ],

            'avatar' => [
                'title' => 'Avatar',
            ],

            'lang-and-status' => [
                'title'  => 'Language & Status',
                'fields' => [
                    'language' => 'Preferred Language',
                    'status'   => '狀態',
                ],
            ],

            'multi-company' => [
                'title'             => 'Multi Company',
                'allowed-companies' => 'Allowed Companies',
                'default-company'   => 'Default Company',
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
            'resource-permission' => 'Resource Permission',
            'default-company'     => 'Default Company',
            'allowed-company'     => 'Allowed Company',
            'created-by'          => '建立者',
            'created-at'          => '建立時間',
            'updated-at'          => '更新時間',
        ],

        'filters' => [
            'resource-permission' => 'Resource Permission',
            'teams'               => 'Teams',
            'roles'               => '角色',
            'default-company'     => 'Default Company',
            'allowed-companies'   => 'Allowed Companies',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'User edited',
                    'body'  => 'The user has been edited成功.',
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

            'restore' => [
                'notification' => [
                    'title' => 'User restored',
                    'body'  => 'The user has been restored成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Users restored',
                    'body'  => 'The users has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Users deleted',
                    'body'  => 'The users has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Users force deleted',
                    'body'  => 'The users has been force deleted成功.',
                    'error' => [
                        'title' => 'User could not be deleted',
                        'body'  => 'The user cannot be deleted because it is currently in use.',
                    ],
                ],
            ],
        ],

        'empty-state-actions' => [
            'create' => [
                'notification' => [
                    'title' => 'Users created',
                    'body'  => 'The users has been created成功.',
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
                    'resource-permission' => 'Resource Permission',
                    'teams'               => 'Teams',
                ],
            ],

            'avatar' => [
                'title' => 'Avatar',
            ],

            'lang-and-status' => [
                'title'   => 'Language & Status',
                'entries' => [
                    'language' => 'Preferred Language',
                    'status'   => '狀態',
                ],
            ],

            'multi-company' => [
                'title'             => 'Multi Company',
                'allowed-companies' => 'Allowed Companies',
                'default-company'   => 'Default Company',
            ],
        ],
    ],
];
