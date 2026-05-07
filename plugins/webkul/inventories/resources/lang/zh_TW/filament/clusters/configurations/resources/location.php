<?php

return [
    'navigation' => [
        'title' => '位置',
        'group' => '倉庫 Management',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => '一般',

                'fields' => [
                    'location'                     => '位置',
                    'location-placeholder'         => 'eg. Spare Stock',
                    'parent-location'              => 'Parent 位置',
                    'parent-location-hint-tooltip' => 'The main location that encompasses this location. For example, the \'Dispatch Zone\' is part of the \'Gate 1\' parent location.',
                    'external-notes'               => 'External 備註',
                ],
            ],

            'settings' => [
                'title'  => '設定',

                'fields' => [
                    'location-type'                 => 'Location類型',
                    'company'                       => '公司',
                    'storage-category'              => '儲存分類',
                    'is-scrap'                      => 'Is a Scrap 位置?',
                    'is-scrap-hint-tooltip'         => 'Select this checkbox to designate this location for storing scrapped or damaged goods.',
                    'is-dock'                       => 'Is a Dock 位置?',
                    'is-dock-hint-tooltip'          => 'Select this checkbox to designate this location for storing goods that are ready for shipment.',
                    'is-replenish'                  => 'Is a Replenish 位置?',
                    'is-replenish-hint-tooltip'     => 'Enable this function to retrieve all quantities needed for replenishment at this location.',
                    'logistics'                     => '物流',
                    'removal-strategy'              => 'Removal Strategy',
                    'removal-strategy-hint-tooltip' => 'Specifies the default method for determining the exact shelf, lot, and location from which to pick products. This method can be enforced at the product category level, with a fallback to parent locations if not set here.',
                    'cyclic-counting'               => 'Cyclic Counting',
                    'inventory-frequency'           => 'Inventory Frequency',
                    'last-inventory'                => 'Last Inventory',
                    'last-inventory-hint-tooltip'   => '日期 of the last inventory at this location.',
                    'next-expected'                 => 'Next expected',
                    'next-expected-hint-tooltip'    => '日期 for next planned inventory based on cyclic schedule.',
                ],
            ],

            'additional' => [
                'title'  => '其他資料',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'location'         => '位置',
            'type'             => '類型',
            'storage-category' => '儲存分類',
            'company'          => '公司',
            'deleted-at'       => '刪除時間',
            'created-at'       => '建立時間',
            'updated-at'       => '更新時間',
        ],

        'groups' => [
            'warehouse'       => '倉庫',
            'type'            => '類型',
            'created-at'      => '建立時間',
            'updated-at'      => '更新時間',
        ],

        'filters' => [
            'location' => '位置',
            'type'     => '類型',
            'company'  => '公司',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Location已更新',
                    'body'  => 'The location has been已更新成功.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => '位置 restored',
                    'body'  => 'The location has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Location已刪除',
                    'body'  => 'The location has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => '位置 force已刪除',
                        'body'  => 'The location has been force已刪除成功.',
                    ],

                    'error' => [
                        'title' => '位置 could not be已刪除',
                        'body'  => 'The location cannot be已刪除 because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'print' => [
                'label' => 'Print Barcode',
            ],

            'restore' => [
                'notification' => [
                    'title' => '位置 restored',
                    'body'  => 'The locations has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Locations已刪除',
                    'body'  => 'The locations has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => '位置 force已刪除',
                        'body'  => 'The locations has been force已刪除成功.',
                    ],

                    'error' => [
                        'title' => '位置 could not be已刪除',
                        'body'  => 'The locations cannot be已刪除 because they are currently in use.',
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
                    'location'                     => '位置',
                    'location-placeholder'         => 'eg. Spare Stock',
                    'parent-location'              => 'Parent 位置',
                    'parent-location-hint-tooltip' => 'The main location that encompasses this location. For example, the \'Dispatch Zone\' is part of the \'Gate 1\' parent location.',
                    'external-notes'               => 'External 備註',
                ],
            ],

            'settings' => [
                'title'  => '設定',

                'entries' => [
                    'location-type'                 => 'Location類型',
                    'company'                       => '公司',
                    'storage-category'              => '儲存分類',
                    'is-scrap'                      => 'Is a Scrap 位置?',
                    'is-scrap-hint-tooltip'         => 'Select this checkbox to designate this location for storing scrapped or damaged goods.',
                    'is-dock'                       => 'Is a Dock 位置?',
                    'is-dock-hint-tooltip'          => 'Select this checkbox to designate this location for storing goods that are ready for shipment.',
                    'is-replenish'                  => 'Is a Replenish 位置?',
                    'is-replenish-hint-tooltip'     => 'Enable this function to retrieve all quantities needed for replenishment at this location.',
                    'logistics'                     => '物流',
                    'removal-strategy'              => 'Removal Strategy',
                    'removal-strategy-hint-tooltip' => 'Specifies the default method for determining the exact shelf, lot, and location from which to pick products. This method can be enforced at the product category level, with a fallback to parent locations if not set here.',
                    'cyclic-counting'               => 'Cyclic Counting',
                    'inventory-frequency'           => 'Inventory Frequency',
                    'last-inventory'                => 'Last Inventory',
                    'last-inventory-hint-tooltip'   => '日期 of the last inventory at this location.',
                    'next-expected'                 => 'Next expected',
                    'next-expected-hint-tooltip'    => '日期 for next planned inventory based on cyclic schedule.',
                ],
            ],

            'additional' => [
                'title'  => '其他資料',
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
