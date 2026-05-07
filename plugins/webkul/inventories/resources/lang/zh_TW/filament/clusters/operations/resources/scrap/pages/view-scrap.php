<?php

return [
    'header-actions' => [
        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'Scrap Deleted',
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
