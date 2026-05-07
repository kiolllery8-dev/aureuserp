<?php

return [
    'navigation' => [
        'title' => 'Quantities',
        'group' => 'Adjustments',
    ],

    'form' => [
        'fields' => [
            'location'         => '位置',
            'product'          => '商品',
            'package'          => 'Package',
            'lot'              => 'Lot / Serial Numbers',
            'counted-qty'      => 'Counted Quantity',
            'scheduled-at'     => 'Scheduled At',
            'storage-category' => 'Storage Category',
        ],
    ],

    'table' => [
        'columns' => [
            'location'           => '位置',
            'product'            => '商品',
            'product-category'   => 'Product Category',
            'lot'                => 'Lot / Serial Numbers',
            'storage-category'   => 'Storage Category',
            'available-quantity' => 'Available Quantity',
            'quantity'           => '數量',
            'package'            => 'Package',
            'last-counted-at'    => 'Last Counted At',
            'on-hand'            => 'On Hand Quantity',
            'uom'                => '計量單位',
            'counted'            => 'Counted Quantity',
            'difference'         => 'Difference',
            'scheduled-at'       => 'Scheduled At',
            'user'               => '使用者',
            'company'            => '公司',

            'on-hand-before-state-updated' => [
                'notification' => [
                    'title' => 'Quantity updated',
                    'body'  => 'The quantity has been updated成功.',
                ],
            ],
        ],

        'groups' => [
            'product'          => '商品',
            'product-category' => 'Product Category',
            'location'         => '位置',
            'storage-category' => 'Storage Category',
            'lot'              => 'Lot / Serial Numbers',
            'company'          => '公司',
            'package'          => 'Package',
        ],

        'filters' => [
            'product'             => '商品',
            'uom'                 => '計量單位',
            'product-category'    => 'Product Category',
            'location'            => '位置',
            'storage-category'    => 'Storage Category',
            'lot'                 => 'Lot / Serial Numbers',
            'company'             => '公司',
            'package'             => 'Package',
            'on-hand-quantity'    => 'On Hand Quantity',
            'difference-quantity' => 'Difference Quantity',
            'incoming-at'         => 'Incoming At',
            'scheduled-at'        => 'Scheduled At',
            'user'                => '使用者',
            'created-at'          => '建立時間',
            'updated-at'          => '更新時間',
            'company'             => '公司',
            'creator'             => 'Creator',
        ],

        'header-actions' => [
            'create' => [
                'label' => 'Add Quantity',

                'notification' => [
                    'title' => 'Quantity added',
                    'body'  => 'The quantity has been added成功.',
                ],

                'before' => [
                    'notification' => [
                        'title' => 'Quantity already exists',
                        'body'  => 'A quantity already exists for this configuration. Please update the existing quantity instead.',
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
                'label' => 'Clear',

                'notification' => [
                    'title' => 'Quantity changes cleared',
                    'body'  => 'The quantity changes have been cleared成功.',
                ],
            ],
        ],
    ],
];
