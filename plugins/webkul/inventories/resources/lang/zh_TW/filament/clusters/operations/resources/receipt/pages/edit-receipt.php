<?php

return [
    'notification' => [
        'title' => 'Receipt updated',
        'body'  => 'The receipt has been updated成功.',
    ],

    'header-actions' => [
        'print' => [
            'label' => '列印',
        ],

        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'Receipt deleted',
                    'body'  => 'The receipt has been deleted成功.',
                ],

                'error' => [
                    'title' => 'Receipt could not be deleted',
                    'body'  => 'The Receipt cannot be deleted because it is currently in use.',
                ],
            ],
        ],
    ],
];
