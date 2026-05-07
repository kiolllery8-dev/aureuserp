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
                    'reference' => '參考編號',
                    'barcode'   => '條碼',
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
            'reference'   => '參考編號',
            'responsible' => '負責人',
            'barcode'     => '條碼',
            'category'    => '分類',
            'company'     => '公司',
            'price'       => '價格',
            'cost'        => '成本',
            'tags'        => '標籤',
            'deleted-at'  => '刪除時間',
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
            'reference'   => '參考編號',
            'barcode'     => '條碼',
            'category'    => '分類',
            'company'     => '公司',
            'price'       => '價格',
            'cost'        => '成本',
            'is-favorite' => 'Is Favorite',
            'weight'      => '重量',
            'volume'      => '體積',
            'tags'        => '標籤',
            'responsible' => '負責人',
            'created-at'  => '建立時間',
            'updated-at'  => '更新時間',
            'creator'     => '建立者',
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
                    'title' => 'Product已刪除',
                    'body'  => 'The product has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Product force已刪除',
                    'body'  => 'The product has been force已刪除成功.',
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
                    'title' => 'Products已刪除',
                    'body'  => 'The products has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Products force已刪除',
                    'body'  => 'The products has been force已刪除成功.',
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
                    'reference' => '參考編號',
                    'barcode'   => '條碼',
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
                            'expiration-date' => 'Expiration日期',
                        ],
                    ],

                    'operation' => [
                        'title' => '作業',

                        'entries' => [
                            'routes' => '路徑',
                        ],
                    ],

                    'logistics' => [
                        'title' => '物流',

                        'entries' => [
                            'responsible' => '負責人',
                            'weight'      => '重量',
                            'volume'      => '體積',
                            'sale-delay'  => 'Customer Lead時間 (Days)',
                        ],
                    ],

                    'traceability' => [
                        'title' => 'Traceability',

                        'entries' => [
                            'expiration-date'  => 'Expiration日期 (Days)',
                            'best-before-date' => 'Best Before日期 (Days)',
                            'removal-date'     => 'Removal日期 (Days)',
                            'alert-date'       => 'Alert日期 (Days)',
                        ],
                    ],
                ],
            ],

            'record-information' => [
                'title' => '紀錄資料',

                'entries' => [
                    'created-at' => '建立時間',
                    'created-by' => '建立者',
                    'updated-at' => '更新時間',
                ],
            ],
        ],
    ],
];
