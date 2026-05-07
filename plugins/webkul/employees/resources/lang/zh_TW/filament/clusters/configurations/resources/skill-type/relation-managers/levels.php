<?php

return [
    'form' => [
        'name'          => '名稱',
        'level'         => 'Level',
        'default-level' => 'Default Level',
    ],

    'table' => [
        'columns' => [
            'name'          => '名稱',
            'level'         => 'Level',
            'default-level' => 'Default Level',
            'created-at'    => '建立時間',
            'updated-at'    => '更新時間',
        ],

        'groups' => [
            'created-at' => '建立時間',
        ],

        'filters' => [
            'deleted-records' => 'Deleted記錄',
        ],

        'actions' => [
            'create' => [
                'notification' => [
                    'title' => 'Skill Level created',
                    'body'  => 'The skill level has been created成功.',
                ],
            ],

            'edit' => [
                'notification' => [
                    'title' => 'Skill Level updated',
                    'body'  => 'The skill level has been updated成功.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Skill Level restored',
                    'body'  => 'The skill level has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Skill Level deleted',
                    'body'  => 'The skill level has been deleted成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Skill Levels deleted',
                    'body'  => 'The skills has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Skill Levels force deleted',
                    'body'  => 'The skills has been force deleted成功.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Skill Levels force restored',
                    'body'  => 'The skills has been force restored成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name'          => '名稱',
            'level'         => 'Level',
            'default-level' => 'Default Level',
        ],
    ],
];
