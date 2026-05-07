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
                    'title' => 'Payment Due Term updated',
                    'body'  => 'The payment due term has been updated成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Payment Due Term deleted',
                    'body'  => 'The payment due term has been deleted成功.',
                ],
            ],
        ],

        'header-actions' => [
            'create' => [
                'notification' => [
                    'title' => 'Payment Due Term created',
                    'body'  => 'The payment due term has been created成功.',
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
