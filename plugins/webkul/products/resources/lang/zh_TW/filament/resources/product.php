<?php

return [
    'global-search' => [
        'reference' => '參考編號',
        'barcode'   => '條碼',
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
                        'title' => '物流',

                        'fields' => [
                            'weight' => '重量',
                            'volume' => '體積',
                        ],
                    ],
                ],
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
            'favorite'        => '最愛',
            'name'            => '名稱',
            'variants'        => '規格',
            'images'          => '圖片',
            'type'            => '類型',
            'reference'       => '參考編號',
            'responsible'     => '負責人',
            'barcode'         => '條碼',
            'category'        => '分類',
            'company'         => '公司',
            'price'           => '價格',
            'cost'            => '成本',
            'on-hand'         => '現有',
            'tags'            => '標籤',
            'deleted-at'      => '刪除時間',
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
            'reference'   => '參考編號',
            'barcode'     => '條碼',
            'category'    => '分類',
            'company'     => '公司',
            'price'       => '價格',
            'cost'        => '成本',
            'is-favorite' => 'Is 最愛',
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
                    'title' => '商品 restored',
                    'body'  => 'The product has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => '商品已刪除',
                    'body'  => 'The product has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => '商品 force已刪除',
                        'body'  => 'The product has been force已刪除成功.',
                    ],

                    'error' => [
                        'title' => '商品 could not be已刪除',
                        'body'  => 'The product cannot be已刪除 because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'print' => [
                'label' => 'Print Labels',

                'form' => [
                    'fields' => [
                        'quantity' => '編號 of Labels',
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
                    'title' => '商品 restored',
                    'body'  => 'The products has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => '商品已刪除',
                    'body'  => 'The products has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => '商品 force已刪除',
                        'body'  => 'The products has been force已刪除成功.',
                    ],

                    'error' => [
                        'title' => '商品 could not be已刪除',
                        'body'  => 'The products cannot be已刪除 because they are currently in use.',
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

                'fieldsets' => [
                    'logistics' => [
                        'title' => '物流',

                        'entries' => [
                            'weight' => '重量',
                            'volume' => '體積',
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
