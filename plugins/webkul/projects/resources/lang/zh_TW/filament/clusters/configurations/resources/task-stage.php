<?php

return [
    'navigation' => [
        'title' => '任務階段',
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
                    'title' => 'Task stage已更新',
                    'body'  => 'The task stage has been已更新成功.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => '任務階段已還原',
                    'body'  => 'The task stage has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Task stage已刪除',
                    'body'  => 'The task stage has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Task stage force已刪除',
                        'body'  => 'The Task stage has been force已刪除成功.',
                    ],
                    'error' => [
                        'title' => 'Task stage could not be已刪除',
                        'body'  => 'The Task stage cannot be已刪除 because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => '任務階段已還原',
                    'body'  => 'The task stages has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Task stages已刪除',
                    'body'  => 'The task stages has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Task stages force已刪除',
                    'body'  => 'The task stages has been force已刪除成功.',
                ],
            ],
        ],
    ],
];
