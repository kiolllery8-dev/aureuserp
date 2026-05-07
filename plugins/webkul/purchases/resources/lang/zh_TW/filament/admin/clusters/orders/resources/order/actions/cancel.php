<?php

return [
    'label' => '取消',

    'action' => [
        'notification' => [
            'warning' => [
                'receipts' => [
                    'title' => '無法取消訂單',
                    'body'  => 'The order cannot be canceled since they have receipts that are already done.',
                ],

                'bills' => [
                    'title' => '無法取消訂單',
                    'body'  => 'The order cannot be canceled. You must first cancel their related vendor bills.',
                ],
            ],

            'success' => [
                'title' => 'Order canceled',
                'body'  => 'The order has been canceled成功.',
            ],
        ],
    ],
];
