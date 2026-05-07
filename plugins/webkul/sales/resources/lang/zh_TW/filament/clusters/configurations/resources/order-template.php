<?php

return [
    'title' => '訂單範本商品',

    'navigation' => [
        'title' => '訂單範本商品',
        'group' => '銷貨訂單',
    ],

    'global-search' => [
        'name'    => '名稱',
    ],

    'form' => [
        'fields' => [
            'sort'           => '排序',
            'order-template' => '訂單範本',
            'company'        => '公司',
            'product'        => '商品',
            'product-uom'    => '商品單位',
            'creator'        => '建立者',
            'display-type'   => '顯示類型',
            'name'           => '名稱',
            'quantity'       => '數量',
        ],
    ],

    'table' => [
        'columns' => [
            'sort'           => '排序',
            'order-template' => '訂單範本',
            'company'        => '公司',
            'product'        => '商品',
            'product-uom'    => '商品單位',
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
            'sort'           => '排序',
            'order-template' => '訂單範本',
            'company'        => '公司',
            'product'        => '商品',
            'product-uom'    => '商品單位',
            'display-type'   => '顯示類型',
            'name'           => '名稱',
            'quantity'       => '數量',
        ],
    ],
];
