<?php

return [
    'navigation' => [
        'title' => '出貨',
        'group' => '調撥',
    ],

    'global-search' => [
        'partner' => '夥伴',
        'origin'  => 'Origin',
    ],

    'table' => [
        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Delivery deleted',
                        'body'  => 'The delivery ras been deleted成功.',
                    ],

                    'error' => [
                        'title' => 'Delivery could not be deleted',
                        'body'  => 'The delivery cannot be deleted because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Deliveries deleted',
                        'body'  => 'The deliveries has been deleted成功.',
                    ],

                    'error' => [
                        'title' => 'Deliveries could not be deleted',
                        'body'  => 'The deliveries cannot be deleted because they are currently in use.',
                    ],
                ],
            ],
        ],
    ],
];
