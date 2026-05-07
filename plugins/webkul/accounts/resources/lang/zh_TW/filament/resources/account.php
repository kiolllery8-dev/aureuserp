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
                'account-name'  => 'Account名稱',
                'accounting'    => '會計',
                'account-type'  => '帳戶類型',
                'default-taxes' => '預設稅',
                'tags'          => '標籤',
                'journals'      => '帳本',
                'currency'      => '幣別',
                'deprecated'    => '已停用',
                'reconcile'     => '允許對帳',
                'non-trade'     => '非貿易',
                'companies'     => '公司',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'code'         => '代碼',
            'account-name' => 'Account名稱',
            'account-type' => '帳戶',
            'currency'     => '幣別',
            'journals'     => '帳本',
            'reconcile'    => '允許對帳',
        ],

        'grouping' => [
            'account-type' => '帳戶類型',
        ],

        'filters' => [
            'account-type'     => '帳戶類型',
            'allow-reconcile'  => '允許對帳',
            'currency'         => '幣別',
            'account-journals' => '帳本',
            'non-trade'        => '非貿易',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Account已更新',
                    'body'  => 'The account has been已更新成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Account已刪除',
                        'body'  => 'The account has been已刪除成功.',
                    ],

                    'error' => [
                        'title' => 'Account deletion失敗',
                        'body'  => 'The account could not be已刪除 because it has associated journal items.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Accounts已刪除',
                        'body'  => 'The accounts has been已刪除成功.',
                    ],

                    'error' => [
                        'title' => 'Accounts deletion失敗',
                        'body'  => 'The accounts could not be已刪除 because they have associated journal items.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'entries' => [
                'code'          => '代碼',
                'account-name'  => 'Account名稱',
                'accounting'    => '會計',
                'account-type'  => '帳戶類型',
                'default-taxes' => '預設稅',
                'tags'          => '標籤',
                'journals'      => '帳本',
                'currency'      => '幣別',
                'deprecated'    => '已停用',
                'reconcile'     => '對帳',
                'non-trade'     => '非貿易',
            ],
        ],
    ],
];
