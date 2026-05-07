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
            'cannot-remove-last-admin'   => '無法從最後一位管理者身上移除管理者角色。',
            'first-user-must-be-admin'   => '系統中的第一位使用者必須擁有管理者角色。',
        ],

        'sections' => [
            'general-information' => [
                'title'  => '一般資料',
                'fields' => [
                    'name'                  => '名稱',
                    'email'                 => '電子郵件',
                    'password'              => '密碼',
                    'password-confirmation' => '密碼確認',
                ],
            ],

            'permissions' => [
                'title'  => '權限',
                'fields' => [
                    'roles'                                    => '角色',
                    'permissions'                              => '權限',
                    'resource-permission'                      => '資源權限',
                    'resource-permission-self-change-disabled' => '您不能變更自己的資源權限，請其他管理者協助。',
                    'teams'                                    => '團隊',
                ],
            ],

            'avatar' => [
                'title' => '頭像',
            ],

            'lang-and-status' => [
                'title'  => 'Language &狀態',
                'fields' => [
                    'language' => '偏好語言',
                    'status'   => '狀態',
                ],
            ],

            'multi-company' => [
                'title'             => '多公司',
                'allowed-companies' => '允許的公司',
                'default-company'   => '預設公司',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'avatar'              => '頭像',
            'name'                => '名稱',
            'email'               => '電子郵件',
            'teams'               => '團隊',
            'role'                => '角色',
            'resource-permission' => '資源權限',
            'default-company'     => '預設公司',
            'allowed-company'     => '允許的公司',
            'created-by'          => '建立者',
            'created-at'          => '建立時間',
            'updated-at'          => '更新時間',
        ],

        'filters' => [
            'resource-permission' => '資源權限',
            'teams'               => '團隊',
            'roles'               => '角色',
            'default-company'     => '預設公司',
            'allowed-companies'   => '允許的公司',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => '使用者已編輯',
                    'body'  => 'The user has been edited成功.',
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

            'restore' => [
                'notification' => [
                    'title' => '使用者已還原',
                    'body'  => 'The user has been restored成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => '使用者已還原',
                    'body'  => 'The users has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Users已刪除',
                    'body'  => 'The users has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Users force已刪除',
                    'body'  => 'The users has been force已刪除成功.',
                    'error' => [
                        'title' => 'User could not be已刪除',
                        'body'  => 'The user cannot be已刪除 because it is currently in use.',
                    ],
                ],
            ],
        ],

        'empty-state-actions' => [
            'create' => [
                'notification' => [
                    'title' => 'Users已建立',
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
                    'password'              => '密碼',
                    'password-confirmation' => '密碼確認',
                ],
            ],

            'permissions' => [
                'title'   => '權限',
                'entries' => [
                    'roles'               => '角色',
                    'permissions'         => '權限',
                    'resource-permission' => '資源權限',
                    'teams'               => '團隊',
                ],
            ],

            'avatar' => [
                'title' => '頭像',
            ],

            'lang-and-status' => [
                'title'   => 'Language &狀態',
                'entries' => [
                    'language' => '偏好語言',
                    'status'   => '狀態',
                ],
            ],

            'multi-company' => [
                'title'             => '多公司',
                'allowed-companies' => '允許的公司',
                'default-company'   => '預設公司',
            ],
        ],
    ],
];
