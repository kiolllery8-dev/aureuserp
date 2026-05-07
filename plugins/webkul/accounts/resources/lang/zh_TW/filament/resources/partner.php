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
                        'title' => 'Customer Invoices',

                        'fields' => [
                            'invoice-sending-method'   => 'Invoice Sending Method',
                            'invoice-edi-format-store' => '電子發票格式',
                            'peppol-eas'               => 'Peppol Address',
                            'endpoint'                 => '端點',
                        ],
                    ],

                    'accounting-entries' => [
                        'title' => '會計分錄',

                        'fields' => [
                            'account-receivable' => 'Account Receivable',
                            'account-payable'    => 'Account Payable',
                        ],
                    ],

                    'automation' => [
                        'title' => '自動化',

                        'fields' => [
                            'auto-post-bills' => 'Auto Post Bills',
                            'ignore-abnormal-invoice-amount' => 'Ignore Abnormal Invoice金額',
                            'ignore-abnormal-invoice-date' => 'Ignore Abnormal Invoice日期',
                        ],
                    ]
                ],
            ],

            'internal-notes' => [
                'title' => 'Internal Notes',
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
                        'title' => 'Customer Invoices',

                        'entries' => [
                            'invoice-sending-method'   => 'Invoice Sending Method',
                            'invoice-edi-format-store' => '電子發票格式',
                            'peppol-eas'               => 'Peppol Address',
                            'endpoint'                 => '端點',
                        ],
                    ],

                    'accounting-entries' => [
                        'title' => '會計分錄',

                        'entries' => [
                            'account-receivable' => 'Account Receivable',
                            'account-payable'    => 'Account Payable',
                        ],
                    ],

                    'automation' => [
                        'title' => '自動化',

                        'entries' => [
                            'auto-post-bills' => 'Auto Post Bills',
                            'ignore-abnormal-invoice-amount' => 'Ignore Abnormal Invoice金額',
                            'ignore-abnormal-invoice-date' => 'Ignore Abnormal Invoice日期',
                        ],
                    ]
                ],
            ],

            'internal-notes' => [
                'title' => 'Internal Notes',
            ],
        ],
    ],
];
