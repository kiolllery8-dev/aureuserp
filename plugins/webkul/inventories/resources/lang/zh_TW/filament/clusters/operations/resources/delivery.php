<?php

return [
    'navigation' => [
        'title' => '出貨',
        'group' => '調撥',
    ],

    'global-search' => [
        'partner' => '夥伴',
        'origin'  => '來源',
    ],

    'table' => [
        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Delivery已刪除',
                        'body'  => 'The delivery ras been已刪除成功.',
                    ],

                    'error' => [
                        'title' => 'Delivery could not be已刪除',
                        'body'  => 'The delivery cannot be已刪除 because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Deliveries已刪除',
                        'body'  => 'The deliveries has been已刪除成功.',
                    ],

                    'error' => [
                        'title' => 'Deliveries could not be已刪除',
                        'body'  => 'The deliveries cannot be已刪除 because they are currently in use.',
                    ],
                ],
            ],
        ],
    ],
];
