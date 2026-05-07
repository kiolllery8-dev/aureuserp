<?php

return [
    'navigation' => [
        'title' => '路徑',
        'group' => '倉庫管理',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => '一般',

                'fields' => [
                    'route'             => '路徑',
                    'route-placeholder' => '例：二步收貨',
                    'company'           => '公司',
                ],
            ],

            'applicable-on' => [
                'title'       => '適用於',
                'description' => '選擇此路線可套用的位置。',

                'fields' => [
                    'products'                        => '商品',
                    'products-hint-tooltip'           => '啟用後，此路線可在商品上選擇。',
                    'product-categories'              => '商品分類',
                    'product-categories-hint-tooltip' => '啟用後，此路線可在商品分類上選擇。',
                    'warehouses'                      => '倉庫',
                    'warehouses-hint-tooltip'         => '倉庫指派此路線後，會作為該倉庫商品移動的預設路線。',
                    'packaging'                       => '包裝',
                    'packaging-hint-tooltip'          => '啟用後，此路線可在包裝上選擇。',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'route'      => '路徑',
            'company'    => '公司',
            'deleted-at' => '刪除時間',
            'created-at' => '建立時間',
            'updated-at' => '更新時間',
        ],

        'groups' => [
            'created-at' => '建立時間',
            'updated-at' => '更新時間',
        ],

        'filters' => [
            'company'  => '公司',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Route已更新',
                    'body'  => 'The route has been已更新成功.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => '路線已還原',
                    'body'  => 'The route has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Route已刪除',
                    'body'  => 'The route has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Route force已刪除',
                        'body'  => 'The route has been force已刪除成功.',
                    ],

                    'error' => [
                        'title' => 'Route could not be已刪除',
                        'body'  => 'The route cannot be已刪除 because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => '路線已還原',
                    'body'  => 'The routes has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Routes已刪除',
                    'body'  => 'The routes has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Routes force已刪除',
                        'body'  => 'The routes has been force已刪除成功.',
                    ],

                    'error' => [
                        'title' => 'Routes could not be已刪除',
                        'body'  => 'The routes cannot be已刪除 because they are currently in use.',
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
                    'route'             => '路徑',
                    'route-placeholder' => '例：二步收貨',
                    'company'           => '公司',
                ],
            ],

            'applicable-on' => [
                'title'       => '適用於',
                'description' => '選擇此路線可使用的地方。',

                'entries' => [
                    'products'                        => '商品',
                    'products-hint-tooltip'           => '啟用後，此路線可在商品上選擇。',
                    'product-categories'              => '商品分類',
                    'product-categories-hint-tooltip' => '啟用後，此路線可在商品分類上選擇。',
                    'warehouses'                      => '倉庫',
                    'warehouses-hint-tooltip'         => '倉庫指派此路線後，會作為該倉庫商品移動的預設路線。',
                    'packaging'                       => '包裝',
                    'packaging-hint-tooltip'          => '啟用後，此路線可在包裝上選擇。',
                ],
            ],

            'record-information' => [
                'title' => '紀錄資料',

                'entries' => [
                    'created-by'   => '建立者',
                    'created-at'   => '建立時間',
                    'last-updated' => '最後更新',
                ],
            ],
        ],
    ],
];
