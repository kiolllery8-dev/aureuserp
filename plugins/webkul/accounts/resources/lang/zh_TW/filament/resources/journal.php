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
                            'dedicated-credit-note-sequence' => '專用退貨單序號',
                            'dedicated-payment-sequence'     => '專用付款序號',
                            'sort-code-placeholder'          => '輸入日記帳代碼',
                            'sort-code'                      => '排序',
                            'currency'                       => '幣別',
                            'color'                          => '顏色',
                            'default-account'                => '預設科目',
                            'profit-account'                 => 'Profit Account',
                            'loss-account'                   => 'Loss Account',
                            'suspense-account'               => '暫掛科目',
                            'bank-account'                   => '銀行帳戶',
                        ],
                    ],

                    'bank-account-number' => [
                        'title' => '銀行帳號',
                    ],
                ],
            ],

            'incoming-payments' => [
                'title'            => '入帳付款',
                'add-action-label' => '新增明細',

                'fields' => [
                    'payment-method'             => '付款方式',
                    'display-name'               => 'Display名稱',
                    'account-number'             => '未沖收款科目',
                    'relation-notes'             => 'Relation Notes',
                    'relation-notes-placeholder' => '輸入任何關聯詳情',
                ],
            ],

            'outgoing-payments' => [
                'title'            => '出帳付款',
                'add-action-label' => '新增明細',

                'fields' => [
                    'payment-method'             => '付款方式',
                    'display-name'               => 'Display名稱',
                    'account-number'             => '未沖付款科目',
                    'relation-notes'             => 'Relation Notes',
                    'relation-notes-placeholder' => '輸入任何關聯詳情',
                ],
            ],

            'advanced-settings' => [
                'title'  => '進階設定',

                'fields' => [
                    'allowed-accounts'       => '允許科目',
                    'control-access'         => '存取控制',
                    'payment-communication'  => '付款通訊',
                    'auto-check-on-post'     => '過帳時自動檢查',
                    'communication-type'     => 'Communication類型',
                    'communication-standard' => '通訊標準',
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
                        'title' => 'Journal已刪除',
                        'body'  => 'The journal has been已刪除成功.',
                    ],

                    'error' => [
                        'title' => 'Journal deletion失敗',
                        'body'  => 'The journal cannot be已刪除 because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Journal已刪除',
                        'body'  => 'The journal has been已刪除成功.',
                    ],

                    'error' => [
                        'title' => 'Journals deletion失敗',
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
                            'dedicated-credit-note-sequence' => '專用退貨單序號',
                            'dedicated-payment-sequence'     => '專用付款序號',
                            'sort-code-placeholder'          => '輸入日記帳代碼',
                            'sort-code'                      => '排序',
                            'currency'                       => '幣別',
                            'color'                          => '顏色',
                            'default-account'                => '預設科目',
                            'profit-account'                 => 'Profit Account',
                            'loss-account'                   => 'Loss Account',
                            'suspense-account'               => '暫掛科目',
                        ],
                    ],

                    'bank-account-number' => [
                        'title' => '銀行帳號',

                        'entries' => [
                            'account-number' => '帳號',
                        ],
                    ],
                ],
            ],

            'incoming-payments' => [
                'title' => '入帳付款',

                'entries' => [
                    'payment-method'             => '付款方式',
                    'display-name'               => 'Display名稱',
                    'account-number'             => '未沖收款科目',
                    'relation-notes'             => 'Relation Notes',
                    'relation-notes-placeholder' => '輸入任何關聯詳情',
                ],
            ],

            'outgoing-payments' => [
                'title' => '出帳付款',

                'entries' => [
                    'payment-method'             => '付款方式',
                    'display-name'               => 'Display名稱',
                    'account-number'             => '未沖付款科目',
                    'relation-notes'             => 'Relation Notes',
                    'relation-notes-placeholder' => '輸入任何關聯詳情',
                ],
            ],

            'advanced-settings' => [
                'title'   => '進階設定',

                'allowed-accounts' => [
                    'title' => '允許科目',

                    'entries' => [
                        'allowed-accounts'       => '允許科目',
                        'control-access'         => '存取控制',
                        'auto-check-on-post'     => '過帳時自動檢查',
                    ],
                ],

                'payment-communication'  => [
                    'title' => '付款通訊',

                    'entries' => [
                        'communication-type'     => 'Communication類型',
                        'communication-standard' => '通訊標準',
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
