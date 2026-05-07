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
                    'code'               => 'Short Name',
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
                'title'  => 'Additional Information',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => '名稱',
            'code'       => 'Short Name',
            'company'    => '公司',
            'address'    => '地址',
            'deleted-at' => 'deleted At',
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
                    'title' => 'Warehouse deleted',
                    'body'  => 'The warehouse has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Warehouse force deleted',
                        'body'  => 'The warehouse has been force deleted成功.',
                    ],

                    'error' => [
                        'title' => 'Warehouse could not be deleted',
                        'body'  => 'The warehouse cannot be deleted because it is currently in use.',
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
                    'title' => 'Warehouses deleted',
                    'body'  => 'The warehouses has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Warehouses force deleted',
                        'body'  => 'The warehouses has been force deleted成功.',
                    ],

                    'error' => [
                        'title' => 'Warehouses could not be deleted',
                        'body'  => 'The warehouses cannot be deleted because they are currently in use.',
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
                    'name'    => 'Warehouse Name',
                    'code'    => 'Warehouse Code',
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
