<?php

return [
    'form' => [
        'name'      => '名稱',
        'full-name' => 'Full Name',
    ],

    'table' => [
        'columns' => [
            'name'       => '名稱',
            'full-name'  => 'Full Name',
            'created-at' => '建立時間',
            'updated-at' => '更新時間',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Industry updated',
                    'body'  => 'The industry has been updated成功.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Industry restored',
                    'body'  => 'The industry has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Industry deleted',
                    'body'  => 'The industry has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Industry force deleted',
                    'body'  => 'The industry has been force deleted成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Industries restored',
                    'body'  => 'The industries has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Industries deleted',
                    'body'  => 'The industries has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Industries force deleted',
                    'body'  => 'The industries has been force deleted成功.',
                ],
            ],
        ],
    ],
];
