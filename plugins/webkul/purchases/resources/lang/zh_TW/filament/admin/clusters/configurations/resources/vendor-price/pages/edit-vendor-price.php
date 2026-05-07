<?php

return [
    'navigation' => [
        'title' => '編輯供應商價格列表',
    ],

    'notification' => [
        'title' => '供應商價格已更新',
        'body'  => 'The vendor price has been已更新成功.',
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
