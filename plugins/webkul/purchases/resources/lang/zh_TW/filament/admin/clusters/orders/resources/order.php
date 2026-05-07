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
                    'vendor-reference'         => 'Vendor Reference',
                    'vendor-reference-tooltip' => 'The reference number of the sales order or bid provided by the vendor. It is used for matching when receiving products, as this reference is typically included in the vendor\'s delivery order.',
                    'agreement'                => 'Agreement',
                    'currency'                 => '幣別',
                    'confirmation-date'        => 'Confirmation日期',
                    'order-deadline'           => '訂單期限',
                    'expected-arrival'         => 'Expected Arrival',
                    'confirmed-by-vendor'      => 'Confirmed by Vendor',
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
                            'expected-arrival'    => 'Expected Arrival',
                            'quantity'            => '數量',
                            'received'            => 'Received',
                            'billed'              => 'Billed',
                            'unit'                => '單位',
                            'packaging-qty'       => 'Packaging Qty',
                            'packaging'           => '包裝',
                            'taxes'               => '稅',
                            'discount-percentage' => '折扣 (%)',
                            'unit-price'          => '單價',
                            'amount'              => '金額',
                        ],

                        'notifications' => [
                            'quantity-below-received' => [
                                'title' => 'Cannot Reduce數量',
                                'body'  => 'You cannot reduce the quantity below the received quantity (:qty).',
                            ],

                            'blanket-order-qty-limit' => [
                                'title' => 'Quantity Exceeds Blanket Order Limit',
                                'body'  => 'The product quantity (:product_qty) exceeds the available quantity (:available_qty) from the blanket order.',
                            ],
                        ],

                        'columns' => [
                            'product'             => '商品',
                            'expected-arrival'    => 'Expected Arrival',
                            'quantity'            => '數量',
                            'received'            => 'Received',
                            'billed'              => 'Billed',
                            'unit'                => '單位',
                            'packaging-qty'       => 'Packaging Qty',
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
                    'incoterm-tooltip'  => 'International Commercial Terms (Incoterms) are a set of standardized trade terms used in global transactions to define responsibilities between buyers and sellers.',
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
            'favorite'         => 'Favorite',
            'priority'         => '優先順序',
            'vendor-reference' => 'Vendor Reference',
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
            'vendor-reference' => 'Vendor Reference',
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
                        'title' => 'Order已刪除',
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
                    'vendor-reference'         => 'Vendor Reference',
                    'vendor-reference-tooltip' => 'The reference number of the sales order or bid provided by the vendor. It is used for matching when receiving products, as this reference is typically included in the vendor\'s delivery order.',
                    'agreement'                => 'Agreement',
                    'currency'                 => '幣別',
                    'confirmation-date'        => 'Confirmation日期',
                    'order-deadline'           => '訂單期限',
                    'expected-arrival'         => 'Expected Arrival',
                    'confirmed-by-vendor'      => 'Confirmed by Vendor',
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
                            'expected-arrival'    => 'Expected Arrival',
                            'quantity'            => '數量',
                            'received'            => 'Received',
                            'billed'              => 'Billed',
                            'unit'                => '單位',
                            'packaging-qty'       => 'Packaging Qty',
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
                    'incoterm-tooltip'  => 'International Commercial Terms (Incoterms) are a set of standardized trade terms used in global transactions to define responsibilities between buyers and sellers.',
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
