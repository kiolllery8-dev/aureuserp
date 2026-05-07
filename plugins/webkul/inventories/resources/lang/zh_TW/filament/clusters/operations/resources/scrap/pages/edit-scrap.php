<?php

return [
    'notification' => [
        'title' => 'Scrap已更新',
        'body'  => 'The scrap has been已更新成功.',
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
                    'title' => 'Scrap已刪除',
                    'body'  => 'The scrap has been已刪除成功.',
                ],

                'error' => [
                    'title' => 'Scraps could not be已刪除',
                    'body'  => 'The scraps cannot be已刪除 because they are currently in use.',
                ],
            ],
        ],
    ],
];
