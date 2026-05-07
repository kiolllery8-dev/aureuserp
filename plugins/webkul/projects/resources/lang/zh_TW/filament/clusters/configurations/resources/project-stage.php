<?php

return [
    'navigation' => [
        'title' => '專案階段',
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
            'is-completed' => '已完成',
            'project'      => '專案',
            'created-at'   => '建立時間',
        ],

        'filters' => [
            'is-completed' => '已完成',
            'project'      => '專案',
            'creator'      => '建立者',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Project stage已更新',
                    'body'  => 'The project stage has been已更新成功.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => '專案階段已還原',
                    'body'  => 'The project stage has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Project stage已刪除',
                    'body'  => 'The project stage has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Project stage force已刪除',
                        'body'  => 'The project stage has been force已刪除成功.',
                    ],
                    'error' => [
                        'title' => 'Project Stage  could not be已刪除',
                        'body'  => 'The Project Stage  cannot be已刪除 because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => '專案階段已還原',
                    'body'  => 'The project stages has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Project stages已刪除',
                    'body'  => 'The project stages has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Project stages force已刪除',
                    'body'  => 'The project stages has been force已刪除成功.',
                ],
            ],
        ],
    ],
];
