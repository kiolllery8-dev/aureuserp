<?php

return [
    'global-search' => [
        'code' => '代碼',
        'type' => '類型',
    ],

    'form' => [
        'sections' => [
            'fields' => [
                'code'          => '代碼',
                'account-name'  => 'Account Name',
                'accounting'    => '會計',
                'account-type'  => 'Account Type',
                'default-taxes' => 'Default Taxes',
                'tags'          => '標籤',
                'journals'      => '日記帳',
                'currency'      => '幣別',
                'deprecated'    => 'Deprecated',
                'reconcile'     => 'Allow Reconcile',
                'non-trade'     => 'Non Trade',
                'companies'     => '公司',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'code'         => '代碼',
            'account-name' => 'Account Name',
            'account-type' => '科目',
            'currency'     => '幣別',
            'journals'     => '日記帳',
            'reconcile'    => 'Allow Reconcile',
        ],

        'grouping' => [
            'account-type' => 'Account Type',
        ],

        'filters' => [
            'account-type'     => 'Account Type',
            'allow-reconcile'  => 'Allow Reconcile',
            'currency'         => '幣別',
            'account-journals' => '日記帳',
            'non-trade'        => 'Non Trade',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Account updated',
                    'body'  => 'The account has been updated成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Account deleted',
                        'body'  => 'The account has been deleted成功.',
                    ],

                    'error' => [
                        'title' => 'Account deletion失敗',
                        'body'  => 'The account could not be deleted because it has associated journal items.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Accounts deleted',
                        'body'  => 'The accounts has been deleted成功.',
                    ],

                    'error' => [
                        'title' => 'Accounts deletion失敗',
                        'body'  => 'The accounts could not be deleted because they have associated journal items.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'entries' => [
                'code'          => '代碼',
                'account-name'  => 'Account Name',
                'accounting'    => '會計',
                'account-type'  => 'Account Type',
                'default-taxes' => 'Default Taxes',
                'tags'          => '標籤',
                'journals'      => '日記帳',
                'currency'      => '幣別',
                'deprecated'    => 'Deprecated',
                'reconcile'     => 'Reconcile',
                'non-trade'     => 'Non Trade',
            ],
        ],
    ],
];
