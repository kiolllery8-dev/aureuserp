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
                        'title' => 'Receipt已刪除',
                        'body'  => 'The receipt ras been已刪除成功.',
                    ],

                    'error' => [
                        'title' => 'Receipt could not be已刪除',
                        'body'  => 'The receipt cannot be已刪除 because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Receipts已刪除',
                        'body'  => 'The receipts has been已刪除成功.',
                    ],

                    'error' => [
                        'title' => 'Receipts could not be已刪除',
                        'body'  => 'The receipts cannot be已刪除 because they are currently in use.',
                    ],
                ],
            ],
        ],
    ],
];
