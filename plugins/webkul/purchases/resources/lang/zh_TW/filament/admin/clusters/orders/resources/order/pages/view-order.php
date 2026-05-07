<?php

return [
    'header-actions' => [
        'print' => [
            'label' => '列印',
        ],

        'delete' => [
            'notification' => [
                'success' => [
                    'title' => '訂單 Deleted',
                    'body'  => 'The order has been已刪除成功.',
                ],

                'error' => [
                    'title' => '訂單 could not be已刪除',
                    'body'  => 'The order cannot be已刪除 because it is currently in use.',
                ],
            ],
        ],
    ],
];
