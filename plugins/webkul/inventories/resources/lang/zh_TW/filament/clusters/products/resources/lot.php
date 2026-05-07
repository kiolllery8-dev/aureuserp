<?php

return [
    'navigation' => [
        'title' => 'Lots / Serial Numbers',
        'group' => '庫存',
    ],

    'global-search' => [
        'ref'     => '參考',
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
                    'reference'              => '參考',
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
            'on-hand-qty'  => 'On Hand Quantity',
            'reference'    => '內部參考',
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
            'creator'  => 'Creator',
            'company'  => '公司',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Lot deleted',
                        'body'  => 'The lot has been deleted成功.',
                    ],

                    'error' => [
                        'title' => 'Lot could not be deleted',
                        'body'  => 'The lot cannot be deleted because it is currently in use.',
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
                        'title' => 'Lots deleted',
                        'body'  => 'The lots has been deleted成功.',
                    ],

                    'error' => [
                        'title' => 'Lots could not be deleted',
                        'body'  => 'The lots cannot be deleted because they are currently in use.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Lot Details',

                'entries' => [
                    'name'        => 'Lot Name',
                    'product'     => '商品',
                    'reference'   => '參考',
                    'description' => '描述',
                    'on-hand-qty' => 'On-Hand Quantity',
                    'company'     => '公司',
                    'created-at'  => '建立時間',
                    'updated-at'  => 'Last Updated',
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
