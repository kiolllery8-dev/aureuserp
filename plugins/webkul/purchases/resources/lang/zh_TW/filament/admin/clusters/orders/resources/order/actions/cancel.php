<?php

return [
    'label' => '取消',

    'action' => [
        'notification' => [
            'warning' => [
                'receipts' => [
                    'title' => '無法取消訂單',
                    'body'  => '訂單無法取消，因為有已完成的收貨。',
                ],

                'bills' => [
                    'title' => '無法取消訂單',
                    'body'  => '訂單無法取消，請先取消相關供應商帳單。',
                ],
            ],

            'success' => [
                'title' => '訂單已取消',
                'body'  => 'The order has been canceled成功.',
            ],
        ],
    ],
];
