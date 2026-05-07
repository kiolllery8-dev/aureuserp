<?php

return [
    'title' => '位置',

    'table' => [
        'columns' => [
            'product'          => '商品',
            'location'         => '位置',
            'storage-category' => 'Storage Category',
            'quantity'         => '數量',
            'package'          => 'Package',
            'on-hand'          => 'On Hand Quantity',
            'unit'             => 'Unit',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Quantity deleted',
                    'body'  => 'The quantity has been deleted成功.',
                ],
            ],
        ],
    ],
];
