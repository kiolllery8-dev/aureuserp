<?php

return [
    'navigation' => [
        'title' => 'Package類型s',
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
                    'max-weight' => '最大重量',

                    'fieldsets' => [
                        'size' => [
                            'title' => '大小',

                            'fields' => [
                                'length' => '長度',
                                'width'  => '寬度',
                                'height' => '高度',
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
            'max-weight' => '最大重量',
            'width'      => '寬度',
            'height'     => '高度',
            'length'     => '長度',
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
                    'title' => 'Package類型已刪除',
                    'body'  => 'The package type has been已刪除成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Package類型已刪除',
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
                            'title'   => '包裝尺寸',
                            'entries' => [
                                'length' => '長度',
                                'width'  => '寬度',
                                'height' => '高度',
                            ],
                        ],
                    ],
                    'weight'     => '基礎重量',
                    'max-weight' => '最大重量',
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
