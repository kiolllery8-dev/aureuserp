<?php

return [
    'navigation' => [
        'title' => 'Packages',
        'group' => '庫存',
    ],

    'global-search' => [
        'name'         => '名稱',
        'package-type' => 'Package Type',
        'location'     => '位置',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => '一般',

                'fields' => [
                    'name'             => '名稱',
                    'name-placeholder' => 'eg. PACK007',
                    'package-type'     => 'Package Type',
                    'pack-date'        => 'Pack Date',
                    'location'         => '位置',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'         => '名稱',
            'package-type' => 'Package Type',
            'location'     => '位置',
            'company'      => '公司',
            'created-at'   => '建立時間',
            'updated-at'   => '更新時間',
        ],

        'groups' => [
            'package-type'   => 'Package Type',
            'location'       => '位置',
            'created-at'     => '建立時間',
        ],

        'filters' => [
            'package-type' => 'Package Type',
            'location'     => '位置',
            'creator'      => 'Creator',
            'company'      => '公司',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Package deleted',
                        'body'  => 'The package has been deleted成功.',
                    ],

                    'error' => [
                        'title' => 'Package could not be deleted',
                        'body'  => 'The package cannot be deleted because it is currently in use.',
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
                        'title' => 'Packages deleted',
                        'body'  => 'The packages has been deleted成功.',
                    ],

                    'error' => [
                        'title' => 'Packages could not be deleted',
                        'body'  => 'The packages cannot be deleted because they are currently in use.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Package Details',

                'entries' => [
                    'name'         => 'Package Name',
                    'package-type' => 'Package Type',
                    'pack-date'    => 'Pack Date',
                    'location'     => '位置',
                    'company'      => '公司',
                    'created-at'   => '建立時間',
                    'updated-at'   => 'Last Updated',
                ],
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
