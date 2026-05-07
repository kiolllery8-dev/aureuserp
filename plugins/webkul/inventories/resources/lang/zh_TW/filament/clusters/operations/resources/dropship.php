<?php

return [
    'navigation' => [
        'title' => '代發',
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
                        'title' => '代發已刪除',
                        'body'  => 'The dropship ras been已刪除成功.',
                    ],

                    'error' => [
                        'title' => 'Dropship could not be已刪除',
                        'body'  => 'The dropship cannot be已刪除 because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Dropships已刪除',
                        'body'  => 'The dropships has been已刪除成功.',
                    ],

                    'error' => [
                        'title' => 'Dropships could not be已刪除',
                        'body'  => 'The dropships cannot be已刪除 because they are currently in use.',
                    ],
                ],
            ],
        ],
    ],
];
