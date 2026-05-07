<?php

return [
    'title' => '報價單',

    'navigation' => [
        'title' => '報價單',
    ],

    'global-search' => [
        'customer'  => '客戶',
        'reference' => '參考編號',
        'amount'    => '金額',
    ],

    'form' => [
        'section' => [
            'general' => [
                'title'  => '一般',
                'fields' => [
                    'customer'       => '客戶',
                    'expiration'     => '到期',
                    'quotation-date' => '報價日期',
                    'order-date'     => '訂單日期',
                    'payment-term'   => '付款條件',
                ],
            ],
        ],

        'tabs' => [
            'order-line' => [
                'title' => '訂單項目',

                'repeater' => [
                    'products' => [
                        'title'       => '商品',
                        'add-product' => '新增商品',

                        'columns'     => [
                            'product'             => '商品',
                            'product-variants'    => '商品款式',
                            'product-simple'      => '簡易商品',
                            'quantity'            => '數量',
                            'uom'                 => '計量單位',
                            'lead-time'           => 'Lead時間',
                            'qty-delivered'       => '已交貨',
                            'qty-invoiced'        => '已開立發票',
                            'packaging-qty'       => 'Packaging數量',
                            'packaging'           => '包裝',
                            'unit-price'          => '單價',
                            'cost'                => '成本',
                            'margin'              => '毛利',
                            'taxes'               => '稅',
                            'amount'              => '金額',
                            'margin-percentage'   => '毛利（%）',
                            'discount-percentage' => '折扣 (%)',
                        ],

                        'fields'      => [
                            'product'             => '商品',
                            'product-variants'    => '商品款式',
                            'product-simple'      => '簡易商品',
                            'quantity'            => '數量',
                            'uom'                 => '計量單位',
                            'lead-time'           => 'Lead時間',
                            'qty-delivered'       => '已出貨數量',
                            'qty-invoiced'        => '已開立發票數量',
                            'packaging-qty'       => 'Packaging數量',
                            'packaging'           => '包裝',
                            'unit-price'          => '單價',
                            'cost'                => '成本',
                            'margin'              => '毛利',
                            'taxes'               => '稅',
                            'amount'              => '金額',
                            'margin-percentage'   => '毛利（%）',
                            'discount-percentage' => '折扣 (%)',
                        ],

                        'notifications' => [
                            'quantity-below-delivered' => [
                                'title' => 'Cannot Reduce數量',
                                'body'  => '數量不可低於已出貨數量（:qty）。',
                            ],
                        ],

                        'delete-action' => [
                            'error' => [
                                'title' => 'Cannot 刪除Product',
                                'body'  => 'Products cannot be已刪除 from a confirmed sales order.',
                            ],
                        ],
                    ],

                    'product-optional' => [
                        'title'       => '選配商品',
                        'add-product' => '新增商品',

                        'columns' => [
                            'product'             => '商品',
                            'description'         => '說明',
                            'quantity'            => '數量',
                            'uom'                 => '計量單位',
                            'unit-price'          => '單價',
                            'discount-percentage' => '折扣 (%)',
                        ],

                        'fields'      => [
                            'product'             => '商品',
                            'description'         => '說明',
                            'quantity'            => '數量',
                            'uom'                 => '計量單位',
                            'unit-price'          => '單價',
                            'discount-percentage' => '折扣 (%)',

                            'actions' => [
                                'tooltip' => [
                                    'add-order-line' => '新增Order Line',
                                ],

                                'notifications' => [
                                    'product-added' => [
                                        'title' => '商品已新增',
                                        'body'  => 'The product has been added成功.',
                                    ],

                                    'product-not-found' => [
                                        'title' => '找不到商品',
                                    ],

                                    'product-already-exists' => [
                                        'title' => '商品已存在',
                                        'body'  => '此商品已在訂單中，請改更新既有項目。',
                                    ],

                                    'missing-product-data' => [
                                        'title' => '商品資料不全',
                                        'body'  => '無法處理所選商品。',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'other-information' => [
                'title' => '其他資料',

                'fieldset' => [
                    'sales' => [
                        'title' => '銷售',

                        'fields' => [
                            'sales-person'       => '業務',
                            'customer-reference' => '客戶參考',
                            'tags'               => '標籤',
                        ],
                    ],

                    'shipping' => [
                        'title'  => '運送',
                        'fields' => [
                            'commitment-date' => 'Delivery日期',
                        ],
                    ],

                    'tracking' => [
                        'title'  => '追蹤',
                        'fields' => [
                            'source-document' => '來源單據',
                            'medium'          => '中',
                            'source'          => '來源',
                            'campaign'        => '行銷活動',
                        ],
                    ],

                    'additional-information' => [
                        'title' => '其他資料',

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

    'table' => [
        'columns' => [
            'number'             => '編號',
            'status'             => '狀態',
            'invoice-status'     => 'Invoice狀態',
            'creation-date'      => 'Creation日期',
            'commitment-date'    => 'Commitment日期',
            'expected-date'      => 'Expected日期',
            'customer'           => '客戶',
            'sales-person'       => '業務',
            'sales-team'         => '業務團隊',
            'untaxed-amount'     => '未稅金額',
            'amount-tax'         => '稅額',
            'amount-total'       => 'Amount總計',
            'customer-reference' => '客戶參考',
        ],

        'filters' => [
            'sales-person'     => '業務',
            'utm-source'       => 'UTM 來源',
            'company'          => '公司',
            'customer'         => '客戶',
            'journal'          => '帳本',
            'invoice-address'  => '發票地址',
            'shipping-address' => '送貨地址',
            'fiscal-position'  => '稅務情境',
            'payment-term'     => '付款條件',
            'currency'         => '幣別',
            'created-at'       => '建立時間',
            'updated-at'       => '更新時間',
        ],

        'groups' => [
            'medium'          => '中',
            'source'          => '來源',
            'team'            => '團隊',
            'sales-person'    => '業務',
            'currency'        => '幣別',
            'company'         => '公司',
            'customer'        => '客戶',
            'quotation-date'  => '報價日期',
            'commitment-date' => 'Commitment日期',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => '報價已還原',
                    'body'  => 'The quotation has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Quotation已刪除',
                    'body'  => 'The quotation has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Quotation force已刪除',
                    'body'  => 'The quotation has been force已刪除成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => '報價已還原',
                    'body'  => 'The quotations has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Quotations已刪除',
                    'body'  => 'The quotations has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Quotations force已刪除',
                    'body'  => 'The quotations has been force已刪除成功.',
                ],
            ],
        ],

        'empty-state-action' => [
            'create' => [
                'notification' => [
                    'title' => 'Quotations已建立',
                    'body'  => 'The quotations has been已建立成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'section' => [
            'general' => [
                'title'   => '一般',
                'entries' => [
                    'sale-order'     => '銷貨訂單',
                    'customer'       => '客戶',
                    'expiration'     => '到期',
                    'quotation-date' => '報價日期',
                    'payment-term'   => '付款條件',
                ],
            ],
        ],

        'tabs' => [
            'order-line' => [
                'title' => '訂單項目',

                'repeater' => [
                    'products' => [
                        'title'       => '商品',
                        'add-product' => '新增商品',
                        'entries'     => [
                            'product'             => '商品',
                            'product-variants'    => '商品款式',
                            'product-simple'      => '簡易商品',
                            'quantity'            => '數量',
                            'uom'                 => '計量單位',
                            'lead-time'           => 'Lead時間',
                            'packaging-qty'       => 'Packaging數量',
                            'packaging'           => '包裝',
                            'unit-price'          => '單價',
                            'cost'                => '成本',
                            'margin'              => '毛利',
                            'taxes'               => '稅',
                            'amount'              => '金額',
                            'margin-percentage'   => '毛利（%）',
                            'discount-percentage' => '折扣 (%)',
                            'sub-total'           => '小計',
                        ],
                    ],

                    'product-optional' => [
                        'title'       => '選配商品',
                        'add-product' => '新增商品',
                        'entries'     => [
                            'product'             => '商品',
                            'description'         => '說明',
                            'quantity'            => '數量',
                            'uom'                 => '計量單位',
                            'unit-price'          => '單價',
                            'discount-percentage' => '折扣 (%)',
                            'sub-total'           => '小計',

                            'actions' => [
                                'tooltip' => [
                                    'add-order-line' => '新增Order Line',
                                ],

                                'notifications' => [
                                    'product-added' => [
                                        'title' => '商品已新增',
                                        'body'  => 'The product has been added成功.',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'other-information' => [
                'title' => '其他資料',

                'fieldset' => [
                    'sales' => [
                        'title' => '銷售',

                        'entries' => [
                            'sales-person'       => '業務',
                            'customer-reference' => '客戶參考',
                            'tags'               => '標籤',
                        ],
                    ],

                    'shipping' => [
                        'title'   => '運送',
                        'entries' => [
                            'commitment-date' => 'Delivery日期',
                        ],
                    ],

                    'tracking' => [
                        'title'   => '追蹤',
                        'entries' => [
                            'source-document' => '來源單據',
                            'medium'          => '中',
                            'source'          => '來源',
                            'campaign'        => '行銷活動',
                        ],
                    ],

                    'additional-information' => [
                        'title' => '其他資料',

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
