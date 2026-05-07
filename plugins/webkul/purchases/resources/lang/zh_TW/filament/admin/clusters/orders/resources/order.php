<?php

return [
    'global-search' => [
        'vendor'    => '供應商',
        'reference' => '參考',
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
                    'confirmation-date'        => 'Confirmation Date',
                    'order-deadline'           => 'Order Deadline',
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
                        'add-product-line' => 'Add Product',

                        'fields' => [
                            'product'             => '商品',
                            'expected-arrival'    => 'Expected Arrival',
                            'quantity'            => '數量',
                            'received'            => 'Received',
                            'billed'              => 'Billed',
                            'unit'                => 'Unit',
                            'packaging-qty'       => 'Packaging Qty',
                            'packaging'           => 'Packaging',
                            'taxes'               => '稅',
                            'discount-percentage' => 'Discount (%)',
                            'unit-price'          => '單價',
                            'amount'              => '金額',
                        ],

                        'notifications' => [
                            'quantity-below-received' => [
                                'title' => 'Cannot Reduce Quantity',
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
                            'unit'                => 'Unit',
                            'packaging-qty'       => 'Packaging Qty',
                            'packaging'           => 'Packaging',
                            'taxes'               => '稅',
                            'discount-percentage' => 'Discount (%)',
                            'unit-price'          => '單價',
                            'amount'              => '金額',
                        ],

                        'delete-action' => [
                            'error' => [
                                'title' => 'Cannot 刪除Product',
                                'body'  => 'Products cannot be deleted from a confirmed purchase order.',
                            ],
                        ],
                    ],

                    'section' => [
                        'title' => 'Add Section',

                        'fields' => [],
                    ],

                    'note' => [
                        'title' => 'Add Note',

                        'fields' => [],
                    ],
                ],
            ],

            'additional' => [
                'title' => 'Additional Information',

                'fields' => [
                    'buyer'             => 'Buyer',
                    'company'           => '公司',
                    'source-document'   => 'Source Document',
                    'incoterm'          => 'Incoterm',
                    'incoterm-tooltip'  => 'International Commercial Terms (Incoterms) are a set of standardized trade terms used in global transactions to define responsibilities between buyers and sellers.',
                    'incoterm-location' => 'Incoterm Location',
                    'payment-term'      => 'Payment Term',
                    'fiscal-position'   => '財務立場',
                ],
            ],

            'terms' => [
                'title' => 'Terms and Conditions',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'favorite'         => 'Favorite',
            'priority'         => '優先順序',
            'vendor-reference' => 'Vendor Reference',
            'reference'        => '參考',
            'vendor'           => '供應商',
            'buyer'            => 'Buyer',
            'company'          => '公司',
            'order-deadline'   => 'Order Deadline',
            'source-document'  => 'Source Document',
            'untaxed-amount'   => 'Untaxed Amount',
            'total-amount'     => 'Total Amount',
            'status'           => '狀態',
            'billing-status'   => 'Billing Status',
            'currency'         => '幣別',
        ],

        'groups' => [
            'vendor'     => '供應商',
            'buyer'      => 'Buyer',
            'state'      => '狀態',
            'created-at' => '建立時間',
            'updated-at' => '更新時間',
        ],

        'filters' => [
            'status'           => '狀態',
            'vendor-reference' => 'Vendor Reference',
            'reference'        => '參考',
            'untaxed-amount'   => 'Untaxed Amount',
            'total-amount'     => 'Total Amount',
            'order-deadline'   => 'Order Deadline',
            'vendor'           => '供應商',
            'buyer'            => 'Buyer',
            'company'          => '公司',
            'payment-term'     => 'Payment Term',
            'incoterm'         => 'Incoterm',
            'status'           => '狀態',
            'created-at'       => '建立時間',
            'updated-at'       => '更新時間',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Order deleted',
                        'body'  => 'The order has been deleted成功.',
                    ],

                    'error' => [
                        'title' => 'Order could not be deleted',
                        'body'  => 'The order cannot be deleted because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Orders deleted',
                        'body'  => 'The orders has been deleted成功.',
                    ],

                    'error' => [
                        'title' => 'Orders could not be deleted',
                        'body'  => 'The orders cannot be deleted because they are currently in use.',
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
                    'confirmation-date'        => 'Confirmation Date',
                    'order-deadline'           => 'Order Deadline',
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
                        'add-product-line' => 'Add Product',

                        'entries' => [
                            'product'             => '商品',
                            'expected-arrival'    => 'Expected Arrival',
                            'quantity'            => '數量',
                            'received'            => 'Received',
                            'billed'              => 'Billed',
                            'unit'                => 'Unit',
                            'packaging-qty'       => 'Packaging Qty',
                            'packaging'           => 'Packaging',
                            'taxes'               => '稅',
                            'discount-percentage' => 'Discount (%)',
                            'unit-price'          => '單價',
                            'amount'              => '金額',
                        ],
                    ],

                    'section' => [
                        'title' => 'Add Section',
                    ],

                    'note' => [
                        'title' => 'Add Note',
                    ],
                ],
            ],

            'additional' => [
                'title' => 'Additional Information',

                'entries' => [
                    'buyer'             => 'Buyer',
                    'company'           => '公司',
                    'source-document'   => 'Source Document',
                    'incoterm'          => 'Incoterm',
                    'incoterm-tooltip'  => 'International Commercial Terms (Incoterms) are a set of standardized trade terms used in global transactions to define responsibilities between buyers and sellers.',
                    'incoterm-location' => 'Incoterm Location',
                    'payment-term'      => 'Payment Term',
                    'fiscal-position'   => '財務立場',
                ],
            ],

            'terms' => [
                'title' => 'Terms and Conditions',
            ],
        ],
    ],
];
