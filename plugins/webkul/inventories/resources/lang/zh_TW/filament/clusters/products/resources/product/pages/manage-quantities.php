<?php

return [
    'title' => '數量',

    'tabs' => [
        'internal-locations' => 'Internal 位置',
        'transit-locations'  => 'Transit 位置',
        'on-hand'            => '現有',
        'to-count'           => 'To Count',
        'to-apply'           => 'To Apply',
    ],

    'form' => [
        'fields' => [
            'product'          => '商品',
            'location'         => '位置',
            'package'          => '包裝',
            'lot'              => '批號 / 序號',
            'on-hand-qty'      => '現有數量',
            'storage-category' => '儲存分類',
        ],
    ],

    'table' => [
        'columns' => [
            'product'           => '商品',
            'location'          => '位置',
            'lot'               => '批號 / 序號',
            'storage-category'  => '儲存分類',
            'quantity'          => '數量',
            'package'           => '包裝',
            'on-hand'           => '現有數量',
            'unit'              => '單位',
            'reserved-quantity' => '預留數量',

            'on-hand-before-state-updated' => [
                'notification' => [
                    'title' => 'Quantity已更新',
                    'body'  => 'The quantity has been已更新成功.',
                ],
            ],
        ],

        'header-actions' => [
            'create' => [
                'label' => '新增Quantity',

                'notification' => [
                    'title' => '數量 added',
                    'body'  => 'The quantity has been added成功.',
                ],

                'before' => [
                    'notification' => [
                        'title' => 'Quantity已存在',
                        'body'  => 'Already has a quantity for the same configuration. Please update the quantity instead.',
                    ],
                ],
            ],
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Quantity已刪除',
                    'body'  => 'The quantity has been已刪除成功.',
                ],
            ],
        ],
    ],
];
