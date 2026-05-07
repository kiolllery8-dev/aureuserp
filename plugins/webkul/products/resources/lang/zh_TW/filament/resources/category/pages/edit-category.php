<?php

return [
    'notification' => [
        'title' => 'Category已更新',
        'body'  => 'The category has been已更新成功.',
    ],

    'header-actions' => [
        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'Category已刪除',
                    'body'  => 'The category has been已刪除成功.',
                ],

                'error' => [
                    'title' => 'Category could not be已刪除',
                    'body'  => 'The category cannot be已刪除 because it is currently in use.',
                ],
            ],
        ],
    ],

    'save' => [
        'notification' => [
            'error' => [
                'title' => 'Category已更新失敗',
            ],
        ],
    ],
];
