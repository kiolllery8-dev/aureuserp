<?php

return [
    'notification' => [
        'title' => 'Internal 調撥已更新',
        'body'  => 'The internal transfer has been已更新成功.',
    ],

    'header-actions' => [
        'print' => [
            'label' => '列印',
        ],

        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'Internal 調撥已刪除',
                    'body'  => 'The internal transfer has been已刪除成功.',
                ],

                'error' => [
                    'title' => 'Internal 調撥 could not be已刪除',
                    'body'  => 'The internal transfer cannot be已刪除 because it is currently in use.',
                ],
            ],
        ],
    ],
];
