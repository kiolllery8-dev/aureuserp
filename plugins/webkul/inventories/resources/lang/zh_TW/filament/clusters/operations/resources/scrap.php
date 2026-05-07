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
                    'package'              => 'Package',
                    'quantity'             => '數量',
                    'unit'                 => '計量單位',
                    'lot'                  => 'Lot/Serial',
                    'tags'                 => '標籤',
                    'name'                 => '名稱',
                    'color'                => 'Color',
                    'owner'                => 'Owner',
                    'source-location'      => 'Source Location',
                    'destination-location' => 'Scrap Location',
                    'source-document'      => 'Source Document',
                    'company'              => '公司',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'date'            => '日期',
            'reference'       => '參考',
            'product'         => '商品',
            'package'         => 'Package',
            'quantity'        => '數量',
            'uom'             => '計量單位',
            'source-location' => 'Source Location',
            'scrap-location'  => 'Scrap Location',
            'unit'            => '計量單位',
            'lot'             => 'Lot/Serial',
            'tags'            => '標籤',
            'state'           => '狀態',
        ],

        'groups' => [
            'product'              => '商品',
            'source-location'      => 'Source Location',
            'destination-location' => 'Scrap Location',
        ],

        'filters' => [
            'source-location'      => 'Source Location',
            'destination-location' => 'Scrap Location',
            'product'              => '商品',
            'state'                => '狀態',
            'product-category'     => 'Product Category',
            'uom'                  => '計量單位',
            'lot'                  => 'Lot/Serial',
            'package'              => 'Package',
            'tags'                 => '標籤',
            'company'              => '公司',
            'quantity'             => '數量',
            'creator'              => 'Creator',
            'closed-at'            => 'Closed At',
            'created-at'           => '建立時間',
            'updated-at'           => '更新時間',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Scrap deleted',
                        'body'  => 'The scrap has been deleted成功.',
                    ],

                    'error' => [
                        'title' => 'Scrap could not be deleted',
                        'body'  => 'The scrap cannot be deleted because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Scraps deleted',
                        'body'  => 'The selected scraps have been deleted成功.',
                    ],

                    'error' => [
                        'title' => 'Scraps could not be deleted',
                        'body'  => 'The scraps cannot be deleted because they are currently in use.',
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
                    'package'              => 'Package',
                    'owner'                => 'Owner',
                    'source-location'      => 'Source Location',
                    'destination-location' => 'Destination Location',
                    'source-document'      => 'Source Document',
                    'company'              => '公司',
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
