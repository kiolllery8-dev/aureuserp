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
