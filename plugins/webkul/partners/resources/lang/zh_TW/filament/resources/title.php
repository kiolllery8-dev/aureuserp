<?php

return [
    'form' => [
        'name'       => '名稱',
        'short-name' => 'Short Name',
    ],

    'table' => [
        'columns' => [
            'name'       => '名稱',
            'short-name' => 'Short Name',
            'created-at' => '建立時間',
            'updated-at' => '更新時間',
        ],

        'filters' => [
            'creator' => 'Creator',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Title updated',
                    'body'  => 'The Title has been updated成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Title deleted',
                    'body'  => 'The title has been deleted成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Titles deleted',
                    'body'  => 'The titles has been deleted成功.',
                ],
            ],
        ],
    ],
];
