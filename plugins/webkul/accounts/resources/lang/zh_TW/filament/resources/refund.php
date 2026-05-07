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
                    'vendor-credit-note' => '供應商 Credit 備註',
                    'vendor'             => '供應商',
                    'bill-date'          => '進貨日期',
                    'bill-reference'     => '進貨單 參考編號',
                    'accounting-date'    => '入帳日期',
                    'payment-reference'  => '付款參考',
                    'recipient-bank'     => 'Recipient 銀行',
                    'due-date'           => '到期日',
                    'payment-term'       => '付款條件',
                ],
            ],
        ],

        'tabs' => [
            'invoice-lines' => [
                'title' => '發票 Lines',

                'repeater' => [
                    'products' => [
                        'title'       => '商品',
                        'add-product' => '新增商品',

                        'fields' => [
                            'product'             => '商品',
                            'quantity'            => '數量',
                            'unit'                => '單位',
                            'taxes'               => '稅',
                            'discount-percentage' => '折扣百分比',
                            'unit-price'          => '單價',
                            'sub-total'           => '小計',
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
                            'incoterm'          => '貿易條件',
                            'incoterm-location' => '貿易條件地點',
                        ],
                    ],

                    'secured' => [
                        'title'  => 'Secured',
                        'fields' => [
                            'payment-method' => '付款方式',
                            'auto-post'      => 'Auto 文章',
                            'checked'        => '已核對',
                        ],
                    ],

                    'additional-information' => [
                        'title'  => '其他資料',
                        'fields' => [
                            'company'  => '公司',
                            'currency' => '幣別',
                        ],
                    ],
                ],
            ],

            'term-and-conditions' => [
                'title' => '條款',
            ],
        ],
    ],

    'infolist' => [
        'section' => [
            'general' => [
                'title'   => '一般',
                'entries' => [
                    'vendor-invoice'    => '供應商 發票',
                    'vendor'            => '供應商',
                    'bill-date'         => '進貨日期',
                    'bill-reference'    => '進貨單 參考編號',
                    'accounting-date'   => '入帳日期',
                    'payment-reference' => '付款參考',
                    'recipient-bank'    => 'Recipient 銀行',
                    'due-date'          => '到期日',
                    'payment-term'      => '付款條件',
                ],
            ],
        ],

        'tabs' => [
            'invoice-lines' => [
                'title' => '發票 Lines',

                'repeater' => [
                    'products' => [
                        'title'       => '商品',
                        'add-product' => '新增商品',

                        'entries' => [
                            'product'             => '商品',
                            'quantity'            => '數量',
                            'unit'                => '單位',
                            'taxes'               => '稅',
                            'discount-percentage' => '折扣百分比',
                            'unit-price'          => '單價',
                            'sub-total'           => '小計',
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
                            'incoterm'          => '貿易條件',
                            'incoterm-location' => '貿易條件地點',
                        ],
                    ],

                    'secured' => [
                        'title'   => 'Secured',
                        'entries' => [
                            'payment-method' => '付款方式',
                            'auto-post'      => 'Auto 文章',
                            'checked'        => '已核對',
                        ],
                    ],

                    'additional-information' => [
                        'title'   => '其他資料',
                        'entries' => [
                            'company'  => '公司',
                            'currency' => '幣別',
                        ],
                    ],
                ],
            ],

            'term-and-conditions' => [
                'title' => '條款',
            ],
        ],
    ],
];
