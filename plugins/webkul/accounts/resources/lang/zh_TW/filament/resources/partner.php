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
                'title'  => 'Invoicing',

                'fieldsets' => [
                    'customer-invoices' => [
                        'title' => '客戶 發票',

                        'fields' => [
                            'invoice-sending-method'   => '發票 Sending 方式',
                            'invoice-edi-format-store' => 'eInvoice Format',
                            'peppol-eas'               => 'Peppol 地址',
                            'endpoint'                 => 'Endpoint',
                        ],
                    ],

                    'accounting-entries' => [
                        'title' => 'Accounting Entries',

                        'fields' => [
                            'account-receivable' => '帳戶 Receivable',
                            'account-payable'    => '帳戶 Payable',
                        ],
                    ],

                    'automation' => [
                        'title' => 'Automation',

                        'fields' => [
                            'auto-post-bills' => 'Auto 文章 進貨單',
                            'ignore-abnormal-invoice-amount' => 'Ignore Abnormal Invoice金額',
                            'ignore-abnormal-invoice-date' => 'Ignore Abnormal Invoice日期',
                        ],
                    ]
                ],
            ],

            'internal-notes' => [
                'title' => 'Internal 備註',
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
                'title'  => 'Invoicing',

                'fieldsets' => [
                    'customer-invoices' => [
                        'title' => '客戶 發票',

                        'entries' => [
                            'invoice-sending-method'   => '發票 Sending 方式',
                            'invoice-edi-format-store' => 'eInvoice Format',
                            'peppol-eas'               => 'Peppol 地址',
                            'endpoint'                 => 'Endpoint',
                        ],
                    ],

                    'accounting-entries' => [
                        'title' => 'Accounting Entries',

                        'entries' => [
                            'account-receivable' => '帳戶 Receivable',
                            'account-payable'    => '帳戶 Payable',
                        ],
                    ],

                    'automation' => [
                        'title' => 'Automation',

                        'entries' => [
                            'auto-post-bills' => 'Auto 文章 進貨單',
                            'ignore-abnormal-invoice-amount' => 'Ignore Abnormal Invoice金額',
                            'ignore-abnormal-invoice-date' => 'Ignore Abnormal Invoice日期',
                        ],
                    ]
                ],
            ],

            'internal-notes' => [
                'title' => 'Internal 備註',
            ],
        ],
    ],
];
