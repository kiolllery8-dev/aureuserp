<?php

return [
    'title' => '報價單',

    'navigation' => [
        'title' => '報價單',
    ],

    'global-search' => [
        'customer'  => '客戶',
        'reference' => '參考',
        'amount'    => '金額',
    ],

    'form' => [
        'section' => [
            'general' => [
                'title'  => '一般',
                'fields' => [
                    'customer'       => '客戶',
                    'expiration'     => 'Expiration',
                    'quotation-date' => 'Quotation Date',
                    'order-date'     => 'Order Date',
                    'payment-term'   => 'Payment Term',
                ],
            ],
        ],

        'tabs' => [
            'order-line' => [
                'title' => 'Order Line',

                'repeater' => [
                    'products' => [
                        'title'       => '商品',
                        'add-product' => 'Add Product',

                        'columns'     => [
                            'product'             => '商品',
                            'product-variants'    => 'Product Variants',
                            'product-simple'      => 'Product Simple',
                            'quantity'            => '數量',
                            'uom'                 => '計量單位',
                            'lead-time'           => 'Lead Time',
                            'qty-delivered'       => 'Delivered',
                            'qty-invoiced'        => 'Invoiced',
                            'packaging-qty'       => 'Packaging Quantity',
                            'packaging'           => 'Packaging',
                            'unit-price'          => '單價',
                            'cost'                => '成本',
                            'margin'              => 'Margin',
                            'taxes'               => '稅',
                            'amount'              => '金額',
                            'margin-percentage'   => 'Margin (%)',
                            'discount-percentage' => 'Discount (%)',
                        ],

                        'fields'      => [
                            'product'             => '商品',
                            'product-variants'    => 'Product Variants',
                            'product-simple'      => 'Product Simple',
                            'quantity'            => '數量',
                            'uom'                 => '計量單位',
                            'lead-time'           => 'Lead Time',
                            'qty-delivered'       => 'Quantity Delivered',
                            'qty-invoiced'        => 'Quantity Invoiced',
                            'packaging-qty'       => 'Packaging Quantity',
                            'packaging'           => 'Packaging',
                            'unit-price'          => '單價',
                            'cost'                => '成本',
                            'margin'              => 'Margin',
                            'taxes'               => '稅',
                            'amount'              => '金額',
                            'margin-percentage'   => 'Margin (%)',
                            'discount-percentage' => 'Discount (%)',
                        ],

                        'notifications' => [
                            'quantity-below-delivered' => [
                                'title' => 'Cannot Reduce Quantity',
                                'body'  => 'You cannot reduce the quantity below the delivered quantity (:qty).',
                            ],
                        ],

                        'delete-action' => [
                            'error' => [
                                'title' => 'Cannot 刪除Product',
                                'body'  => 'Products cannot be deleted from a confirmed sales order.',
                            ],
                        ],
                    ],

                    'product-optional' => [
                        'title'       => 'Optional Products',
                        'add-product' => 'Add Product',

                        'columns' => [
                            'product'             => '商品',
                            'description'         => '描述',
                            'quantity'            => '數量',
                            'uom'                 => '計量單位',
                            'unit-price'          => '單價',
                            'discount-percentage' => 'Discount (%)',
                        ],

                        'fields'      => [
                            'product'             => '商品',
                            'description'         => '描述',
                            'quantity'            => '數量',
                            'uom'                 => '計量單位',
                            'unit-price'          => '單價',
                            'discount-percentage' => 'Discount (%)',

                            'actions' => [
                                'tooltip' => [
                                    'add-order-line' => 'Add Order Line',
                                ],

                                'notifications' => [
                                    'product-added' => [
                                        'title' => 'Product added',
                                        'body'  => 'The product has been added成功.',
                                    ],

                                    'product-not-found' => [
                                        'title' => 'Product Not Found',
                                    ],

                                    'product-already-exists' => [
                                        'title' => 'Product Already Exists',
                                        'body'  => 'This product is already in the order lines. Please update the existing line instead.',
                                    ],

                                    'missing-product-data' => [
                                        'title' => 'Missing Product Data',
                                        'body'  => 'Unable to process the selected product.',
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
                            'sales-person'       => 'Sales Person',
                            'customer-reference' => 'Customer Reference',
                            'tags'               => '標籤',
                        ],
                    ],

                    'shipping' => [
                        'title'  => 'Shipping',
                        'fields' => [
                            'commitment-date' => 'Delivery Date',
                        ],
                    ],

                    'tracking' => [
                        'title'  => 'Tracking',
                        'fields' => [
                            'source-document' => 'Source Document',
                            'medium'          => '中',
                            'source'          => 'Source',
                            'campaign'        => 'Campaign',
                        ],
                    ],

                    'additional-information' => [
                        'title' => 'Additional Information',

                        'fields' => [
                            'company'  => '公司',
                            'currency' => '幣別',
                        ],
                    ],
                ],
            ],

            'term-and-conditions' => [
                'title' => 'Terms & Conditions',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'number'             => 'Number',
            'status'             => '狀態',
            'invoice-status'     => 'Invoice Status',
            'creation-date'      => 'Creation Date',
            'commitment-date'    => 'Commitment Date',
            'expected-date'      => 'Expected Date',
            'customer'           => '客戶',
            'sales-person'       => 'Sales Person',
            'sales-team'         => 'Sales Team',
            'untaxed-amount'     => 'Untaxed Amount',
            'amount-tax'         => 'Amount Tax',
            'amount-total'       => 'Amount Total',
            'customer-reference' => 'Customer Reference',
        ],

        'filters' => [
            'sales-person'     => 'Sales Person',
            'utm-source'       => 'UTM Source',
            'company'          => '公司',
            'customer'         => '客戶',
            'journal'          => '日記帳',
            'invoice-address'  => 'Invoice Address',
            'shipping-address' => 'Shipping Address',
            'fiscal-position'  => '財務立場',
            'payment-term'     => 'Payment Term',
            'currency'         => '幣別',
            'created-at'       => '建立時間',
            'updated-at'       => '更新時間',
        ],

        'groups' => [
            'medium'          => '中',
            'source'          => 'Source',
            'team'            => 'Team',
            'sales-person'    => 'Sales Person',
            'currency'        => '幣別',
            'company'         => '公司',
            'customer'        => '客戶',
            'quotation-date'  => 'Quotation Date',
            'commitment-date' => 'Commitment Date',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Quotation restored',
                    'body'  => 'The quotation has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Quotation deleted',
                    'body'  => 'The quotation has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Quotation force deleted',
                    'body'  => 'The quotation has been force deleted成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Quotations restored',
                    'body'  => 'The quotations has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Quotations deleted',
                    'body'  => 'The quotations has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Quotations force deleted',
                    'body'  => 'The quotations has been force deleted成功.',
                ],
            ],
        ],

        'empty-state-action' => [
            'create' => [
                'notification' => [
                    'title' => 'Quotations created',
                    'body'  => 'The quotations has been created成功.',
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
                    'expiration'     => 'Expiration',
                    'quotation-date' => 'Quotation Date',
                    'payment-term'   => 'Payment Term',
                ],
            ],
        ],

        'tabs' => [
            'order-line' => [
                'title' => 'Order Line',

                'repeater' => [
                    'products' => [
                        'title'       => '商品',
                        'add-product' => 'Add Product',
                        'entries'     => [
                            'product'             => '商品',
                            'product-variants'    => 'Product Variants',
                            'product-simple'      => 'Product Simple',
                            'quantity'            => '數量',
                            'uom'                 => '計量單位',
                            'lead-time'           => 'Lead Time',
                            'packaging-qty'       => 'Packaging Quantity',
                            'packaging'           => 'Packaging',
                            'unit-price'          => '單價',
                            'cost'                => '成本',
                            'margin'              => 'Margin',
                            'taxes'               => '稅',
                            'amount'              => '金額',
                            'margin-percentage'   => 'Margin (%)',
                            'discount-percentage' => 'Discount (%)',
                            'sub-total'           => 'Sub Total',
                        ],
                    ],

                    'product-optional' => [
                        'title'       => 'Optional Products',
                        'add-product' => 'Add Product',
                        'entries'     => [
                            'product'             => '商品',
                            'description'         => '描述',
                            'quantity'            => '數量',
                            'uom'                 => '計量單位',
                            'unit-price'          => '單價',
                            'discount-percentage' => 'Discount (%)',
                            'sub-total'           => 'Sub Total',

                            'actions' => [
                                'tooltip' => [
                                    'add-order-line' => 'Add Order Line',
                                ],

                                'notifications' => [
                                    'product-added' => [
                                        'title' => 'Product added',
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
                            'sales-person'       => 'Sales Person',
                            'customer-reference' => 'Customer Reference',
                            'tags'               => '標籤',
                        ],
                    ],

                    'shipping' => [
                        'title'   => 'Shipping',
                        'entries' => [
                            'commitment-date' => 'Delivery Date',
                        ],
                    ],

                    'tracking' => [
                        'title'   => 'Tracking',
                        'entries' => [
                            'source-document' => 'Source Document',
                            'medium'          => '中',
                            'source'          => 'Source',
                            'campaign'        => 'Campaign',
                        ],
                    ],

                    'additional-information' => [
                        'title' => 'Additional Information',

                        'entries' => [
                            'company'  => '公司',
                            'currency' => '幣別',
                        ],
                    ],
                ],
            ],

            'term-and-conditions' => [
                'title' => 'Terms & Conditions',
            ],
        ],
    ],
];
