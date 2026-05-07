<?php

return [
    'navigation' => [
        'title' => 'Quantities',
        'group' => '調整',
    ],

    'form' => [
        'fields' => [
            'location'         => '位置',
            'product'          => '商品',
            'package'          => '包裝',
            'lot'              => '批號 / 序號',
            'counted-qty'      => 'Counted數量',
            'scheduled-at'     => '排定時間',
            'storage-category' => '儲存分類',
        ],
    ],

    'table' => [
        'columns' => [
            'location'           => '位置',
            'product'            => '商品',
            'product-category'   => 'Product Category',
            'lot'                => '批號 / 序號',
            'storage-category'   => '儲存分類',
            'available-quantity' => '可用數量',
            'quantity'           => '數量',
            'package'            => '包裝',
            'last-counted-at'    => '最後盤點時間',
            'on-hand'            => '現有數量',
            'uom'                => '計量單位',
            'counted'            => 'Counted數量',
            'difference'         => '差異',
            'scheduled-at'       => '排定時間',
            'user'               => '使用者',
            'company'            => '公司',

            'on-hand-before-state-updated' => [
                'notification' => [
                    'title' => 'Quantity已更新',
                    'body'  => 'The quantity has been已更新成功.',
                ],
            ],
        ],

        'groups' => [
            'product'          => '商品',
            'product-category' => 'Product Category',
            'location'         => '位置',
            'storage-category' => '儲存分類',
            'lot'              => '批號 / 序號',
            'company'          => '公司',
            'package'          => '包裝',
        ],

        'filters' => [
            'product'             => '商品',
            'uom'                 => '計量單位',
            'product-category'    => 'Product Category',
            'location'            => '位置',
            'storage-category'    => '儲存分類',
            'lot'                 => '批號 / 序號',
            'company'             => '公司',
            'package'             => '包裝',
            'on-hand-quantity'    => '現有數量',
            'difference-quantity' => 'Difference數量',
            'incoming-at'         => '進貨時間',
            'scheduled-at'        => '排定時間',
            'user'                => '使用者',
            'created-at'          => '建立時間',
            'updated-at'          => '更新時間',
            'company'             => '公司',
            'creator'             => '建立者',
        ],

        'header-actions' => [
            'create' => [
                'label' => '新增Quantity',

                'notification' => [
                    'title' => 'Quantity added',
                    'body'  => 'The quantity has been added成功.',
                ],

                'before' => [
                    'notification' => [
                        'title' => 'Quantity已存在',
                        'body'  => 'A quantity已存在 for this configuration. Please update the existing quantity instead.',
                    ],
                ],
            ],
        ],

        'actions' => [
            'apply' => [
                'label' => '套用',

                'notification' => [
                    'title' => 'Quantity changes applied',
                    'body'  => 'The quantity changes has been applied成功.',
                ],
            ],

            'clear' => [
                'label' => '清除',

                'notification' => [
                    'title' => 'Quantity changes cleared',
                    'body'  => 'The quantity changes have been cleared成功.',
                ],
            ],
        ],
    ],
];
