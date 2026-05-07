<?php

return [
    'navigation' => [
        'title' => '里程碑',
    ],

    'form' => [
        'name'         => '名稱',
        'deadline'     => '截止日',
        'is-completed' => 'Is Completed',
        'project'      => '專案',
    ],

    'table' => [
        'columns' => [
            'name'         => '名稱',
            'deadline'     => '截止日',
            'is-completed' => 'Is Completed',
            'completed-at' => 'Completed At',
            'project'      => '專案',
            'creator'      => 'Creator',
            'created-at'   => '建立時間',
            'updated-at'   => '更新時間',
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
                    'title' => 'Milestone update',
                    'body'  => 'The milestone has been update成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Milestone deleted',
                    'body'  => 'The milestone has been deleted成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Milestones deleted',
                    'body'  => 'The milestones has been deleted成功.',
                ],
            ],
        ],
    ],
];
