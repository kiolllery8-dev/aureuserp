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
                    'route-placeholder' => 'eg. Two Step Reception',
                    'company'           => '公司',
                ],
            ],

            'applicable-on' => [
                'title'       => 'Applicable On',
                'description' => 'Choose the locations where this route can be applied.',

                'fields' => [
                    'products'                        => '商品',
                    'products-hint-tooltip'           => 'If selected, this route will be available for selection on the product.',
                    'product-categories'              => 'Product Categories',
                    'product-categories-hint-tooltip' => 'If selected, this route will be available for selection on the product category.',
                    'warehouses'                      => '倉庫',
                    'warehouses-hint-tooltip'         => 'When a warehouse is assigned to this route, it will be considered the default route for products moving through that warehouse.',
                    'packaging'                       => 'Packaging',
                    'packaging-hint-tooltip'          => 'If selected, this route will be available for selection on the packaging.',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'route'      => '路徑',
            'company'    => '公司',
            'deleted-at' => 'Deleted At',
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
                    'title' => 'Route updated',
                    'body'  => 'The route has been updated成功.',
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
                    'title' => 'Route deleted',
                    'body'  => 'The route has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Route force deleted',
                        'body'  => 'The route has been force deleted成功.',
                    ],

                    'error' => [
                        'title' => 'Route could not be deleted',
                        'body'  => 'The route cannot be deleted because it is currently in use.',
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
                    'title' => 'Routes deleted',
                    'body'  => 'The routes has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Routes force deleted',
                        'body'  => 'The routes has been force deleted成功.',
                    ],

                    'error' => [
                        'title' => 'Routes could not be deleted',
                        'body'  => 'The routes cannot be deleted because they are currently in use.',
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
                    'route-placeholder' => 'eg. Two Step Reception',
                    'company'           => '公司',
                ],
            ],

            'applicable-on' => [
                'title'       => 'Applicable On',
                'description' => 'Select the places where this route can be selected.',

                'entries' => [
                    'products'                        => '商品',
                    'products-hint-tooltip'           => 'If selected, this route will be available for selection on the product.',
                    'product-categories'              => 'Product Categories',
                    'product-categories-hint-tooltip' => 'If selected, this route will be available for selection on the product category.',
                    'warehouses'                      => '倉庫',
                    'warehouses-hint-tooltip'         => 'When a warehouse is assigned to this route, it will be considered the default route for products moving through that warehouse.',
                    'packaging'                       => 'Packaging',
                    'packaging-hint-tooltip'          => 'If selected, this route will be available for selection on the packaging.',
                ],
            ],

            'record-information' => [
                'title' => 'Record Information',

                'entries' => [
                    'created-by'   => '建立者',
                    'created-at'   => '建立時間',
                    'last-updated' => 'Last Updated',
                ],
            ],
        ],
    ],
];
