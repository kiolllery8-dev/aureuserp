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
                    'vendor-credit-note' => 'Vendor Credit Note',
                    'vendor'             => '供應商',
                    'bill-date'          => 'Bill Date',
                    'bill-reference'     => 'Bill Reference',
                    'accounting-date'    => 'Accounting Date',
                    'payment-reference'  => 'Payment Reference',
                    'recipient-bank'     => 'Recipient Bank',
                    'due-date'           => '到期日',
                    'payment-term'       => 'Payment Term',
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
                    'accounting' => [
                        'title' => '會計',

                        'fields' => [
                            'incoterm'          => 'Incoterm',
                            'incoterm-location' => 'Incoterm Location',
                        ],
                    ],

                    'secured' => [
                        'title'  => 'Secured',
                        'fields' => [
                            'payment-method' => 'Payment Method',
                            'auto-post'      => 'Auto Post',
                            'checked'        => 'Checked',
                        ],
                    ],

                    'additional-information' => [
                        'title'  => 'Additional Information',
                        'fields' => [
                            'company'  => '公司',
                            'currency' => '幣別',
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
                    'vendor-invoice'    => 'Vendor Invoice',
                    'vendor'            => '供應商',
                    'bill-date'         => 'Bill Date',
                    'bill-reference'    => 'Bill Reference',
                    'accounting-date'   => 'Accounting Date',
                    'payment-reference' => 'Payment Reference',
                    'recipient-bank'    => 'Recipient Bank',
                    'due-date'          => '到期日',
                    'payment-term'      => 'Payment Term',
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

                        'entries' => [
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
                    'accounting' => [
                        'title' => '會計',

                        'entries' => [
                            'incoterm'          => 'Incoterm',
                            'incoterm-location' => 'Incoterm Location',
                        ],
                    ],

                    'secured' => [
                        'title'   => 'Secured',
                        'entries' => [
                            'payment-method' => 'Payment Method',
                            'auto-post'      => 'Auto Post',
                            'checked'        => 'Checked',
                        ],
                    ],

                    'additional-information' => [
                        'title'   => 'Additional Information',
                        'entries' => [
                            'company'  => '公司',
                            'currency' => '幣別',
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
