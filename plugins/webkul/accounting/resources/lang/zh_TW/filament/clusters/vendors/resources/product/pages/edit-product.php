<?php

return [
    'notification' => [
        'title' => 'Product updated',
        'body'  => 'The product has been updated成功.',
    ],

    'header-actions' => [
        'update-quantity' => [
            'label'                     => 'Update Quantity',
            'modal-heading'             => 'Update Product Quantity',
            'modal-submit-action-label' => '更新',

            'form' => [
                'fields' => [
                    'on-hand-qty' => 'On Hand Quantity',
                ],
            ],
        ],

        'delete' => [
            'notification' => [
                'title' => 'Product deleted',
                'body'  => 'The product has been deleted成功.',
            ],
        ],
    ],
];
