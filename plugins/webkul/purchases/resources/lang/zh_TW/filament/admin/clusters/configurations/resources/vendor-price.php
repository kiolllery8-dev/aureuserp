<?php

return [
    'navigation' => [
        'title' => '供應商價格列表s',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => '一般',

                'fields' => [
                    'vendor'                      => '供應商',
                    'vendor-product-name'         => '供應商 商品名稱',
                    'vendor-product-name-tooltip' => 'The vendor\'s product name will appear on the request for quotation. Leave it blank to use the internal product name.',
                    'vendor-product-code'         => '供應商 商品代碼',
                    'vendor-product-code-tooltip' => 'The vendor\'s product code will appear on the request for quotation. Leave it blank to use the internal code.',
                    'delay'                       => '出貨 商機時間 (天數)',
                    'delay-tooltip'               => 'The lead time (in days) from purchase order confirmation to product receipt in the warehouse. Used by the scheduler for automatic purchase order planning.',
                ],
            ],

            'prices' => [
                'title'  => '價格',

                'fields' => [
                    'product'            => '商品',
                    'quantity'           => '數量',
                    'quantity-tooltip'   => 'The minimum quantity required to purchase from this vendor to qualify for the specified price. This is expressed in the vendor\'s 商品 單位 of Measure or, if not set, the product\'s default unit of measure.',
                    'unit-price'         => '單價',
                    'unit-price-tooltip' => 'The price per unit for this product from the vendor, expressed in the vendor’s 商品 單位 of Measure or, if not set, the product\'s default unit of measure.',
                    'currency'           => '幣別',
                    'valid-from'         => 'Valid From',
                    'valid-to'           => 'Valid Until',
                    'discount'           => '折扣 (%)',
                    'company'            => '公司',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'vendor'              => '供應商',
            'vendor-product-name' => '供應商 商品名稱',
            'vendor-product-code' => '供應商 商品代碼',
            'delay'               => '出貨 商機時間 (天數)',
            'product'             => '商品',
            'quantity'            => '數量',
            'unit-price'          => '單價',
            'currency'            => '幣別',
            'valid-from'          => 'Valid From',
            'valid-to'            => 'Valid Until',
            'discount'            => '折扣 (%)',
            'company'             => '公司',
            'created-at'          => '建立時間',
            'updated-at'          => '更新時間',
        ],

        'filters' => [
            'vendor'        => 'Filter by 供應商',
            'product'       => 'Filter by 商品',
            'currency'      => 'Filter by 幣別',
            'company'       => 'Filter by 公司',
            'price-from'    => 'Minimum價格',
            'price-to'      => 'Maximum價格',
            'min-qty-from'  => 'Minimum數量 From',
            'min-qty-to'    => 'Minimum數量 To',
            'starts-from'   => 'Valid From日期',
            'ends-before'   => 'Valid To日期',
            'created-from'  => 'Created From',
            'created-until' => 'Created Until',
        ],

        'groups' => [
            'vendor'     => '供應商',
            'product'    => '商品',
            'created-at' => '建立時間',
            'updated-at' => '更新時間',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => '供應商價格已刪除',
                        'body'  => 'The vendor price has been已刪除成功.',
                    ],

                    'error' => [
                        'title' => '供應商價格 could not be已刪除',
                        'body'  => 'The vendor price cannot be已刪除 because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => '供應商價格s已刪除',
                        'body'  => 'The vendor prices has been已刪除成功.',
                    ],

                    'error' => [
                        'title' => '供應商價格s could not be已刪除',
                        'body'  => 'The vendor prices cannot be已刪除 because they are currently in use.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title'  => '一般',

                'entries' => [
                    'vendor'                      => '供應商',
                    'vendor-product-name'         => '供應商 商品名稱',
                    'vendor-product-name-tooltip' => 'The vendor\'s product name will appear on the request for quotation. Leave it blank to use the internal product name.',
                    'vendor-product-code'         => '供應商 商品代碼',
                    'vendor-product-code-tooltip' => 'The vendor\'s product code will appear on the request for quotation. Leave it blank to use the internal code.',
                    'delay'                       => '出貨 商機時間 (天數)',
                    'delay-tooltip'               => 'The lead time (in days) from purchase order confirmation to product receipt in the warehouse. Used by the scheduler for automatic purchase order planning.',
                ],
            ],

            'record-information' => [
                'title'  => '紀錄資料',

                'entries' => [
                    'created-by'   => '建立者',
                    'created-at'   => '建立時間',
                    'last-updated' => '最後更新',
                ],
            ],

            'prices' => [
                'title'  => '價格',

                'entries' => [
                    'product'            => '商品',
                    'quantity'           => '數量',
                    'quantity-tooltip'   => 'The minimum quantity required to purchase from this vendor to qualify for the specified price. This is expressed in the vendor\'s 商品 單位 of Measure or, if not set, the product\'s default unit of measure.',
                    'unit-price'         => '單價',
                    'unit-price-tooltip' => 'The price per unit for this product from the vendor, expressed in the vendor’s 商品 單位 of Measure or, if not set, the product\'s default unit of measure.',
                    'currency'           => '幣別',
                    'valid-from'         => 'Valid From',
                    'valid-to'           => 'Valid Until',
                    'discount'           => '折扣 (%)',
                    'company'            => '公司',
                ],
            ],
        ],
    ],
];
