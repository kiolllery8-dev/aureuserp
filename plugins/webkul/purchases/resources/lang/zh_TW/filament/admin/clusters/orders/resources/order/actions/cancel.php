<?php

return [
    'label' => '取消',

    'action' => [
        'notification' => [
            'warning' => [
                'receipts' => [
                    'title' => 'Cannot cancel order',
                    'body'  => 'The order cannot be canceled since they have receipts that are already done.',
                ],

                'bills' => [
                    'title' => 'Cannot cancel order',
                    'body'  => 'The order cannot be canceled. You must first cancel their related vendor bills.',
                ],
            ],

            'success' => [
                'title' => '訂單 canceled',
                'body'  => 'The order has been canceled成功.',
            ],
        ],
    ],
];
