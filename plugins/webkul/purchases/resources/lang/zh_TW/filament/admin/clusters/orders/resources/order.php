<?php

return [
    'global-search' => [
        'vendor'    => '供應商',
        'reference' => '參考編號',
        'amount'    => '金額',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => '一般',

                'fields' => [
                    'vendor'                   => '供應商',
                    'vendor-reference'         => '供應商參考',
                    'vendor-reference-tooltip' => '供應商提供的銷售訂單或報價參考號，收貨時用於比對，通常包含在供應商出貨單上。',
                    'agreement'                => '合約',
                    'currency'                 => '幣別',
                    'confirmation-date'        => 'Confirmation日期',
                    'order-deadline'           => '訂單期限',
                    'expected-arrival'         => '預計到貨',
                    'confirmed-by-vendor'      => '供應商已確認',
                ],
            ],
        ],

        'tabs' => [
            'products' => [
                'title' => '商品',

                'repeater' => [
                    'products' => [
                        'title'            => '商品',
                        'add-product-line' => '新增商品',

                        'fields' => [
                            'product'             => '商品',
                            'expected-arrival'    => '預計到貨',
                            'quantity'            => '數量',
                            'received'            => '已收到',
                            'billed'              => '已開立',
                            'unit'                => '單位',
                            'packaging-qty'       => '包裝數量',
                            'packaging'           => '包裝',
                            'taxes'               => '稅',
                            'discount-percentage' => '折扣 (%)',
                            'unit-price'          => '單價',
                            'amount'              => '金額',
                        ],

                        'notifications' => [
                            'quantity-below-received' => [
                                'title' => 'Cannot Reduce數量',
                                'body'  => '數量不可低於已收貨數量（:qty）。',
                            ],

                            'blanket-order-qty-limit' => [
                                'title' => '數量超過大宗訂單上限',
                                'body'  => '商品數量（:product_qty）超過大宗訂單可用數量（:available_qty）。',
                            ],
                        ],

                        'columns' => [
                            'product'             => '商品',
                            'expected-arrival'    => '預計到貨',
                            'quantity'            => '數量',
                            'received'            => '已收到',
                            'billed'              => '已開立',
                            'unit'                => '單位',
                            'packaging-qty'       => '包裝數量',
                            'packaging'           => '包裝',
                            'taxes'               => '稅',
                            'discount-percentage' => '折扣 (%)',
                            'unit-price'          => '單價',
                            'amount'              => '金額',
                        ],

                        'delete-action' => [
                            'error' => [
                                'title' => 'Cannot 刪除Product',
                                'body'  => 'Products cannot be已刪除 from a confirmed purchase order.',
                            ],
                        ],
                    ],

                    'section' => [
                        'title' => '新增Section',

                        'fields' => [],
                    ],

                    'note' => [
                        'title' => '新增Note',

                        'fields' => [],
                    ],
                ],
            ],

            'additional' => [
                'title' => '其他資料',

                'fields' => [
                    'buyer'             => '買家',
                    'company'           => '公司',
                    'source-document'   => '來源單據',
                    'incoterm'          => '貿易條件',
                    'incoterm-tooltip'  => '國貿條款（Incoterms）是國際交易中定義買賣雙方責任的標準貿易條件。',
                    'incoterm-location' => '貿易條件地點',
                    'payment-term'      => '付款條件',
                    'fiscal-position'   => '稅務情境',
                ],
            ],

            'terms' => [
                'title' => '條款',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'favorite'         => '我的最愛',
            'priority'         => '優先順序',
            'vendor-reference' => '供應商參考',
            'reference'        => '參考編號',
            'vendor'           => '供應商',
            'buyer'            => '買家',
            'company'          => '公司',
            'order-deadline'   => '訂單期限',
            'source-document'  => '來源單據',
            'untaxed-amount'   => '未稅金額',
            'total-amount'     => '總金額',
            'status'           => '狀態',
            'billing-status'   => 'Billing狀態',
            'currency'         => '幣別',
        ],

        'groups' => [
            'vendor'     => '供應商',
            'buyer'      => '買家',
            'state'      => '狀態',
            'created-at' => '建立時間',
            'updated-at' => '更新時間',
        ],

        'filters' => [
            'status'           => '狀態',
            'vendor-reference' => '供應商參考',
            'reference'        => '參考編號',
            'untaxed-amount'   => '未稅金額',
            'total-amount'     => '總金額',
            'order-deadline'   => '訂單期限',
            'vendor'           => '供應商',
            'buyer'            => '買家',
            'company'          => '公司',
            'payment-term'     => '付款條件',
            'incoterm'         => '貿易條件',
            'status'           => '狀態',
            'created-at'       => '建立時間',
            'updated-at'       => '更新時間',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => '訂單已刪除',
                        'body'  => 'The order has been已刪除成功.',
                    ],

                    'error' => [
                        'title' => 'Order could not be已刪除',
                        'body'  => 'The order cannot be已刪除 because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Orders已刪除',
                        'body'  => 'The orders has been已刪除成功.',
                    ],

                    'error' => [
                        'title' => 'Orders could not be已刪除',
                        'body'  => 'The orders cannot be已刪除 because they are currently in use.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => '一般',

                'entries' => [
                    'purchase-order'           => '採購單',
                    'vendor'                   => '供應商',
                    'vendor-reference'         => '供應商參考',
                    'vendor-reference-tooltip' => '供應商提供的銷售訂單或報價參考號，收貨時用於比對，通常包含在供應商出貨單上。',
                    'agreement'                => '合約',
                    'currency'                 => '幣別',
                    'confirmation-date'        => 'Confirmation日期',
                    'order-deadline'           => '訂單期限',
                    'expected-arrival'         => '預計到貨',
                    'confirmed-by-vendor'      => '供應商已確認',
                ],
            ],
        ],

        'tabs' => [
            'products' => [
                'title' => '商品',

                'repeater' => [
                    'products' => [
                        'title'            => '商品',
                        'add-product-line' => '新增商品',

                        'entries' => [
                            'product'             => '商品',
                            'expected-arrival'    => '預計到貨',
                            'quantity'            => '數量',
                            'received'            => '已收到',
                            'billed'              => '已開立',
                            'unit'                => '單位',
                            'packaging-qty'       => '包裝數量',
                            'packaging'           => '包裝',
                            'taxes'               => '稅',
                            'discount-percentage' => '折扣 (%)',
                            'unit-price'          => '單價',
                            'amount'              => '金額',
                        ],
                    ],

                    'section' => [
                        'title' => '新增Section',
                    ],

                    'note' => [
                        'title' => '新增Note',
                    ],
                ],
            ],

            'additional' => [
                'title' => '其他資料',

                'entries' => [
                    'buyer'             => '買家',
                    'company'           => '公司',
                    'source-document'   => '來源單據',
                    'incoterm'          => '貿易條件',
                    'incoterm-tooltip'  => '國貿條款（Incoterms）是國際交易中定義買賣雙方責任的標準貿易條件。',
                    'incoterm-location' => '貿易條件地點',
                    'payment-term'      => '付款條件',
                    'fiscal-position'   => '稅務情境',
                ],
            ],

            'terms' => [
                'title' => '條款',
            ],
        ],
    ],
];
