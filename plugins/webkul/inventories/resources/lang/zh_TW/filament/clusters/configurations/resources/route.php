<?php

return [
    'navigation' => [
        'title' => '路徑',
        'group' => 'Warehouse Management',
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
                'description' => 'Choose the locations where this route can be applied.',

                'fields' => [
                    'products'                        => '商品',
                    'products-hint-tooltip'           => 'If selected, this route will be available for selection on the product.',
                    'product-categories'              => 'Product Categories',
                    'product-categories-hint-tooltip' => 'If selected, this route will be available for selection on the product category.',
                    'warehouses'                      => '倉庫',
                    'warehouses-hint-tooltip'         => 'When a warehouse is assigned to this route, it will be considered the default route for products moving through that warehouse.',
                    'packaging'                       => '包裝',
                    'packaging-hint-tooltip'          => 'If selected, this route will be available for selection on the packaging.',
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
                    'title' => 'Route restored',
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
                    'title' => 'Routes restored',
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
                'description' => 'Select the places where this route can be selected.',

                'entries' => [
                    'products'                        => '商品',
                    'products-hint-tooltip'           => 'If selected, this route will be available for selection on the product.',
                    'product-categories'              => 'Product Categories',
                    'product-categories-hint-tooltip' => 'If selected, this route will be available for selection on the product category.',
                    'warehouses'                      => '倉庫',
                    'warehouses-hint-tooltip'         => 'When a warehouse is assigned to this route, it will be considered the default route for products moving through that warehouse.',
                    'packaging'                       => '包裝',
                    'packaging-hint-tooltip'          => 'If selected, this route will be available for selection on the packaging.',
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
