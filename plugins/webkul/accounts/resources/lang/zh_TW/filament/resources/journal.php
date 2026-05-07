<?php

return [
    'form' => [
        'tabs' => [
            'journal-entries' => [
                'title' => '分錄',

                'field-set' => [
                    'accounting-information' => [
                        'title'  => 'Accounting Information',
                        'fields' => [
                            'dedicated-credit-note-sequence' => 'Dedicated Credit Note Sequence',
                            'dedicated-payment-sequence'     => 'Dedicated Payment Sequence',
                            'sort-code-placeholder'          => 'Enter the journal code',
                            'sort-code'                      => 'Sort',
                            'currency'                       => '幣別',
                            'color'                          => 'Color',
                            'default-account'                => 'Default Account',
                            'profit-account'                 => 'Profit Account',
                            'loss-account'                   => 'Loss Account',
                            'suspense-account'               => 'Suspense Account',
                            'bank-account'                   => '銀行帳戶',
                        ],
                    ],

                    'bank-account-number' => [
                        'title' => 'Bank Account Number',
                    ],
                ],
            ],

            'incoming-payments' => [
                'title'            => 'Incoming Payments',
                'add-action-label' => 'Add Line',

                'fields' => [
                    'payment-method'             => 'Payment Method',
                    'display-name'               => 'Display Name',
                    'account-number'             => 'Outstanding Receipts Accounts',
                    'relation-notes'             => 'Relation Notes',
                    'relation-notes-placeholder' => 'Enter any relation details',
                ],
            ],

            'outgoing-payments' => [
                'title'            => 'Outgoing Payments',
                'add-action-label' => 'Add Line',

                'fields' => [
                    'payment-method'             => 'Payment Method',
                    'display-name'               => 'Display Name',
                    'account-number'             => 'Outstanding Payments Accounts',
                    'relation-notes'             => 'Relation Notes',
                    'relation-notes-placeholder' => 'Enter any relation details',
                ],
            ],

            'advanced-settings' => [
                'title'  => 'Advanced Settings',

                'fields' => [
                    'allowed-accounts'       => 'Allowed Accounts',
                    'control-access'         => 'Control Access',
                    'payment-communication'  => 'Payment Communication',
                    'auto-check-on-post'     => 'Auto Check on Post',
                    'communication-type'     => 'Communication Type',
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
                        'title' => 'Journal deleted',
                        'body'  => 'The journal has been deleted成功.',
                    ],

                    'error' => [
                        'title' => 'Journal deletion失敗',
                        'body'  => 'The journal cannot be deleted because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Journal deleted',
                        'body'  => 'The journal has been deleted成功.',
                    ],

                    'error' => [
                        'title' => 'Journals deletion失敗',
                        'body'  => 'The journals cannot be deleted because they are currently in use.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'tabs' => [
            'journal-entries' => [
                'title' => '分錄',

                'field-set' => [
                    'accounting-information' => [
                        'title'   => 'Accounting Information',

                        'entries' => [
                            'dedicated-credit-note-sequence' => 'Dedicated Credit Note Sequence',
                            'dedicated-payment-sequence'     => 'Dedicated Payment Sequence',
                            'sort-code-placeholder'          => 'Enter the journal code',
                            'sort-code'                      => 'Sort',
                            'currency'                       => '幣別',
                            'color'                          => 'Color',
                            'default-account'                => 'Default Account',
                            'profit-account'                 => 'Profit Account',
                            'loss-account'                   => 'Loss Account',
                            'suspense-account'               => 'Suspense Account',
                        ],
                    ],

                    'bank-account-number' => [
                        'title' => 'Bank Account Number',

                        'entries' => [
                            'account-number' => 'Account Number',
                        ],
                    ],
                ],
            ],

            'incoming-payments' => [
                'title' => 'Incoming Payments',

                'entries' => [
                    'payment-method'             => 'Payment Method',
                    'display-name'               => 'Display Name',
                    'account-number'             => 'Outstanding Receipts Accounts',
                    'relation-notes'             => 'Relation Notes',
                    'relation-notes-placeholder' => 'Enter any relation details',
                ],
            ],

            'outgoing-payments' => [
                'title' => 'Outgoing Payments',

                'entries' => [
                    'payment-method'             => 'Payment Method',
                    'display-name'               => 'Display Name',
                    'account-number'             => 'Outstanding Payments Accounts',
                    'relation-notes'             => 'Relation Notes',
                    'relation-notes-placeholder' => 'Enter any relation details',
                ],
            ],

            'advanced-settings' => [
                'title'   => 'Advanced Settings',

                'allowed-accounts' => [
                    'title' => 'Allowed Accounts',

                    'entries' => [
                        'allowed-accounts'       => 'Allowed Accounts',
                        'control-access'         => 'Control Access',
                        'auto-check-on-post'     => 'Auto Check on Post',
                    ],
                ],

                'payment-communication'  => [
                    'title' => 'Payment Communication',

                    'entries' => [
                        'communication-type'     => 'Communication Type',
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
