<?php

return [
    'navigation' => [
        'title' => '批號 / Serial 編號',
        'group' => '庫存',
    ],

    'global-search' => [
        'ref'     => '參考編號',
        'product' => '商品',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => '一般',

                'fields' => [
                    'name'                   => '名稱',
                    'name-placeholder'       => 'e.g. LOT/0001/20121',
                    'product'                => '商品',
                    'product-hint-tooltip'   => 'The product associated with this lot/serial number. It cannot be changed if it has already been moved.',
                    'reference'              => '參考編號',
                    'reference-hint-tooltip' => 'An internal reference number, if different from the manufacturer\'s lot/serial number.',
                    'description'            => '描述',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'         => '名稱',
            'product'      => '商品',
            'on-hand-qty'  => '現有數量',
            'reference'    => '內部編號',
            'created-at'   => '建立時間',
            'updated-at'   => '更新時間',
        ],

        'groups' => [
            'product'        => '商品',
            'location'       => '位置',
            'created-at'     => '建立時間',
        ],

        'filters' => [
            'product'  => '商品',
            'location' => '位置',
            'creator'  => '建立者',
            'company'  => '公司',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => '批號已刪除',
                        'body'  => 'The lot has been已刪除成功.',
                    ],

                    'error' => [
                        'title' => '批號 could not be已刪除',
                        'body'  => 'The lot cannot be已刪除 because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'print' => [
                'label' => 'Print Barcode',
            ],

            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => '批號已刪除',
                        'body'  => 'The lots has been已刪除成功.',
                    ],

                    'error' => [
                        'title' => '批號 could not be已刪除',
                        'body'  => 'The lots cannot be已刪除 because they are currently in use.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => '批號 Details',

                'entries' => [
                    'name'        => '批號名稱',
                    'product'     => '商品',
                    'reference'   => '參考編號',
                    'description' => '描述',
                    'on-hand-qty' => 'On-Hand數量',
                    'company'     => '公司',
                    'created-at'  => '建立時間',
                    'updated-at'  => '最後更新',
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
