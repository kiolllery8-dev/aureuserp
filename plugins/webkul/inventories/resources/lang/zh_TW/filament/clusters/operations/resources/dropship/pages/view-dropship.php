<?php

return [
    'header-actions' => [
        'print' => [
            'label' => '列印',
        ],

        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'Dropship Deleted',
                    'body'  => 'The dropship has been deleted成功.',
                ],

                'error' => [
                    'title' => 'Dropship could not be deleted',
                    'body'  => 'The dropship cannot be deleted because it is currently in use.',
                ],
            ],
        ],
    ],
];
