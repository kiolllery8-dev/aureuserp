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
                            'track-inventory-hint-tooltip' => '可存放商品為需要庫存管理的商品。',
                            'track-by'                     => '追蹤方式',
                            'expiration-date'              => 'Expiration日期',
                            'expiration-date-hint-tooltip' => '啟用後可指定商品與批次／序號的到期日。',
                        ],
                    ],

                    'operation' => [
                        'title' => '作業',

                        'fields' => [
                            'routes'              => '路徑',
                            'routes-hint-tooltip' => '依已安裝的模組，此設定可定義商品路線，如採購、製造、依單補貨。',
                        ],
                    ],

                    'logistics' => [
                        'title' => '物流',

                        'fields' => [
                            'responsible'              => '負責人',
                            'responsible-hint-tooltip' => '送貨前置時間（天）表示銷售訂單確認到出貨的承諾時間。',
                            'weight'                   => '重量',
                            'volume'                   => '體積',
                            'sale-delay'               => 'Customer Lead時間 (Days)',
                            'sale-delay-hint-tooltip'  => '送貨前置時間（天）表示銷售訂單確認到出貨的承諾時間。',
                        ],
                    ],

                    'traceability' => [
                        'title' => '追溯',

                        'fields' => [
                            'expiration-date'               => 'Expiration日期 (Days)',
                            'expiration-date-hint-tooltip'  => '啟用後可設定商品與批次／序號的到期日。',
                            'best-before-date'              => 'Best Before日期 (Days)',
                            'best-before-date-hint-tooltip' => '在到期日前幾天商品開始劣化但仍可安全使用，依批次／序號計算。',
                            'removal-date'                  => 'Removal日期 (Days)',
                            'removal-date-hint-tooltip'     => '在到期日前幾天該下架商品，依批次／序號計算。',
                            'alert-date'                    => 'Alert日期 (Days)',
                            'alert-date-hint-tooltip'       => '在到期日前幾天為批次／序號觸發提醒，依批次／序號計算。',
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
