<?php

return [
    'header-actions' => [
        'print' => [
            'label' => '列印',
        ],

        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'Receipt Deleted',
                    'body'  => 'The receipt has been已刪除成功.',
                ],

                'error' => [
                    'title' => 'Receipt could not be已刪除',
                    'body'  => 'The Receipt cannot be已刪除 because it is currently in use.',
                ],
            ],
        ],
    ],
];
