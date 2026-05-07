<?php

return [
    'title' => '發票',

    'navigation' => [
        'title' => '發票',
        'group' => '發票',
    ],

    'form' => [
        'section' => [
            'general' => [
                'title'  => '一般',
                'fields' => [
                    'customer-invoice' => 'Customer Credit Note',
                    'customer'         => '客戶',
                    'invoice-date'     => 'Invoice Date',
                    'due-date'         => '到期日',
                    'payment-term'     => 'Payment Term',
                ],
            ],
        ],

        'tabs' => [
            'invoice-lines' => [
                'title' => 'Invoice Lines',

                'repeater' => [
                    'products' => [
                        'title'       => '商品',
                        'add-product' => 'Add Product',

                        'fields' => [
                            'product'             => '商品',
                            'quantity'            => '數量',
                            'unit'                => 'Unit',
                            'taxes'               => '稅',
                            'discount-percentage' => 'Discount Percentage',
                            'unit-price'          => '單價',
                            'sub-total'           => 'Sub Total',
                        ],
                    ],
                ],
            ],

            'other-information' => [
                'title'    => '其他資料',
                'fieldset' => [
                    'invoice' => [
                        'title'  => '發票',
                        'fields' => [
                            'customer-reference' => 'Customer Reference',
                            'sales-person'       => 'Sales Person',
                            'payment-reference'  => 'Payment Reference',
                            'recipient-bank'     => 'Recipient Bank',
                            'delivery-date'      => 'Delivery Date',
                        ],
                    ],

                    'accounting' => [
                        'title' => '會計',

                        'fields' => [
                            'incoterm'          => 'Incoterm',
                            'incoterm-location' => 'Incoterm Location',
                            'payment-method'    => 'Payment Method',
                            'auto-post'         => 'Auto Post',
                            'checked'           => 'Checked',
                        ],
                    ],

                    'additional-information' => [
                        'title'  => 'Additional Information',
                        'fields' => [
                            'company'  => '公司',
                            'currency' => '幣別',
                        ],
                    ],

                    'marketing' => [
                        'title'  => 'Marketing',
                        'fields' => [
                            'campaign' => 'Campaign',
                            'medium'   => '中',
                            'source'   => 'Source',
                        ],
                    ],
                ],
            ],

            'term-and-conditions' => [
                'title' => 'Term & Conditions',
            ],
        ],
    ],

    'infolist' => [
        'section' => [
            'general' => [
                'title'   => '一般',
                'entries' => [
                    'customer-invoice' => 'Customer Credit Note',
                    'customer'         => '客戶',
                    'invoice-date'     => 'Invoice Date',
                    'due-date'         => '到期日',
                    'payment-term'     => 'Payment Term',
                ],
            ],
        ],

        'tabs' => [
            'invoice-lines' => [
                'title' => 'Invoice Lines',

                'repeater' => [
                    'products' => [
                        'entries' => [
                            'product'             => '商品',
                            'quantity'            => '數量',
                            'unit'                => '計量單位',
                            'taxes'               => '稅',
                            'discount-percentage' => 'Discount Percentage',
                            'unit-price'          => '單價',
                            'sub-total'           => 'Sub Total',
                            'total'               => '總計',
                        ],
                    ],
                ],
            ],

            'other-information' => [
                'title'    => '其他資料',
                'fieldset' => [
                    'invoice' => [
                        'title'   => '發票',
                        'entries' => [
                            'customer-reference' => 'Customer Reference',
                            'sales-person'       => 'Sales Person',
                            'payment-reference'  => 'Payment Reference',
                            'recipient-bank'     => 'Recipient Bank',
                            'delivery-date'      => 'Delivery Date',
                        ],
                    ],

                    'accounting' => [
                        'title' => '會計',

                        'fieldset' => [
                            'incoterm'          => 'Incoterm',
                            'incoterm-location' => 'Incoterm Location',
                            'payment-method'    => 'Payment Method',
                            'auto-post'         => 'Auto Post',
                            'checked'           => 'Checked',
                        ],
                    ],

                    'additional-information' => [
                        'title'   => 'Additional Information',
                        'entries' => [
                            'company'  => '公司',
                            'currency' => '幣別',
                        ],
                    ],

                    'marketing' => [
                        'title'   => 'Marketing',
                        'entries' => [
                            'campaign' => 'Campaign',
                            'medium'   => '中',
                            'source'   => 'Source',
                        ],
                    ],
                ],
            ],

            'term-and-conditions' => [
                'title' => 'Term & Conditions',
            ],
        ],
    ],
];
