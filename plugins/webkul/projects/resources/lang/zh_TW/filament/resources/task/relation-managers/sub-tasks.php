<?php

return [
    'table' => [
        'header-actions' => [
            'create' => [
                'label' => 'Add Sub Task',

                'notification' => [
                    'title' => 'Task created',
                    'body'  => 'The task has been created成功.',
                ],
            ],
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Task restored',
                    'body'  => 'The task has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Task deleted',
                    'body'  => 'The task has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Task force deleted',
                    'body'  => 'The task has been force deleted成功.',
                ],
            ],
        ],
    ],
];
