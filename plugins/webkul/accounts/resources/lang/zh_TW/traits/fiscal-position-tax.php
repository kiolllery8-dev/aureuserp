<?php

return [
    'form' => [
        'fields' => [
            'tax-source'      => 'Tax Source',
            'tax-destination' => 'Tax Destination',
        ],
    ],

    'table' => [
        'columns' => [
            'tax-source'      => 'Tax Source',
            'tax-destination' => 'Tax Destination',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Payment Due Term已更新',
                    'body'  => 'The payment due term has been已更新成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Payment Due Term已刪除',
                    'body'  => 'The payment due term has been已刪除成功.',
                ],
            ],
        ],

        'header-actions' => [
            'create' => [
                'notification' => [
                    'title' => 'Payment Due Term已建立',
                    'body'  => 'The payment due term has been已建立成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'tax-source'      => 'Tax Source',
            'tax-destination' => 'Tax Destination',
        ],
    ],
];
