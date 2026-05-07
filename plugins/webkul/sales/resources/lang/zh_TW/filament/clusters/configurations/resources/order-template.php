<?php

return [
    'title' => '訂單 Template 商品',

    'navigation' => [
        'title' => '訂單 Template 商品',
        'group' => '銷貨訂單',
    ],

    'global-search' => [
        'name'    => '名稱',
    ],

    'form' => [
        'fields' => [
            'sort'           => 'Sort',
            'order-template' => '訂單 Template',
            'company'        => '公司',
            'product'        => '商品',
            'product-uom'    => '商品 UOM',
            'creator'        => '建立者',
            'display-type'   => '顯示類型',
            'name'           => '名稱',
            'quantity'       => '數量',
        ],
    ],

    'table' => [
        'columns' => [
            'sort'           => 'Sort',
            'order-template' => '訂單 Template',
            'company'        => '公司',
            'product'        => '商品',
            'product-uom'    => '商品 UOM',
            'created-by'     => '建立者',
            'display-type'   => '顯示類型',
            'name'           => '名稱',
            'quantity'       => '數量',
            'created-at'     => '建立時間',
            'updated-at'     => '更新時間',

        ],
        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => '訂單 Template 商品已更新',
                    'body'  => 'The order template products has been已更新成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => '訂單 Template 商品已刪除',
                    'body'  => 'The order template products has been已刪除成功.',
                ],
            ],
        ],
        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => '訂單 Template 商品已刪除',
                    'body'  => 'The order template products has been已刪除成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'sort'           => 'Sort 訂單',
            'order-template' => '訂單 Template',
            'company'        => '公司',
            'product'        => '商品',
            'product-uom'    => '商品 UOM',
            'display-type'   => '顯示類型',
            'name'           => '名稱',
            'quantity'       => '數量',
        ],
    ],
];
