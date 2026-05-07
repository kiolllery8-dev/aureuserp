<?php

return [
    'notification' => [
        'title' => 'Tax已更新',
        'body'  => 'The tax has been已更新成功.',
    ],

    'header-actions' => [
        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'Tax已刪除',
                    'body'  => 'The tax has been已刪除成功.',
                ],

                'error' => [
                    'title' => 'Tax could not be已刪除',
                    'body'  => 'The tax cannot be已刪除 because it is currently in use.',
                ],

                'invalid-repartition-lines' => [
                    'title' => '無效的分配行',
                ],
            ],
        ],
    ],
];
