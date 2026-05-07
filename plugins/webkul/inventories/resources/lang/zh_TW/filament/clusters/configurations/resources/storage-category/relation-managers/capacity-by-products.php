<?php

return [
    'title' => 'Capacity By 商品',

    'form' => [
        'product' => '商品',
        'qty'     => '數量',
    ],

    'table' => [
        'header-actions' => [
            'create' => [
                'label' => '新增Product Capacity',

                'notification' => [
                    'title' => '商品 Capacity已建立',
                    'body'  => 'The product capacity been added成功.',
                ],
            ],
        ],

        'columns' => [
            'product' => '商品',
            'qty'     => '數量',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => '商品 Capacity已更新',
                    'body'  => 'The product capacity has been已更新成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => '商品 Capacity已刪除',
                    'body'  => 'The product capacity has been已刪除成功.',
                ],
            ],
        ],
    ],
];
