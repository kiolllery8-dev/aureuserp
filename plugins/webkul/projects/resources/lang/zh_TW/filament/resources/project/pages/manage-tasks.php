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
                    'title' => '任務已還原',
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
        'open-tasks'       => '進行中的任務',
        'my-tasks'         => '我的任務',
        'unassigned-tasks' => '未指派任務',
        'closed-tasks'     => '已關閉任務',
        'starred-tasks'    => '已加星標任務',
        'archived-tasks'   => '已封存任務',
    ],
];
