<?php

return [
    'before-save' => [
        'notification' => [
            'error' => [
                'tracking-update' => [
                    'title' => '更新追蹤發生錯誤',
                    'body'  => '已使用過的商品無法變更庫存追蹤方式。',
                ],

                'track-by-update' => [
                    'title' => '更新追蹤發生錯誤',
                    'body'  => '庫存中有商品沒有批次／序號，可透過盤點調整指派。',
                ],
            ],
        ],
    ],

    'header-actions' => [
        'update-quantity' => [
            'label'                     => 'Update數量',
            'modal-heading'             => 'Update Product數量',
            'modal-submit-action-label' => '更新',

            'form' => [
                'fields' => [
                    'product'     => '商品',
                    'on-hand-qty' => '現有數量',
                ],
            ],
        ],
    ],
];
