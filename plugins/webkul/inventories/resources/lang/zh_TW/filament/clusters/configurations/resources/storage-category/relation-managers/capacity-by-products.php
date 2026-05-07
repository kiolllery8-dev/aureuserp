<?php

return [
    'title' => 'Capacity By Products',

    'form' => [
        'product' => '商品',
        'qty'     => '數量',
    ],

    'table' => [
        'header-actions' => [
            'create' => [
                'label' => 'Add Product Capacity',

                'notification' => [
                    'title' => 'Product Capacity created',
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
                    'title' => 'Product Capacity updated',
                    'body'  => 'The product capacity has been updated成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Product Capacity deleted',
                    'body'  => 'The product capacity has been deleted成功.',
                ],
            ],
        ],
    ],
];
