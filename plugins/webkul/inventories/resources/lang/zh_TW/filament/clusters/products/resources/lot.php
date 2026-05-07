<?php

return [
    'navigation' => [
        'title' => '批次／序號',
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
                    'name-placeholder'       => '例：LOT/0001/20121',
                    'product'                => '商品',
                    'product-hint-tooltip'   => '與此批次／序號關聯的商品。若已移動則無法變更。',
                    'reference'              => '參考編號',
                    'reference-hint-tooltip' => '內部參考號（若與製造商的批次／序號不同）。',
                    'description'            => '說明',
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
                        'title' => '批次已刪除',
                        'body'  => 'The lot has been已刪除成功.',
                    ],

                    'error' => [
                        'title' => 'Lot could not be已刪除',
                        'body'  => 'The lot cannot be已刪除 because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'print' => [
                'label' => '列印條碼',
            ],

            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Lots已刪除',
                        'body'  => 'The lots has been已刪除成功.',
                    ],

                    'error' => [
                        'title' => 'Lots could not be已刪除',
                        'body'  => 'The lots cannot be已刪除 because they are currently in use.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => '批次詳情',

                'entries' => [
                    'name'        => 'Lot名稱',
                    'product'     => '商品',
                    'reference'   => '參考編號',
                    'description' => '說明',
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
