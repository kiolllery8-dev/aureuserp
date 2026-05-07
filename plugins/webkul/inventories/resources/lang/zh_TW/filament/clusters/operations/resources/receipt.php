<?php

return [
    'navigation' => [
        'title' => '進貨',
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
                        'title' => 'Receipt deleted',
                        'body'  => 'The receipt ras been deleted成功.',
                    ],

                    'error' => [
                        'title' => 'Receipt could not be deleted',
                        'body'  => 'The receipt cannot be deleted because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Receipts deleted',
                        'body'  => 'The receipts has been deleted成功.',
                    ],

                    'error' => [
                        'title' => 'Receipts could not be deleted',
                        'body'  => 'The receipts cannot be deleted because they are currently in use.',
                    ],
                ],
            ],
        ],
    ],
];
