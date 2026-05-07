<?php

return [
    'notification' => [
        'title' => 'Package updated',
        'body'  => 'The package has been updated成功.',
    ],

    'header-actions' => [
        'print' => [
            'label' => '列印',

            'actions' => [
                'without-content' => [
                    'label' => 'Print Barcode',
                ],

                'with-content' => [
                    'label' => 'Print Barcode With Content',
                ],
            ],
        ],

        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'Package deleted',
                    'body'  => 'The package has been deleted成功.',
                ],

                'error' => [
                    'title' => 'Package could not be deleted',
                    'body'  => 'The package cannot be deleted because it is currently in use.',
                ],
            ],
        ],
    ],
];
