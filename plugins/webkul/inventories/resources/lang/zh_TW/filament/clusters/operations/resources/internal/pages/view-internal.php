<?php

return [
    'header-actions' => [
        'print' => [
            'label' => '列印',
        ],

        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'Internal Transfer Deleted',
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
