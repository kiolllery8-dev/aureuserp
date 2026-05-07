<?php

return [
    'notification' => [
        'title' => 'Tax group updated',
        'body'  => 'The tax group has been updated成功.',
    ],

    'header-actions' => [
        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'Tax group deleted',
                    'body'  => 'The tax group has been deleted成功.',
                ],

                'error' => [
                    'title' => 'Tax Group could not be deleted',
                    'body'  => 'The tax group cannot be deleted because it is currently in use.',
                ],
            ],
        ],
    ],
];
