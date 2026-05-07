<?php

return [
    'header-actions' => [
        'print' => [
            'label' => '列印',
        ],

        'delete' => [
            'notification' => [
                'success' => [
                    'title' => '進貨 Deleted',
                    'body'  => 'The receipt has been已刪除成功.',
                ],

                'error' => [
                    'title' => '進貨 could not be已刪除',
                    'body'  => 'The 進貨 cannot be已刪除 because it is currently in use.',
                ],
            ],
        ],
    ],
];
