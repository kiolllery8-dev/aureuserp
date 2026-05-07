<?php

return [
    'notification' => [
        'success' => [
            'title' => 'Payment term已更新',
            'body'  => 'The payment term has been已更新成功.',
        ],

        'validation-error' => [
            'title' => 'Validation Error',
            'body'  => 'The Due Term must have at least one percent line and the sum of the percent must be 100%.',
        ],
    ],

    'header-actions' => [
        'delete' => [
            'notification' => [
                'title' => 'Payment term已刪除',
                'body'  => 'The payment term has been已刪除成功.',
            ],
        ],
    ],
];
