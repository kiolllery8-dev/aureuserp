<?php

return [
    'header-actions' => [
        'print' => [
            'label' => '列印',
        ],

        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'Lot Deleted',
                    'body'  => 'The lot has been deleted成功.',
                ],

                'error' => [
                    'title' => 'Lot could not be deleted',
                    'body'  => 'The lot cannot be deleted because it is currently in use.',
                ],
            ],
        ],
    ],
];
