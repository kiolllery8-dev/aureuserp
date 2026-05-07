<?php

return [
    'table' => [
        'header-actions' => [
            'create' => [
                'label' => '新增Sub 任務',

                'notification' => [
                    'title' => 'Task已建立',
                    'body'  => 'The task has been已建立成功.',
                ],
            ],
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => '任務 restored',
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
                    'title' => '任務 force已刪除',
                    'body'  => 'The task has been force已刪除成功.',
                ],
            ],
        ],
    ],
];
