<?php

return [
    'navigation' => [
        'title' => '檢視供應商價格列表',
    ],

    'header-actions' => [
        'delete' => [
            'notification' => [
                'success' => [
                    'title' => '供應商價格已刪除',
                    'body'  => 'The vendor price has been已刪除成功.',
                ],

                'error' => [
                    'title' => '供應商價格 could not be已刪除',
                    'body'  => 'The vendor price cannot be已刪除 because it is currently in use.',
                ],
            ],
        ],
    ],
];
