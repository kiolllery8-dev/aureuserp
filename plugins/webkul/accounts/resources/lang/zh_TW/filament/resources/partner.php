<?php

return [
    'title' => '夥伴',

    'navigation' => [
        'title' => '夥伴',
    ],

    'form' => [
        'tabs' => [
            'sales-purchases' => [
                'fieldsets' => [
                    'sales' => [
                        'title' => '銷售',

                        'fields' => [
                            'sales-person'   => '業務',
                            'payment-terms'  => '付款條件',
                            'payment-method' => '付款方式',
                        ],
                    ],

                    'purchase' => [
                        'title' => '採購',

                        'fields' => [
                            'payment-terms'  => '付款條件',
                            'payment-method' => '付款方式',
                        ],
                    ],

                    'fiscal-information' => [
                        'title' => 'Fiscal資料',

                        'fields' => [
                            'fiscal-position'    => '稅務情境',
                        ],
                    ],
                ],
            ],

            'invoicing' => [
                'title'  => '開立發票',

                'fieldsets' => [
                    'customer-invoices' => [
                        'title' => '客戶發票',

                        'fields' => [
                            'invoice-sending-method'   => '發票寄送方式',
                            'invoice-edi-format-store' => '電子發票格式',
                            'peppol-eas'               => 'Peppol Address',
                            'endpoint'                 => '端點',
                        ],
                    ],

                    'accounting-entries' => [
                        'title' => '會計分錄',

                        'fields' => [
                            'account-receivable' => '應收科目',
                            'account-payable'    => '應付科目',
                        ],
                    ],

                    'automation' => [
                        'title' => '自動化',

                        'fields' => [
                            'auto-post-bills' => '自動過帳帳單',
                            'ignore-abnormal-invoice-amount' => 'Ignore Abnormal Invoice金額',
                            'ignore-abnormal-invoice-date' => 'Ignore Abnormal Invoice日期',
                        ],
                    ]
                ],
            ],

            'internal-notes' => [
                'title' => '內部備註',
            ],
        ],
    ],

    'infolist' => [
        
        'tabs' => [
            'sales-purchases' => [
                'fieldsets' => [
                    'sales' => [
                        'title' => '銷售',

                        'entries' => [
                            'sales-person'   => '業務',
                            'payment-terms'  => '付款條件',
                            'payment-method' => '付款方式',
                        ],
                    ],

                    'purchase' => [
                        'title' => '採購',

                        'entries' => [
                            'payment-terms'  => '付款條件',
                            'payment-method' => '付款方式',
                        ],
                    ],

                    'fiscal-information' => [
                        'title' => 'Fiscal資料',

                        'entries' => [
                            'fiscal-position'    => '稅務情境',
                        ],
                    ],
                ],
            ],

            'invoicing' => [
                'title'  => '開立發票',

                'fieldsets' => [
                    'customer-invoices' => [
                        'title' => '客戶發票',

                        'entries' => [
                            'invoice-sending-method'   => '發票寄送方式',
                            'invoice-edi-format-store' => '電子發票格式',
                            'peppol-eas'               => 'Peppol Address',
                            'endpoint'                 => '端點',
                        ],
                    ],

                    'accounting-entries' => [
                        'title' => '會計分錄',

                        'entries' => [
                            'account-receivable' => '應收科目',
                            'account-payable'    => '應付科目',
                        ],
                    ],

                    'automation' => [
                        'title' => '自動化',

                        'entries' => [
                            'auto-post-bills' => '自動過帳帳單',
                            'ignore-abnormal-invoice-amount' => 'Ignore Abnormal Invoice金額',
                            'ignore-abnormal-invoice-date' => 'Ignore Abnormal Invoice日期',
                        ],
                    ]
                ],
            ],

            'internal-notes' => [
                'title' => '內部備註',
            ],
        ],
    ],
];
