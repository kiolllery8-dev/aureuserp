<?php

return [
    'navigation' => [
        'title' => '倉庫',
        'group' => '倉庫管理',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => '一般',
                'fields' => [
                    'name'               => '名稱',
                    'name-placeholder'   => '例：中央倉',
                    'code'               => 'Short名稱',
                    'code-placeholder'   => '例：CW',
                    'code-hint-tooltip'  => '簡稱作為倉庫識別。',
                    'company'            => '公司',
                    'address'            => '地址',
                ],
            ],

            'settings' => [
                'title'  => '設定',

                'fields' => [
                    'shipment-management'              => '出貨管理',
                    'incoming-shipments'               => '收貨',
                    'incoming-shipments-hint-tooltip'  => '預設進貨路線',
                    'outgoing-shipments'               => '出貨',
                    'outgoing-shipments-hint-tooltip'  => '預設出貨路線',
                    'resupply-management'              => '補貨管理',
                    'resupply-management-hint-tooltip' => '將自動產生路線，從所選倉庫補貨給此倉庫。',
                    'resupply-from'                    => '補貨來源',
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
                    'title' => '倉庫已還原',
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
                    'title' => '倉庫已還原',
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
                    'shipment-management' => '出貨管理',
                    'incoming-shipments'  => '收貨',
                    'outgoing-shipments'  => '出貨',
                    'resupply-management' => '補貨管理',
                    'resupply-from'       => '補貨來源',
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
