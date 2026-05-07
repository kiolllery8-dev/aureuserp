<?php

return [
    'navigation' => [
        'title' => '包裝',
        'group' => '庫存',
    ],

    'global-search' => [
        'name'         => '名稱',
        'package-type' => '包裝類型',
        'location'     => '位置',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => '一般',

                'fields' => [
                    'name'             => '名稱',
                    'name-placeholder' => 'eg. PACK007',
                    'package-type'     => '包裝類型',
                    'pack-date'        => 'Pack日期',
                    'location'         => '位置',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'         => '名稱',
            'package-type' => '包裝類型',
            'location'     => '位置',
            'company'      => '公司',
            'created-at'   => '建立時間',
            'updated-at'   => '更新時間',
        ],

        'groups' => [
            'package-type'   => '包裝類型',
            'location'       => '位置',
            'created-at'     => '建立時間',
        ],

        'filters' => [
            'package-type' => '包裝類型',
            'location'     => '位置',
            'creator'      => '建立者',
            'company'      => '公司',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Package已刪除',
                        'body'  => 'The package has been已刪除成功.',
                    ],

                    'error' => [
                        'title' => '包裝 could not be已刪除',
                        'body'  => 'The package cannot be已刪除 because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'print-without-content' => [
                'label' => 'Print Barcode',
            ],

            'print-with-content' => [
                'label' => 'Print Barcode With Content',
            ],

            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Packages已刪除',
                        'body'  => 'The packages has been已刪除成功.',
                    ],

                    'error' => [
                        'title' => '包裝 could not be已刪除',
                        'body'  => 'The packages cannot be已刪除 because they are currently in use.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => '包裝 Details',

                'entries' => [
                    'name'         => 'Package名稱',
                    'package-type' => '包裝類型',
                    'pack-date'    => 'Pack日期',
                    'location'     => '位置',
                    'company'      => '公司',
                    'created-at'   => '建立時間',
                    'updated-at'   => '最後更新',
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
