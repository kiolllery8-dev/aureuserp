<?php

return [
    'navigation' => [
        'title' => '包裝類型s',
        'group' => '出貨',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => '一般',

                'fields' => [
                    'name'       => '名稱',
                    'barcode'    => '條碼',
                    'company'    => '公司',
                    'weight'     => '重量',
                    'max-weight' => 'Max 重量',

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
            'barcode'    => '條碼',
            'weight'     => '重量',
            'max-weight' => 'Max 重量',
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
                    'title' => '包裝類型已刪除',
                    'body'  => 'The package type has been已刪除成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => '包裝類型已刪除',
                    'body'  => 'The package type has been已刪除成功.',
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
                            'title'   => '包裝 Dimensions',
                            'entries' => [
                                'length' => 'Length',
                                'width'  => 'Width',
                                'height' => 'Height',
                            ],
                        ],
                    ],
                    'weight'     => 'Base 重量',
                    'max-weight' => 'Maximum 重量',
                    'barcode'    => '條碼',
                    'company'    => '公司',
                    'created-at' => '建立時間',
                    'updated-at' => '最後更新',
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
