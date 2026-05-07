<?php

return [
    'navigation' => [
        'title' => 'Internal 調撥',
        'group' => '調撥',
    ],

    'global-search' => [
        'origin' => 'Origin',
    ],

    'table' => [
        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Internal Transfer已刪除',
                        'body'  => 'The internal transfer ras been已刪除成功.',
                    ],

                    'error' => [
                        'title' => 'Internal 調撥 could not be已刪除',
                        'body'  => 'The internal transfer cannot be已刪除 because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Internal Transfers已刪除',
                        'body'  => 'The internal transfers has been已刪除成功.',
                    ],

                    'error' => [
                        'title' => 'Internal 調撥 could not be已刪除',
                        'body'  => 'The internal transfers cannot be已刪除 because they are currently in use.',
                    ],
                ],
            ],
        ],
    ],
];
