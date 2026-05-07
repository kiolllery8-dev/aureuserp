<?php

return [
    'form' => [
        'name'    => '名稱',
        'barcode' => 'Barcode',
        'product' => '商品',
        'routes'  => '路徑',
        'qty'     => 'Qty',
        'company' => '公司',
    ],

    'table' => [
        'columns' => [
            'name'       => '名稱',
            'product'    => '商品',
            'routes'     => '路徑',
            'qty'        => 'Qty',
            'company'    => '公司',
            'barcode'    => 'Barcode',
            'created-at' => '建立時間',
            'updated-at' => '更新時間',
        ],

        'groups' => [
            'product'    => '商品',
            'created-at' => '建立時間',
            'updated-at' => '更新時間',
        ],

        'filters' => [
            'product' => '商品',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Packaging update',
                    'body'  => 'The packaging has been update成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Packaging deleted',
                        'body'  => 'The packaging has been deleted成功.',
                    ],

                    'error' => [
                        'title' => 'Packaging could not be deleted',
                        'body'  => 'The packaging cannot be deleted because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'print' => [
                'label' => '列印',
            ],

            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Packagings deleted',
                        'body'  => 'The packagings has been deleted成功.',
                    ],

                    'error' => [
                        'title' => 'Packagings could not be deleted',
                        'body'  => 'The packagings cannot be deleted because they are currently in use.',
                    ],
                ],
            ],
        ],

        'empty-state-actions' => [
            'create' => [
                'label' => '新增Packaging',

                'notification' => [
                    'title' => 'Packaging created',
                    'body'  => 'The packaging has been created成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => '一般資料',

                'entries' => [
                    'name'    => 'Package Name',
                    'barcode' => 'Barcode',
                    'product' => '商品',
                    'qty'     => '數量',
                ],
            ],

            'organization' => [
                'title' => 'Organization Details',

                'entries' => [
                    'company'    => '公司',
                    'creator'    => '建立者',
                    'created_at' => '建立時間',
                    'updated_at' => 'Last Updated At',
                ],
            ],
        ],
    ],
];
