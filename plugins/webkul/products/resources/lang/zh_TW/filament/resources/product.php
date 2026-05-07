<?php

return [
    'global-search' => [
        'reference' => '參考',
        'barcode'   => 'Barcode',
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
                ],
            ],

            'images' => [
                'title' => '圖片',
            ],

            'inventory' => [
                'title' => '庫存',

                'fields' => [],

                'fieldsets' => [
                    'logistics' => [
                        'title' => 'Logistics',

                        'fields' => [
                            'weight' => 'Weight',
                            'volume' => 'Volume',
                        ],
                    ],
                ],
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
            'favorite'        => 'Favorite',
            'name'            => '名稱',
            'variants'        => 'Variants',
            'images'          => '圖片',
            'type'            => '類型',
            'reference'       => '參考',
            'responsible'     => 'Responsible',
            'barcode'         => 'Barcode',
            'category'        => '分類',
            'company'         => '公司',
            'price'           => '價格',
            'cost'            => '成本',
            'on-hand'         => 'On Hand',
            'tags'            => '標籤',
            'deleted-at'      => 'Deleted At',
            'created-at'      => '建立時間',
            'updated-at'      => '更新時間',
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
                    'success' => [
                        'title' => 'Product force deleted',
                        'body'  => 'The product has been force deleted成功.',
                    ],

                    'error' => [
                        'title' => 'Product could not be deleted',
                        'body'  => 'The product cannot be deleted because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'print' => [
                'label' => 'Print Labels',

                'form' => [
                    'fields' => [
                        'quantity' => 'Number of Labels',
                        'format'   => 'Format',

                        'format-options' => [
                            'dymo'       => 'Dymo',
                            '2x7_price'  => '2x7 with price',
                            '4x7_price'  => '4x7 with price',
                            '4x12'       => '4x12',
                            '4x12_price' => '4x12 with price',
                        ],
                    ],
                ],
            ],

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
                    'success' => [
                        'title' => 'Products force deleted',
                        'body'  => 'The products has been force deleted成功.',
                    ],

                    'error' => [
                        'title' => 'Products could not be deleted',
                        'body'  => 'The products cannot be deleted because they are currently in use.',
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

                'fieldsets' => [
                    'logistics' => [
                        'title' => 'Logistics',

                        'entries' => [
                            'weight' => 'Weight',
                            'volume' => 'Volume',
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
