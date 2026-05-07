<?php

return [
    'notification' => [
        'title' => 'Product已更新',
        'body'  => 'The product has been已更新成功.',
    ],

    'header-actions' => [
        'update-quantity' => [
            'label'                     => 'Update數量',
            'modal-heading'             => 'Update Product數量',
            'modal-submit-action-label' => '更新',

            'form' => [
                'fields' => [
                    'on-hand-qty' => '現有數量',
                ],
            ],
        ],

        'delete' => [
            'notification' => [
                'title' => 'Product已刪除',
                'body'  => 'The product has been已刪除成功.',
            ],
        ],
    ],
];
