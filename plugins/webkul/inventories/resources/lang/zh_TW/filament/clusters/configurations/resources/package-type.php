<?php

return [
    'navigation' => [
        'title' => 'Package Types',
        'group' => '出貨',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => '一般',

                'fields' => [
                    'name'       => '名稱',
                    'barcode'    => 'Barcode',
                    'company'    => '公司',
                    'weight'     => 'Weight',
                    'max-weight' => 'Max Weight',

                    'fieldsets' => [
                        'size' => [
                            'title' => 'Size',

                            'fields' => [
                                'length' => 'Length',
                                'width'  => 'Width',
                                'height' => 'Height',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => '名稱',
            'barcode'    => 'Barcode',
            'weight'     => 'Weight',
            'max-weight' => 'Max Weight',
            'width'      => 'Width',
            'height'     => 'Height',
            'length'     => 'Length',
            'created-at' => '建立時間',
            'updated-at' => '更新時間',
        ],

        'groups' => [
            'created-at' => '建立時間',
            'updated-at' => '更新時間',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Package Type deleted',
                    'body'  => 'The package type has been deleted成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Package Type deleted',
                    'body'  => 'The package type has been deleted成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title'   => '一般資料',
                'entries' => [
                    'name'      => '名稱',
                    'fieldsets' => [
                        'size' => [
                            'title'   => 'Package Dimensions',
                            'entries' => [
                                'length' => 'Length',
                                'width'  => 'Width',
                                'height' => 'Height',
                            ],
                        ],
                    ],
                    'weight'     => 'Base Weight',
                    'max-weight' => 'Maximum Weight',
                    'barcode'    => 'Barcode',
                    'company'    => '公司',
                    'created-at' => '建立時間',
                    'updated-at' => 'Last Updated',
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
