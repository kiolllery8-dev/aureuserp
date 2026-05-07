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
                    'name-tooltip' => 'Enter the official currency name',
                    'symbol'       => '幣別符號',
                    'full-name'    => '姓名',
                    'iso-numeric'  => 'ISO Numeric代碼',
                ],
            ],

            'format-information' => [
                'title' => 'Format Configuration',

                'fields' => [
                    'decimal-places'        => 'Decimal Places',
                    'rounding'              => 'Rounding Precision',
                    'rounding-helper-text'  => 'Set the rounding precision for currency calculations',
                ],
            ],

            'status-and-configuration-information' => [
                'title' => 'Status & Configuration',

                'fields' => [
                    'status' => '狀態',
                ],
            ],

            'rates' => [
                'title'       => 'Currency Rates',
                'description' => '管理historic exchange rates for this currency relative to the base currency (USD).',

                'fields' => [
                    'name'              => '日期',
                    'unit-per-currency' => 'Unit Per :currency',
                    'currency-per-unit' => ':currency Per Unit',
                ],

                'add-rate'   => '新增Rate',
                'item-label' => 'Rate',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'           => '幣別名稱',
            'symbol'         => 'Symbol',
            'full-name'      => '姓名',
            'iso-numeric'    => 'ISO代碼',
            'decimal-places' => 'Decimal Places',
            'rounding'       => 'Rounding',
            'status'         => '狀態',
            'created-at'     => '建立時間',
            'updated-at'     => '更新時間',
        ],

        'groups' => [
            'name'           => '名稱',
            'status'         => '狀態',
            'decimal-places' => 'Decimal Places',
            'creation-date'  => 'Creation日期',
            'last-update'    => 'Last Update',
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
                'title' => 'Format Configuration',

                'entries' => [
                    'decimal-places' => 'Decimal Places',
                    'rounding'       => 'Rounding Precision',
                ],
            ],

            'status-and-configuration-information' => [
                'title' => 'Status & Configuration',

                'entries' => [
                    'status' => '狀態',
                ],
            ],

            'rates' => [
                'title'       => 'Currency Rates',

                'entries' => [
                    'name'              => '日期',
                    'unit-per-currency' => 'Unit Per :currency',
                    'currency-per-unit' => ':currency Per Unit',
                ],
            ],
        ],
    ],
];
