<?php

return [
    'navigation' => [
        'title' => '商品',
        'group' => '庫存',
    ],

    'form' => [
        'sections' => [
            'inventory' => [
                'title' => '庫存',

                'fieldsets' => [
                    'tracking' => [
                        'title' => '追蹤',

                        'fields' => [
                            'track-inventory'              => '追蹤庫存',
                            'track-inventory-hint-tooltip' => 'A storable product is one that requires inventory management..',
                            'track-by'                     => '追蹤方式',
                            'expiration-date'              => 'Expiration日期',
                            'expiration-date-hint-tooltip' => 'If selected, you can specify expiration dates for the product and its associated lot/serial numbers.',
                        ],
                    ],

                    'operation' => [
                        'title' => '作業',

                        'fields' => [
                            'routes'              => '路徑',
                            'routes-hint-tooltip' => 'Based on the installed modules, this setting allows you to define the product\'s route, such as purchasing, manufacturing, or replenishing on order.',
                        ],
                    ],

                    'logistics' => [
                        'title' => '物流',

                        'fields' => [
                            'responsible'              => '負責人',
                            'responsible-hint-tooltip' => 'Delivery lead time (in days) represents the promised duration between sales order confirmation and product delivery.',
                            'weight'                   => '重量',
                            'volume'                   => '體積',
                            'sale-delay'               => 'Customer Lead時間 (Days)',
                            'sale-delay-hint-tooltip'  => 'Delivery lead time (in days) represents the promised duration between sales order confirmation and product delivery.',
                        ],
                    ],

                    'traceability' => [
                        'title' => '追溯',

                        'fields' => [
                            'expiration-date'               => 'Expiration日期 (Days)',
                            'expiration-date-hint-tooltip'  => 'If selected, you can set expiration dates for the product and its associated lot/serial numbers.',
                            'best-before-date'              => 'Best Before日期 (Days)',
                            'best-before-date-hint-tooltip' => 'The number of days before the expiration date when the product begins to deteriorate, though it is still safe to use. This is calculated based on the lot/serial number.',
                            'removal-date'                  => 'Removal日期 (Days)',
                            'removal-date-hint-tooltip'     => 'The number of days before the expiration date when the product should be removed from stock. This is calculated based on the lot/serial number.',
                            'alert-date'                    => 'Alert日期 (Days)',
                            'alert-date-hint-tooltip'       => 'The number of days before the expiration date when an alert should be triggered for the lot/serial number. This is calculated based on the lot/serial number.',
                        ],
                    ],
                ],
            ],

            'additional' => [
                'title' => '額外',
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'inventory' => [
                'title' => '庫存',

                'entries' => [
                ],

                'fieldsets' => [
                    'tracking' => [
                        'title' => '追蹤',

                        'entries' => [
                            'track-inventory' => '追蹤庫存',
                            'track-by'        => '追蹤方式',
                            'expiration-date' => 'Expiration日期',
                        ],
                    ],

                    'operation' => [
                        'title' => '作業',

                        'entries' => [
                            'routes' => '路徑',
                        ],
                    ],

                    'logistics' => [
                        'title' => '物流',

                        'entries' => [
                            'responsible' => '負責人',
                            'weight'      => '重量',
                            'volume'      => '體積',
                            'sale-delay'  => 'Customer Lead時間 (Days)',
                        ],
                    ],

                    'traceability' => [
                        'title' => '追溯',

                        'entries' => [
                            'expiration-date'  => 'Expiration日期 (Days)',
                            'best-before-date' => 'Best Before日期 (Days)',
                            'removal-date'     => 'Removal日期 (Days)',
                            'alert-date'       => 'Alert日期 (Days)',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
