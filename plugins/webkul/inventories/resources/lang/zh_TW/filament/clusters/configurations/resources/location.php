<?php

return [
    'navigation' => [
        'title' => '位置',
        'group' => 'Warehouse Management',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => '一般',

                'fields' => [
                    'location'                     => '位置',
                    'location-placeholder'         => 'eg. Spare Stock',
                    'parent-location'              => 'Parent Location',
                    'parent-location-hint-tooltip' => 'The main location that encompasses this location. For example, the \'Dispatch Zone\' is part of the \'Gate 1\' parent location.',
                    'external-notes'               => 'External Notes',
                ],
            ],

            'settings' => [
                'title'  => '設定',

                'fields' => [
                    'location-type'                 => 'Location Type',
                    'company'                       => '公司',
                    'storage-category'              => 'Storage Category',
                    'is-scrap'                      => 'Is a Scrap Location?',
                    'is-scrap-hint-tooltip'         => 'Select this checkbox to designate this location for storing scrapped or damaged goods.',
                    'is-dock'                       => 'Is a Dock Location?',
                    'is-dock-hint-tooltip'          => 'Select this checkbox to designate this location for storing goods that are ready for shipment.',
                    'is-replenish'                  => 'Is a Replenish Location?',
                    'is-replenish-hint-tooltip'     => 'Enable this function to retrieve all quantities needed for replenishment at this location.',
                    'logistics'                     => 'Logistics',
                    'removal-strategy'              => 'Removal Strategy',
                    'removal-strategy-hint-tooltip' => 'Specifies the default method for determining the exact shelf, lot, and location from which to pick products. This method can be enforced at the product category level, with a fallback to parent locations if not set here.',
                    'cyclic-counting'               => 'Cyclic Counting',
                    'inventory-frequency'           => 'Inventory Frequency',
                    'last-inventory'                => 'Last Inventory',
                    'last-inventory-hint-tooltip'   => 'Date of the last inventory at this location.',
                    'next-expected'                 => 'Next expected',
                    'next-expected-hint-tooltip'    => 'Date for next planned inventory based on cyclic schedule.',
                ],
            ],

            'additional' => [
                'title'  => 'Additional Information',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'location'         => '位置',
            'type'             => '類型',
            'storage-category' => 'Storage Category',
            'company'          => '公司',
            'deleted-at'       => 'deleted At',
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
                    'title' => 'Location updated',
                    'body'  => 'The location has been updated成功.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Location restored',
                    'body'  => 'The location has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Location deleted',
                    'body'  => 'The location has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Location force deleted',
                        'body'  => 'The location has been force deleted成功.',
                    ],

                    'error' => [
                        'title' => 'Location could not be deleted',
                        'body'  => 'The location cannot be deleted because it is currently in use.',
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
                    'title' => 'Locations restored',
                    'body'  => 'The locations has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Locations deleted',
                    'body'  => 'The locations has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Locations force deleted',
                        'body'  => 'The locations has been force deleted成功.',
                    ],

                    'error' => [
                        'title' => 'Locations could not be deleted',
                        'body'  => 'The locations cannot be deleted because they are currently in use.',
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
                    'parent-location'              => 'Parent Location',
                    'parent-location-hint-tooltip' => 'The main location that encompasses this location. For example, the \'Dispatch Zone\' is part of the \'Gate 1\' parent location.',
                    'external-notes'               => 'External Notes',
                ],
            ],

            'settings' => [
                'title'  => '設定',

                'entries' => [
                    'location-type'                 => 'Location Type',
                    'company'                       => '公司',
                    'storage-category'              => 'Storage Category',
                    'is-scrap'                      => 'Is a Scrap Location?',
                    'is-scrap-hint-tooltip'         => 'Select this checkbox to designate this location for storing scrapped or damaged goods.',
                    'is-dock'                       => 'Is a Dock Location?',
                    'is-dock-hint-tooltip'          => 'Select this checkbox to designate this location for storing goods that are ready for shipment.',
                    'is-replenish'                  => 'Is a Replenish Location?',
                    'is-replenish-hint-tooltip'     => 'Enable this function to retrieve all quantities needed for replenishment at this location.',
                    'logistics'                     => 'Logistics',
                    'removal-strategy'              => 'Removal Strategy',
                    'removal-strategy-hint-tooltip' => 'Specifies the default method for determining the exact shelf, lot, and location from which to pick products. This method can be enforced at the product category level, with a fallback to parent locations if not set here.',
                    'cyclic-counting'               => 'Cyclic Counting',
                    'inventory-frequency'           => 'Inventory Frequency',
                    'last-inventory'                => 'Last Inventory',
                    'last-inventory-hint-tooltip'   => 'Date of the last inventory at this location.',
                    'next-expected'                 => 'Next expected',
                    'next-expected-hint-tooltip'    => 'Date for next planned inventory based on cyclic schedule.',
                ],
            ],

            'additional' => [
                'title'  => 'Additional Information',
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
