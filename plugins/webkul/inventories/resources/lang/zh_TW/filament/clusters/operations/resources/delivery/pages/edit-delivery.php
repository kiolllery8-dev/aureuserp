<?php

return [
    'notification' => [
        'title' => 'Delivery updated',
        'body'  => 'The delivery has been updated成功.',
    ],

    'header-actions' => [
        'print' => [
            'label' => '列印',
        ],

        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'Delivery deleted',
                    'body'  => 'The delivery has been deleted成功.',
                ],

                'error' => [
                    'title' => 'Delivery could not be deleted',
                    'body'  => 'The delivery cannot be deleted because it is currently in use.',
                ],
            ],
        ],
    ],
];
