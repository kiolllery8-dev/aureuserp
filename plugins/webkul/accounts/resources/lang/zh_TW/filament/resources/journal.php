<?php

return [
    'form' => [
        'tabs' => [
            'journal-entries' => [
                'title' => '帳目記錄',

                'field-set' => [
                    'accounting-information' => [
                        'title'  => 'Accounting資料',
                        'fields' => [
                            'dedicated-credit-note-sequence' => 'Dedicated Credit 備註 Sequence',
                            'dedicated-payment-sequence'     => 'Dedicated 付款 Sequence',
                            'sort-code-placeholder'          => 'Enter the journal code',
                            'sort-code'                      => 'Sort',
                            'currency'                       => '幣別',
                            'color'                          => '顏色',
                            'default-account'                => '預設 帳戶',
                            'profit-account'                 => 'Profit 帳戶',
                            'loss-account'                   => 'Loss 帳戶',
                            'suspense-account'               => 'Suspense 帳戶',
                            'bank-account'                   => '銀行帳戶',
                        ],
                    ],

                    'bank-account-number' => [
                        'title' => '銀行 帳戶 編號',
                    ],
                ],
            ],

            'incoming-payments' => [
                'title'            => 'Incoming 付款',
                'add-action-label' => '新增明細',

                'fields' => [
                    'payment-method'             => '付款方式',
                    'display-name'               => 'Display名稱',
                    'account-number'             => 'Outstanding 進貨 帳戶',
                    'relation-notes'             => 'Relation 備註',
                    'relation-notes-placeholder' => 'Enter any relation details',
                ],
            ],

            'outgoing-payments' => [
                'title'            => 'Outgoing 付款',
                'add-action-label' => '新增明細',

                'fields' => [
                    'payment-method'             => '付款方式',
                    'display-name'               => 'Display名稱',
                    'account-number'             => 'Outstanding 付款 帳戶',
                    'relation-notes'             => 'Relation 備註',
                    'relation-notes-placeholder' => 'Enter any relation details',
                ],
            ],

            'advanced-settings' => [
                'title'  => 'Advanced 設定',

                'fields' => [
                    'allowed-accounts'       => 'Allowed 帳戶',
                    'control-access'         => 'Control Access',
                    'payment-communication'  => '付款 Communication',
                    'auto-check-on-post'     => 'Auto Check on 文章',
                    'communication-type'     => 'Communication類型',
                    'communication-standard' => 'Communication Standard',
                ],
            ],
        ],

        'general' => [
            'title' => '一般資料',

            'fields' => [
                'name'    => '名稱',
                'type'    => '類型',
                'company' => '公司',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => '名稱',
            'type'       => '類型',
            'code'       => '代碼',
            'currency'   => '幣別',
            'created-by' => '建立者',
            'status'     => '狀態',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => '帳本已刪除',
                        'body'  => 'The journal has been已刪除成功.',
                    ],

                    'error' => [
                        'title' => '帳本 deletion失敗',
                        'body'  => 'The journal cannot be已刪除 because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => '帳本已刪除',
                        'body'  => 'The journal has been已刪除成功.',
                    ],

                    'error' => [
                        'title' => '帳本 deletion失敗',
                        'body'  => 'The journals cannot be已刪除 because they are currently in use.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'tabs' => [
            'journal-entries' => [
                'title' => '帳目記錄',

                'field-set' => [
                    'accounting-information' => [
                        'title'   => 'Accounting資料',

                        'entries' => [
                            'dedicated-credit-note-sequence' => 'Dedicated Credit 備註 Sequence',
                            'dedicated-payment-sequence'     => 'Dedicated 付款 Sequence',
                            'sort-code-placeholder'          => 'Enter the journal code',
                            'sort-code'                      => 'Sort',
                            'currency'                       => '幣別',
                            'color'                          => '顏色',
                            'default-account'                => '預設 帳戶',
                            'profit-account'                 => 'Profit 帳戶',
                            'loss-account'                   => 'Loss 帳戶',
                            'suspense-account'               => 'Suspense 帳戶',
                        ],
                    ],

                    'bank-account-number' => [
                        'title' => '銀行 帳戶 編號',

                        'entries' => [
                            'account-number' => '帳戶 編號',
                        ],
                    ],
                ],
            ],

            'incoming-payments' => [
                'title' => 'Incoming 付款',

                'entries' => [
                    'payment-method'             => '付款方式',
                    'display-name'               => 'Display名稱',
                    'account-number'             => 'Outstanding 進貨 帳戶',
                    'relation-notes'             => 'Relation 備註',
                    'relation-notes-placeholder' => 'Enter any relation details',
                ],
            ],

            'outgoing-payments' => [
                'title' => 'Outgoing 付款',

                'entries' => [
                    'payment-method'             => '付款方式',
                    'display-name'               => 'Display名稱',
                    'account-number'             => 'Outstanding 付款 帳戶',
                    'relation-notes'             => 'Relation 備註',
                    'relation-notes-placeholder' => 'Enter any relation details',
                ],
            ],

            'advanced-settings' => [
                'title'   => 'Advanced 設定',

                'allowed-accounts' => [
                    'title' => 'Allowed 帳戶',

                    'entries' => [
                        'allowed-accounts'       => 'Allowed 帳戶',
                        'control-access'         => 'Control Access',
                        'auto-check-on-post'     => 'Auto Check on 文章',
                    ],
                ],

                'payment-communication'  => [
                    'title' => '付款 Communication',

                    'entries' => [
                        'communication-type'     => 'Communication類型',
                        'communication-standard' => 'Communication Standard',
                    ],
                ],
            ],
        ],

        'general' => [
            'title' => '一般資料',

            'entries' => [
                'name'    => '名稱',
                'type'    => '類型',
                'company' => '公司',
            ],
        ],
    ],

];
