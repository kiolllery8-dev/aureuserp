<?php

return [
    'title' => 'Capacity By Packages',

    'form' => [
        'package-type' => 'Package Type',
        'qty'          => '數量',
    ],

    'table' => [
        'header-actions' => [
            'create' => [
                'label' => 'Add Package Type Capacity',

                'notification' => [
                    'title' => 'Package Type Capacity created',
                    'body'  => 'The package type capacity been added成功.',
                ],
            ],
        ],

        'columns' => [
            'package-type' => 'Package Type',
            'qty'          => '數量',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Package Type Capacity updated',
                    'body'  => 'The package type capacity has been updated成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Package Type Capacity deleted',
                    'body'  => 'The package type capacity has been deleted成功.',
                ],
            ],
        ],
    ],
];
