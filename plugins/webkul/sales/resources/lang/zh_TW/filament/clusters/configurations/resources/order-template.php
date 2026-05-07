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
            'sort'           => '排序',
            'order-template' => 'Order Template',
            'company'        => '公司',
            'product'        => '商品',
            'product-uom'    => 'Product UOM',
            'creator'        => '建立者',
            'display-type'   => '顯示類型',
            'name'           => '名稱',
            'quantity'       => '數量',
        ],
    ],

    'table' => [
        'columns' => [
            'sort'           => '排序',
            'order-template' => 'Order Template',
            'company'        => '公司',
            'product'        => '商品',
            'product-uom'    => 'Product UOM',
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
                    'title' => 'Order Template Products已更新',
                    'body'  => 'The order template products has been已更新成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Order Template Products已刪除',
                    'body'  => 'The order template products has been已刪除成功.',
                ],
            ],
        ],
        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Order Template Products已刪除',
                    'body'  => 'The order template products has been已刪除成功.',
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
            'display-type'   => '顯示類型',
            'name'           => '名稱',
            'quantity'       => '數量',
        ],
    ],
];
