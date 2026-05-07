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
                    'customer-invoice' => '客戶退貨單',
                    'customer'         => '客戶',
                    'invoice-date'     => '開立日期',
                    'due-date'         => '到期日',
                    'payment-term'     => '付款條件',
                ],
            ],
        ],

        'tabs' => [
            'invoice-lines' => [
                'title' => '發票項目',

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
                    'invoice' => [
                        'title'  => '發票',
                        'fields' => [
                            'customer-reference' => '客戶參考',
                            'sales-person'       => '業務',
                            'payment-reference'  => '付款參考',
                            'recipient-bank'     => '收款銀行',
                            'delivery-date'      => 'Delivery日期',
                        ],
                    ],

                    'accounting' => [
                        'title' => '會計',

                        'fields' => [
                            'incoterm'          => '貿易條件',
                            'incoterm-location' => '貿易條件地點',
                            'payment-method'    => '付款方式',
                            'auto-post'         => '自動過帳',
                            'checked'           => '已核對',
                        ],
                    ],

                    'additional-information' => [
                        'title'  => '其他資料',
                        'fields' => [
                            'company'  => '公司',
                            'currency' => '幣別',
                        ],
                    ],

                    'marketing' => [
                        'title'  => '行銷',
                        'fields' => [
                            'campaign' => '行銷活動',
                            'medium'   => '中',
                            'source'   => '來源',
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
                    'customer-invoice' => '客戶退貨單',
                    'customer'         => '客戶',
                    'invoice-date'     => '開立日期',
                    'due-date'         => '到期日',
                    'payment-term'     => '付款條件',
                ],
            ],
        ],

        'tabs' => [
            'invoice-lines' => [
                'title' => '發票項目',

                'repeater' => [
                    'products' => [
                        'entries' => [
                            'product'             => '商品',
                            'quantity'            => '數量',
                            'unit'                => '計量單位',
                            'taxes'               => '稅',
                            'discount-percentage' => '折扣百分比',
                            'unit-price'          => '單價',
                            'sub-total'           => '小計',
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
                            'customer-reference' => '客戶參考',
                            'sales-person'       => '業務',
                            'payment-reference'  => '付款參考',
                            'recipient-bank'     => '收款銀行',
                            'delivery-date'      => 'Delivery日期',
                        ],
                    ],

                    'accounting' => [
                        'title' => '會計',

                        'fieldset' => [
                            'incoterm'          => '貿易條件',
                            'incoterm-location' => '貿易條件地點',
                            'payment-method'    => '付款方式',
                            'auto-post'         => '自動過帳',
                            'checked'           => '已核對',
                        ],
                    ],

                    'additional-information' => [
                        'title'   => '其他資料',
                        'entries' => [
                            'company'  => '公司',
                            'currency' => '幣別',
                        ],
                    ],

                    'marketing' => [
                        'title'   => '行銷',
                        'entries' => [
                            'campaign' => '行銷活動',
                            'medium'   => '中',
                            'source'   => '來源',
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
