<?php

return [
    'navigation' => [
        'title' => '任務 階段',
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
                    'title' => '任務 stage已更新',
                    'body'  => 'The task stage has been已更新成功.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => '任務 stage restored',
                    'body'  => 'The task stage has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => '任務 stage已刪除',
                    'body'  => 'The task stage has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => '任務 stage force已刪除',
                        'body'  => 'The 任務 stage has been force已刪除成功.',
                    ],
                    'error' => [
                        'title' => '任務 stage could not be已刪除',
                        'body'  => 'The 任務 stage cannot be已刪除 because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => '任務 stages restored',
                    'body'  => 'The task stages has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => '任務 stages已刪除',
                    'body'  => 'The task stages has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => '任務 stages force已刪除',
                    'body'  => 'The task stages has been force已刪除成功.',
                ],
            ],
        ],
    ],
];
