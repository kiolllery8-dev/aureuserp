<?php

return [
    'header-actions' => [
        'print' => [
            'label' => '列印',
        ],

        'delete' => [
            'notification' => [
                'success' => [
                    'title' => '出貨已刪除',
                    'body'  => 'The delivery has been已刪除成功.',
                ],

                'error' => [
                    'title' => 'Delivery could not be已刪除',
                    'body'  => 'The delivery cannot be已刪除 because it is currently in use.',
                ],
            ],
        ],
    ],
];
