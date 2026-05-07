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
                'title' => 'Currency Information',

                'fields' => [
                    'name'         => 'Currency Name',
                    'name-tooltip' => 'Enter the official currency name',
                    'symbol'       => 'Currency Symbol',
                    'full-name'    => 'Full Name',
                    'iso-numeric'  => 'ISO Numeric Code',
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

                'add-rate'   => 'Add Rate',
                'item-label' => 'Rate',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'           => 'Currency Name',
            'symbol'         => 'Symbol',
            'full-name'      => 'Full Name',
            'iso-numeric'    => 'ISO Code',
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
            'creation-date'  => 'Creation Date',
            'last-update'    => 'Last Update',
        ],

        'filters' => [
            'status' => '狀態',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title'   => 'Currency deleted',
                    'body'    => 'The currency has been deleted成功.',

                    'success' => [
                        'title' => 'Currency deleted',
                        'body'  => 'The currency has been deleted成功.',
                    ],

                    'error' => [
                        'title' => 'Currency could not be deleted',
                        'body'  => 'The currency cannot be deleted because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Currencies deleted',
                    'body'  => 'The currencies have been deleted成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'currency-details' => [
                'title' => 'Currency Information',

                'entries' => [
                    'name'         => 'Currency Name',
                    'symbol'       => 'Currency Symbol',
                    'full-name'    => 'Full Name',
                    'iso-numeric'  => 'ISO Numeric Code',
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
