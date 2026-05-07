<?php

return [
    'title' => '貨幣',

    'navigation' => [
        'title' => '貨幣',
        'group' => '設定',
    ],

    'form' => [
        'sections' => [
            'currency-details' => [
                'title' => 'Currency資料',

                'fields' => [
                    'name'         => '幣別名稱',
                    'name-tooltip' => '輸入官方貨幣名稱',
                    'symbol'       => '幣別符號',
                    'full-name'    => '姓名',
                    'iso-numeric'  => 'ISO Numeric代碼',
                ],
            ],

            'format-information' => [
                'title' => '格式設定',

                'fields' => [
                    'decimal-places'        => '小數位數',
                    'rounding'              => '進位精度',
                    'rounding-helper-text'  => '設定貨幣計算的進位精度',
                ],
            ],

            'status-and-configuration-information' => [
                'title' => '狀態與設定',

                'fields' => [
                    'status' => '狀態',
                ],
            ],

            'rates' => [
                'title'       => '貨幣匯率',
                'description' => '管理historic exchange rates for this currency relative to the base currency (USD).',

                'fields' => [
                    'name'              => '日期',
                    'unit-per-currency' => '每 :currency 單位',
                    'currency-per-unit' => ':currency Per Unit',
                ],

                'add-rate'   => '新增Rate',
                'item-label' => '匯率',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'           => '幣別名稱',
            'symbol'         => '符號',
            'full-name'      => '姓名',
            'iso-numeric'    => 'ISO代碼',
            'decimal-places' => '小數位數',
            'rounding'       => '進位',
            'status'         => '狀態',
            'created-at'     => '建立時間',
            'updated-at'     => '更新時間',
        ],

        'groups' => [
            'name'           => '名稱',
            'status'         => '狀態',
            'decimal-places' => '小數位數',
            'creation-date'  => 'Creation日期',
            'last-update'    => '最後更新',
        ],

        'filters' => [
            'status' => '狀態',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title'   => 'Currency已刪除',
                    'body'    => 'The currency has been已刪除成功.',

                    'success' => [
                        'title' => 'Currency已刪除',
                        'body'  => 'The currency has been已刪除成功.',
                    ],

                    'error' => [
                        'title' => 'Currency could not be已刪除',
                        'body'  => 'The currency cannot be已刪除 because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Currencies已刪除',
                    'body'  => 'The currencies have been已刪除成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'currency-details' => [
                'title' => 'Currency資料',

                'entries' => [
                    'name'         => '幣別名稱',
                    'symbol'       => '幣別符號',
                    'full-name'    => '姓名',
                    'iso-numeric'  => 'ISO Numeric代碼',
                ],
            ],

            'format-information' => [
                'title' => '格式設定',

                'entries' => [
                    'decimal-places' => '小數位數',
                    'rounding'       => '進位精度',
                ],
            ],

            'status-and-configuration-information' => [
                'title' => '狀態與設定',

                'entries' => [
                    'status' => '狀態',
                ],
            ],

            'rates' => [
                'title'       => '貨幣匯率',

                'entries' => [
                    'name'              => '日期',
                    'unit-per-currency' => '每 :currency 單位',
                    'currency-per-unit' => ':currency Per Unit',
                ],
            ],
        ],
    ],
];
