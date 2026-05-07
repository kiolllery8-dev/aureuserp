<?php

return [
    'navigation' => [
        'title' => '倉庫',
        'group' => 'Warehouse Management',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => '一般',
                'fields' => [
                    'name'               => '名稱',
                    'name-placeholder'   => 'eg. Central Warehouse',
                    'code'               => 'Short名稱',
                    'code-placeholder'   => 'eg. CW',
                    'code-hint-tooltip'  => 'The short name serves as an identifier for the warehouse.',
                    'company'            => '公司',
                    'address'            => '地址',
                ],
            ],

            'settings' => [
                'title'  => '設定',

                'fields' => [
                    'shipment-management'              => 'Shipment Management',
                    'incoming-shipments'               => 'Incoming Shipments',
                    'incoming-shipments-hint-tooltip'  => 'Default incoming route to follow',
                    'outgoing-shipments'               => 'Outgoing Shipments',
                    'outgoing-shipments-hint-tooltip'  => 'Default outgoing route to follow',
                    'resupply-management'              => 'Resupply Management',
                    'resupply-management-hint-tooltip' => 'Routes will be automatically generated to resupply this warehouse from the selected warehouses.',
                    'resupply-from'                    => 'Resupply From',
                ],
            ],

            'additional' => [
                'title'  => '其他資料',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => '名稱',
            'code'       => 'Short名稱',
            'company'    => '公司',
            'address'    => '地址',
            'deleted-at' => '刪除時間',
            'created-at' => '建立時間',
            'updated-at' => '更新時間',
        ],

        'groups' => [
            'address'       => '地址',
            'company'       => '公司',
            'created-at'    => '建立時間',
            'updated-at'    => '更新時間',
        ],

        'filters' => [
            'company' => '公司',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Warehouse restored',
                    'body'  => 'The warehouse has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Warehouse已刪除',
                    'body'  => 'The warehouse has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Warehouse force已刪除',
                        'body'  => 'The warehouse has been force已刪除成功.',
                    ],

                    'error' => [
                        'title' => 'Warehouse could not be已刪除',
                        'body'  => 'The warehouse cannot be已刪除 because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Warehouses restored',
                    'body'  => 'The warehouses has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Warehouses已刪除',
                    'body'  => 'The warehouses has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Warehouses force已刪除',
                        'body'  => 'The warehouses has been force已刪除成功.',
                    ],

                    'error' => [
                        'title' => 'Warehouses could not be已刪除',
                        'body'  => 'The warehouses cannot be已刪除 because they are currently in use.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => '一般資料',

                'entries' => [
                    'name'    => 'Warehouse名稱',
                    'code'    => 'Warehouse代碼',
                    'company' => '公司',
                    'address' => '地址',
                ],
            ],

            'settings' => [
                'title' => '設定',

                'entries' => [
                    'shipment-management' => 'Shipment Management',
                    'incoming-shipments'  => 'Incoming Shipments',
                    'outgoing-shipments'  => 'Outgoing Shipments',
                    'resupply-management' => 'Resupply Management',
                    'resupply-from'       => 'Resupply From',
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
