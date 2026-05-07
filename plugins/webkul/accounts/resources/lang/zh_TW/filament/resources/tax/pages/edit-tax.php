<?php

return [
    'notification' => [
        'title' => 'Tax updated',
        'body'  => 'The tax has been updated成功.',
    ],

    'header-actions' => [
        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'Tax deleted',
                    'body'  => 'The tax has been deleted成功.',
                ],

                'error' => [
                    'title' => 'Tax could not be deleted',
                    'body'  => 'The tax cannot be deleted because it is currently in use.',
                ],

                'invalid-repartition-lines' => [
                    'title' => 'Invalid Repartition Lines',
                ],
            ],
        ],
    ],
];
