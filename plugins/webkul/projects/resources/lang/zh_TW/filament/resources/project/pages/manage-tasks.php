<?php

return [
    'title' => '任務',

    'header-actions' => [
        'create' => [
            'label' => '新增Task',
        ],
    ],

    'table' => [
        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Task restored',
                    'body'  => 'The task has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Task已刪除',
                    'body'  => 'The task has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Task force已刪除',
                    'body'  => 'The task has been force已刪除成功.',
                ],
            ],
        ],
    ],

    'tabs' => [
        'open-tasks'       => 'Open Tasks',
        'my-tasks'         => 'My Tasks',
        'unassigned-tasks' => 'Unassigned Tasks',
        'closed-tasks'     => 'Closed Tasks',
        'starred-tasks'    => 'Starred Tasks',
        'archived-tasks'   => 'Archived Tasks',
    ],
];
