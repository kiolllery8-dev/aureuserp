<?php

return [
    'notification' => [
        'title' => 'Internal Transfer updated',
        'body'  => 'The internal transfer has been updated成功.',
    ],

    'header-actions' => [
        'print' => [
            'label' => '列印',
        ],

        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'Internal Transfer deleted',
                    'body'  => 'The internal transfer has been deleted成功.',
                ],

                'error' => [
                    'title' => 'Internal Transfer could not be deleted',
                    'body'  => 'The internal transfer cannot be deleted because it is currently in use.',
                ],
            ],
        ],
    ],
];
