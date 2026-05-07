<?php

return [
    'title' => '任務',

    'header-actions' => [
        'create' => [
            'label' => '新增任務',
        ],
    ],

    'table' => [
        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => '任務 restored',
                    'body'  => 'The task has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => '任務已刪除',
                    'body'  => 'The task has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => '任務 force已刪除',
                    'body'  => 'The task has been force已刪除成功.',
                ],
            ],
        ],
    ],

    'tabs' => [
        'open-tasks'       => 'Open 任務',
        'my-tasks'         => 'My 任務',
        'unassigned-tasks' => 'Unassigned 任務',
        'closed-tasks'     => '已關閉 任務',
        'starred-tasks'    => 'Starred 任務',
        'archived-tasks'   => '已封存 任務',
    ],
];
