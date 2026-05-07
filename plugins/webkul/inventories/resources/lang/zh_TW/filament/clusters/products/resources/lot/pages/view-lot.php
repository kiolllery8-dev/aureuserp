<?php

return [
    'header-actions' => [
        'print' => [
            'label' => '列印',
        ],

        'delete' => [
            'notification' => [
                'success' => [
                    'title' => '批號 Deleted',
                    'body'  => 'The lot has been已刪除成功.',
                ],

                'error' => [
                    'title' => '批號 could not be已刪除',
                    'body'  => 'The lot cannot be已刪除 because it is currently in use.',
                ],
            ],
        ],
    ],
];
