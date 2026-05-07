<?php

return [
    'navigation' => [
        'title' => '倉庫',
        'group' => '倉庫 Management',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => '一般',
                'fields' => [
                    'name'               => '名稱',
                    'name-placeholder'   => 'eg. Central 倉庫',
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
                    'incoming-shipments-hint-tooltip'  => '預設 incoming route to follow',
                    'outgoing-shipments'               => 'Outgoing Shipments',
                    'outgoing-shipments-hint-tooltip'  => '預設 outgoing route to follow',
                    'resupply-management'              => 'Resupply Management',
                    'resupply-management-hint-tooltip' => '路徑 will be automatically generated to resupply this warehouse from the selected warehouses.',
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
                    'title' => '倉庫 restored',
                    'body'  => 'The warehouse has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => '倉庫已刪除',
                    'body'  => 'The warehouse has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => '倉庫 force已刪除',
                        'body'  => 'The warehouse has been force已刪除成功.',
                    ],

                    'error' => [
                        'title' => '倉庫 could not be已刪除',
                        'body'  => 'The warehouse cannot be已刪除 because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => '倉庫 restored',
                    'body'  => 'The warehouses has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => '倉庫已刪除',
                    'body'  => 'The warehouses has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => '倉庫 force已刪除',
                        'body'  => 'The warehouses has been force已刪除成功.',
                    ],

                    'error' => [
                        'title' => '倉庫 could not be已刪除',
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
                    'name'    => '倉庫名稱',
                    'code'    => '倉庫代碼',
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
