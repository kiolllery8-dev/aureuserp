<?php

return [
    'navigation' => [
        'title' => 'Project Stages',
    ],

    'form' => [
        'name' => '名稱',
    ],

    'table' => [
        'columns' => [
            'name'       => '名稱',
            'created-at' => '建立時間',
            'updated-at' => '更新時間',
        ],

        'groups' => [
            'name'         => '名稱',
            'is-completed' => 'Is Completed',
            'project'      => '專案',
            'created-at'   => '建立時間',
        ],

        'filters' => [
            'is-completed' => 'Is Completed',
            'project'      => '專案',
            'creator'      => 'Creator',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Project stage updated',
                    'body'  => 'The project stage has been updated成功.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Project stage restored',
                    'body'  => 'The project stage has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Project stage deleted',
                    'body'  => 'The project stage has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Project stage force deleted',
                        'body'  => 'The project stage has been force deleted成功.',
                    ],
                    'error' => [
                        'title' => 'Project Stage  could not be deleted',
                        'body'  => 'The Project Stage  cannot be deleted because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Project stages restored',
                    'body'  => 'The project stages has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Project stages deleted',
                    'body'  => 'The project stages has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Project stages force deleted',
                    'body'  => 'The project stages has been force deleted成功.',
                ],
            ],
        ],
    ],
];
