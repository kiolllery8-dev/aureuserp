<?php

return [
    'notification' => [
        'title' => 'Scrap updated',
        'body'  => 'The scrap has been updated成功.',
    ],

    'header-actions' => [
        'validate' => [
            'label' => 'Validate',

            'notification' => [
                'warning' => [
                    'title' => 'Insufficient stock',
                    'body'  => 'The scrap has insufficient stock to validate.',
                ],

                'success' => [
                    'title' => 'Scrap marked as done',
                    'body'  => 'The scrap has been marked as done成功.',
                ],
            ],
        ],

        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'Scrap deleted',
                    'body'  => 'The scrap has been deleted成功.',
                ],

                'error' => [
                    'title' => 'Scraps could not be deleted',
                    'body'  => 'The scraps cannot be deleted because they are currently in use.',
                ],
            ],
        ],
    ],
];
