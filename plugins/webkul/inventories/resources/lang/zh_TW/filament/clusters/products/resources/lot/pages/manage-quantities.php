<?php

return [
    'title' => '位置',

    'table' => [
        'columns' => [
            'product'          => '商品',
            'location'         => '位置',
            'storage-category' => '儲存分類',
            'quantity'         => '數量',
            'package'          => '包裝',
            'on-hand'          => '現有數量',
            'unit'             => '單位',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => '數量已刪除',
                    'body'  => 'The quantity has been已刪除成功.',
                ],
            ],
        ],
    ],
];
