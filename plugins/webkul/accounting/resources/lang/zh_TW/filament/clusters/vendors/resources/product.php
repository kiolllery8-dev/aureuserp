<?php

return [
    'navigation' => [
        'title' => '商品',
        'group' => '庫存',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => '一般',

                'fields' => [
                    'name'             => '名稱',
                    'name-placeholder' => 'eg. T-shirt',
                    'description'      => '描述',
                    'tags'             => '標籤',
                    'sales'            => '銷售',
                    'purchase'         => '採購',
                ],
            ],

            'invoice-policy' => [
                'title'            => 'Invoice Policy',
                'ordered-policy'   => 'You can invoice goods before they are delivered.',
                'delivered-policy' => 'Invoice after delivery, based on quantities delivered, not ordered.',
            ],

            'images' => [
                'title' => '圖片',
            ],

            'settings' => [
                'title' => '設定',

                'fields' => [
                    'type'      => '類型',
                    'reference' => '參考',
                    'barcode'   => 'Barcode',
                    'category'  => '分類',
                    'company'   => '公司',
                ],
            ],

            'category-and-tags' => [
                'title' => 'Category & Tags',

                'fields' => [
                    'category' => '分類',
                    'tags'     => '標籤',
                ],
            ],

            'pricing' => [
                'title' => 'Pricing',

                'fields' => [
                    'price' => '價格',
                    'cost'  => '成本',
                ],
            ],

            'additional' => [
                'title' => 'Additional',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'        => '名稱',
            'images'      => '圖片',
            'type'        => '類型',
            'reference'   => '參考',
            'responsible' => 'Responsible',
            'barcode'     => 'Barcode',
            'category'    => '分類',
            'company'     => '公司',
            'price'       => '價格',
            'cost'        => '成本',
            'tags'        => '標籤',
            'deleted-at'  => 'Deleted At',
            'created-at'  => '建立時間',
            'updated-at'  => '更新時間',
        ],

        'groups' => [
            'type'       => '類型',
            'category'   => '分類',
            'created-at' => '建立時間',
        ],

        'filters' => [
            'name'        => '名稱',
            'type'        => '類型',
            'reference'   => '參考',
            'barcode'     => 'Barcode',
            'category'    => '分類',
            'company'     => '公司',
            'price'       => '價格',
            'cost'        => '成本',
            'is-favorite' => 'Is Favorite',
            'weight'      => 'Weight',
            'volume'      => 'Volume',
            'tags'        => '標籤',
            'responsible' => 'Responsible',
            'created-at'  => '建立時間',
            'updated-at'  => '更新時間',
            'creator'     => 'Creator',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Product restored',
                    'body'  => 'The product has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Product deleted',
                    'body'  => 'The product has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Product force deleted',
                    'body'  => 'The product has been force deleted成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Products restored',
                    'body'  => 'The products has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Products deleted',
                    'body'  => 'The products has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Products force deleted',
                    'body'  => 'The products has been force deleted成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => '一般',

                'entries' => [
                    'name'             => '名稱',
                    'name-placeholder' => 'eg. T-shirt',
                    'description'      => '描述',
                    'tags'             => '標籤',
                ],
            ],

            'images' => [
                'title' => '圖片',

                'entries' => [],
            ],

            'settings' => [
                'title' => '設定',

                'entries' => [
                    'type'      => '類型',
                    'reference' => '參考',
                    'barcode'   => 'Barcode',
                    'category'  => '分類',
                    'company'   => '公司',
                ],
            ],

            'pricing' => [
                'title' => 'Pricing',

                'entries' => [
                    'price' => '價格',
                    'cost'  => '成本',
                ],
            ],

            'inventory' => [
                'title' => '庫存',

                'entries' => [],

                'fieldsets' => [
                    'tracking' => [
                        'title' => 'Tracking',

                        'entries' => [
                            'track-inventory' => 'Track Inventory',
                            'track-by'        => 'Track By',
                            'expiration-date' => 'Expiration Date',
                        ],
                    ],

                    'operation' => [
                        'title' => '作業',

                        'entries' => [
                            'routes' => '路徑',
                        ],
                    ],

                    'logistics' => [
                        'title' => 'Logistics',

                        'entries' => [
                            'responsible' => 'Responsible',
                            'weight'      => 'Weight',
                            'volume'      => 'Volume',
                            'sale-delay'  => 'Customer Lead Time (Days)',
                        ],
                    ],

                    'traceability' => [
                        'title' => 'Traceability',

                        'entries' => [
                            'expiration-date'  => 'Expiration Date (Days)',
                            'best-before-date' => 'Best Before Date (Days)',
                            'removal-date'     => 'Removal Date (Days)',
                            'alert-date'       => 'Alert Date (Days)',
                        ],
                    ],
                ],
            ],

            'record-information' => [
                'title' => 'Record Information',

                'entries' => [
                    'created-at' => '建立時間',
                    'created-by' => '建立者',
                    'updated-at' => '更新時間',
                ],
            ],
        ],
    ],
];
