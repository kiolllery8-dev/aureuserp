<?php

return [
    'notification' => [
        'title' => '稅 group已更新',
        'body'  => 'The tax group has been已更新成功.',
    ],

    'header-actions' => [
        'delete' => [
            'notification' => [
                'success' => [
                    'title' => '稅 group已刪除',
                    'body'  => 'The tax group has been已刪除成功.',
                ],

                'error' => [
                    'title' => '稅 群組 could not be已刪除',
                    'body'  => 'The tax group cannot be已刪除 because it is currently in use.',
                ],
            ],
        ],
    ],
];
