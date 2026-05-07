<?php

return [
    'navigation' => [
        'title' => 'Scraps',
        'group' => 'Adjustments',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => '一般',

                'fields' => [
                    'product'              => '商品',
                    'package'              => '包裝',
                    'quantity'             => '數量',
                    'unit'                 => '計量單位',
                    'lot'                  => 'Lot/Serial',
                    'tags'                 => '標籤',
                    'name'                 => '名稱',
                    'color'                => '顏色',
                    'owner'                => 'Owner',
                    'source-location'      => '從哪裡',
                    'destination-location' => 'Scrap Location',
                    'source-document'      => '來源單據',
                    'company'              => '公司',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'date'            => '日期',
            'reference'       => '參考編號',
            'product'         => '商品',
            'package'         => '包裝',
            'quantity'        => '數量',
            'uom'             => '計量單位',
            'source-location' => '從哪裡',
            'scrap-location'  => 'Scrap Location',
            'unit'            => '計量單位',
            'lot'             => 'Lot/Serial',
            'tags'            => '標籤',
            'state'           => '狀態',
        ],

        'groups' => [
            'product'              => '商品',
            'source-location'      => '從哪裡',
            'destination-location' => 'Scrap Location',
        ],

        'filters' => [
            'source-location'      => '從哪裡',
            'destination-location' => 'Scrap Location',
            'product'              => '商品',
            'state'                => '狀態',
            'product-category'     => 'Product Category',
            'uom'                  => '計量單位',
            'lot'                  => 'Lot/Serial',
            'package'              => '包裝',
            'tags'                 => '標籤',
            'company'              => '公司',
            'quantity'             => '數量',
            'creator'              => '建立者',
            'closed-at'            => 'Closed At',
            'created-at'           => '建立時間',
            'updated-at'           => '更新時間',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Scrap已刪除',
                        'body'  => 'The scrap has been已刪除成功.',
                    ],

                    'error' => [
                        'title' => 'Scrap could not be已刪除',
                        'body'  => 'The scrap cannot be已刪除 because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Scraps已刪除',
                        'body'  => 'The selected scraps have been已刪除成功.',
                    ],

                    'error' => [
                        'title' => 'Scraps could not be已刪除',
                        'body'  => 'The scraps cannot be已刪除 because they are currently in use.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Scrap Details',

                'entries' => [
                    'product'              => '商品',
                    'quantity'             => '數量',
                    'lot'                  => '批號',
                    'tags'                 => '標籤',
                    'package'              => '包裝',
                    'owner'                => 'Owner',
                    'source-location'      => '從哪裡',
                    'destination-location' => '送到哪裡',
                    'source-document'      => '來源單據',
                    'company'              => '公司',
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
