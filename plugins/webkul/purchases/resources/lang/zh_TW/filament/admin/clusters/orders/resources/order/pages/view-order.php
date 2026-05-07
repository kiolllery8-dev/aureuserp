<?php

return [
    'header-actions' => [
        'print' => [
            'label' => '列印',
        ],

        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'Order Deleted',
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
