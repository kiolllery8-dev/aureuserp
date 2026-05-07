<?php

return [
    'notification' => [
        'title' => 'Internal Transfer已更新',
        'body'  => 'The internal transfer has been已更新成功.',
    ],

    'header-actions' => [
        'print' => [
            'label' => '列印',
        ],

        'delete' => [
            'notification' => [
                'success' => [
                    'title' => '內部移轉已刪除',
                    'body'  => 'The internal transfer has been已刪除成功.',
                ],

                'error' => [
                    'title' => 'Internal Transfer could not be已刪除',
                    'body'  => 'The internal transfer cannot be已刪除 because it is currently in use.',
                ],
            ],
        ],
    ],
];
