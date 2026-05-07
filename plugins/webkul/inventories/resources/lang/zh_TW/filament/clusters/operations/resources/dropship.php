<?php

return [
    'navigation' => [
        'title' => 'Dropships',
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
                        'title' => 'Dropship deleted',
                        'body'  => 'The dropship ras been deleted成功.',
                    ],

                    'error' => [
                        'title' => 'Dropship could not be deleted',
                        'body'  => 'The dropship cannot be deleted because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Dropships deleted',
                        'body'  => 'The dropships has been deleted成功.',
                    ],

                    'error' => [
                        'title' => 'Dropships could not be deleted',
                        'body'  => 'The dropships cannot be deleted because they are currently in use.',
                    ],
                ],
            ],
        ],
    ],
];
