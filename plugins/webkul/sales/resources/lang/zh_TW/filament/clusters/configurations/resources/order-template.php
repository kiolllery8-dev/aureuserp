<?php

return [
    'title' => 'Order Template Products',

    'navigation' => [
        'title' => 'Order Template Products',
        'group' => '銷貨訂單',
    ],

    'global-search' => [
        'name'    => '名稱',
    ],

    'form' => [
        'fields' => [
            'sort'           => 'Sort',
            'order-template' => 'Order Template',
            'company'        => '公司',
            'product'        => '商品',
            'product-uom'    => 'Product UOM',
            'creator'        => 'Creator',
            'display-type'   => 'Display Type',
            'name'           => '名稱',
            'quantity'       => '數量',
        ],
    ],

    'table' => [
        'columns' => [
            'sort'           => 'Sort',
            'order-template' => 'Order Template',
            'company'        => '公司',
            'product'        => '商品',
            'product-uom'    => 'Product UOM',
            'created-by'     => '建立者',
            'display-type'   => 'Display Type',
            'name'           => '名稱',
            'quantity'       => '數量',
            'created-at'     => '建立時間',
            'updated-at'     => '更新時間',

        ],
        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Order Template Products updated',
                    'body'  => 'The order template products has been updated成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Order Template Products deleted',
                    'body'  => 'The order template products has been deleted成功.',
                ],
            ],
        ],
        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Order Template Products deleted',
                    'body'  => 'The order template products has been deleted成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'sort'           => 'Sort Order',
            'order-template' => 'Order Template',
            'company'        => '公司',
            'product'        => '商品',
            'product-uom'    => 'Product UOM',
            'display-type'   => 'Display Type',
            'name'           => '名稱',
            'quantity'       => '數量',
        ],
    ],
];
