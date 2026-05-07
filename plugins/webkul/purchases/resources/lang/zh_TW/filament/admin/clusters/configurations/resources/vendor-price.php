<?php

return [
    'navigation' => [
        'title' => 'Vendor價格列表s',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => '一般',

                'fields' => [
                    'vendor'                      => '供應商',
                    'vendor-product-name'         => 'Vendor Product名稱',
                    'vendor-product-name-tooltip' => '供應商商品名稱會出現在報價邀請上，留空則用內部商品名稱。',
                    'vendor-product-code'         => 'Vendor Product代碼',
                    'vendor-product-code-tooltip' => '供應商商品代碼會出現在報價邀請上，留空則用內部代碼。',
                    'delay'                       => 'Delivery Lead時間 (Days)',
                    'delay-tooltip'               => '從採購訂單確認到倉庫收到商品的前置時間（天），排程器用此自動規劃採購。',
                ],
            ],

            'prices' => [
                'title'  => '價格',

                'fields' => [
                    'product'            => '商品',
                    'quantity'           => '數量',
                    'quantity-tooltip'   => '向此供應商採購要享有指定價格的最低數量。以供應商的商品單位表示，未設定則用商品預設單位。',
                    'unit-price'         => '單價',
                    'unit-price-tooltip' => '此商品向此供應商採購的單位價格。以供應商的商品單位表示，未設定則用商品預設單位。',
                    'currency'           => '幣別',
                    'valid-from'         => '有效起',
                    'valid-to'           => '有效迄',
                    'discount'           => '折扣 (%)',
                    'company'            => '公司',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'vendor'              => '供應商',
            'vendor-product-name' => 'Vendor Product名稱',
            'vendor-product-code' => 'Vendor Product代碼',
            'delay'               => 'Delivery Lead時間 (Days)',
            'product'             => '商品',
            'quantity'            => '數量',
            'unit-price'          => '單價',
            'currency'            => '幣別',
            'valid-from'          => '有效起',
            'valid-to'            => '有效迄',
            'discount'            => '折扣 (%)',
            'company'             => '公司',
            'created-at'          => '建立時間',
            'updated-at'          => '更新時間',
        ],

        'filters' => [
            'vendor'        => '依供應商篩選',
            'product'       => '依商品篩選',
            'currency'      => '依幣別篩選',
            'company'       => '依公司篩選',
            'price-from'    => 'Minimum價格',
            'price-to'      => 'Maximum價格',
            'min-qty-from'  => 'Minimum數量 From',
            'min-qty-to'    => 'Minimum數量 To',
            'starts-from'   => 'Valid From日期',
            'ends-before'   => 'Valid To日期',
            'created-from'  => '建立自',
            'created-until' => '建立至',
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
                        'title' => 'Vendor價格已刪除',
                        'body'  => 'The vendor price has been已刪除成功.',
                    ],

                    'error' => [
                        'title' => 'Vendor價格 could not be已刪除',
                        'body'  => 'The vendor price cannot be已刪除 because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Vendor價格s已刪除',
                        'body'  => 'The vendor prices has been已刪除成功.',
                    ],

                    'error' => [
                        'title' => 'Vendor價格s could not be已刪除',
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
                    'vendor-product-name'         => 'Vendor Product名稱',
                    'vendor-product-name-tooltip' => '供應商商品名稱會出現在報價邀請上，留空則用內部商品名稱。',
                    'vendor-product-code'         => 'Vendor Product代碼',
                    'vendor-product-code-tooltip' => '供應商商品代碼會出現在報價邀請上，留空則用內部代碼。',
                    'delay'                       => 'Delivery Lead時間 (Days)',
                    'delay-tooltip'               => '從採購訂單確認到倉庫收到商品的前置時間（天），排程器用此自動規劃採購。',
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
                    'quantity-tooltip'   => '向此供應商採購要享有指定價格的最低數量。以供應商的商品單位表示，未設定則用商品預設單位。',
                    'unit-price'         => '單價',
                    'unit-price-tooltip' => '此商品向此供應商採購的單位價格。以供應商的商品單位表示，未設定則用商品預設單位。',
                    'currency'           => '幣別',
                    'valid-from'         => '有效起',
                    'valid-to'           => '有效迄',
                    'discount'           => '折扣 (%)',
                    'company'            => '公司',
                ],
            ],
        ],
    ],
];
