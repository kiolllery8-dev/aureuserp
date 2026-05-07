<?php

return [
    'navigation' => [
        'title' => '檢視Vendor Price List',
    ],

    'header-actions' => [
        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'Vendor Price deleted',
                    'body'  => 'The vendor price has been deleted成功.',
                ],

                'error' => [
                    'title' => 'Vendor Price could not be deleted',
                    'body'  => 'The vendor price cannot be deleted because it is currently in use.',
                ],
            ],
        ],
    ],
];
