<?php

return [
    'navigation' => [
        'title' => 'Task Stages',
    ],

    'form' => [
        'name'    => '名稱',
        'project' => '專案',
    ],

    'table' => [
        'columns' => [
            'name'       => '名稱',
            'project'    => '專案',
            'created-at' => '建立時間',
            'updated-at' => '更新時間',
        ],

        'groups' => [
            'project'    => '專案',
            'created-at' => '建立時間',
        ],

        'filters' => [
            'project' => '專案',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Task stage updated',
                    'body'  => 'The task stage has been updated成功.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Task stage restored',
                    'body'  => 'The task stage has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Task stage deleted',
                    'body'  => 'The task stage has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Task stage force deleted',
                        'body'  => 'The Task stage has been force deleted成功.',
                    ],
                    'error' => [
                        'title' => 'Task stage could not be deleted',
                        'body'  => 'The Task stage cannot be deleted because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Task stages restored',
                    'body'  => 'The task stages has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Task stages deleted',
                    'body'  => 'The task stages has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Task stages force deleted',
                    'body'  => 'The task stages has been force deleted成功.',
                ],
            ],
        ],
    ],
];
