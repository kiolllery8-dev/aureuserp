<?php

return [
    'form' => [
        'name'    => '名稱',
        'barcode' => '條碼',
        'product' => '商品',
        'routes'  => '路徑',
        'qty'     => '數量',
        'company' => '公司',
    ],

    'table' => [
        'columns' => [
            'name'       => '名稱',
            'product'    => '商品',
            'routes'     => '路徑',
            'qty'        => '數量',
            'company'    => '公司',
            'barcode'    => '條碼',
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
                        'title' => 'Packaging已刪除',
                        'body'  => 'The packaging has been已刪除成功.',
                    ],

                    'error' => [
                        'title' => 'Packaging could not be已刪除',
                        'body'  => 'The packaging cannot be已刪除 because it is currently in use.',
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
                        'title' => 'Packagings已刪除',
                        'body'  => 'The packagings has been已刪除成功.',
                    ],

                    'error' => [
                        'title' => 'Packagings could not be已刪除',
                        'body'  => 'The packagings cannot be已刪除 because they are currently in use.',
                    ],
                ],
            ],
        ],

        'empty-state-actions' => [
            'create' => [
                'label' => '新增Packaging',

                'notification' => [
                    'title' => 'Packaging已建立',
                    'body'  => 'The packaging has been已建立成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => '一般資料',

                'entries' => [
                    'name'    => '包裝名稱',
                    'barcode' => '條碼',
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
