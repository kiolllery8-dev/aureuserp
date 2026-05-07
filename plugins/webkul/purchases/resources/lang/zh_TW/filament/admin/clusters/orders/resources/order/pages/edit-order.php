<?php

return [
    'notification' => [
        'title' => 'Order updated',
        'body'  => 'The order has been updated成功.',
    ],

    'header-actions' => [
        'confirm' => [
            'label' => '確認',
        ],

        'close' => [
            'label' => '關閉',
        ],

        'cancel' => [
            'label' => '取消',
        ],

        'print' => [
            'label' => '列印',
        ],

        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'Order deleted',
                    'body'  => 'The order has been deleted成功.',
                ],

                'error' => [
                    'title' => 'Order could not be deleted',
                    'body'  => 'The order cannot be deleted because it is currently in use.',
                ],
            ],
        ],
    ],
];
