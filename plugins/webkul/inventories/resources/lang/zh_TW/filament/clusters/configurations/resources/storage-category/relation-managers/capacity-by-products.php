<?php

return [
    'title' => '依商品容量',

    'form' => [
        'product' => '商品',
        'qty'     => '數量',
    ],

    'table' => [
        'header-actions' => [
            'create' => [
                'label' => '新增Product Capacity',

                'notification' => [
                    'title' => 'Product Capacity已建立',
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
                    'title' => 'Product Capacity已更新',
                    'body'  => 'The product capacity has been已更新成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Product Capacity已刪除',
                    'body'  => 'The product capacity has been已刪除成功.',
                ],
            ],
        ],
    ],
];
