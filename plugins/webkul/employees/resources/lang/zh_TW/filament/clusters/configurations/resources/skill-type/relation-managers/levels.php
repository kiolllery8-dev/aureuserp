<?php

return [
    'form' => [
        'name'          => '名稱',
        'level'         => 'Level',
        'default-level' => '預設 Level',
    ],

    'table' => [
        'columns' => [
            'name'          => '名稱',
            'level'         => 'Level',
            'default-level' => '預設 Level',
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
                    'title' => '技能 Level已建立',
                    'body'  => 'The skill level has been已建立成功.',
                ],
            ],

            'edit' => [
                'notification' => [
                    'title' => '技能 Level已更新',
                    'body'  => 'The skill level has been已更新成功.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => '技能 Level restored',
                    'body'  => 'The skill level has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => '技能 Level已刪除',
                    'body'  => 'The skill level has been已刪除成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => '技能 Levels已刪除',
                    'body'  => 'The skills has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => '技能 Levels force已刪除',
                    'body'  => 'The skills has been force已刪除成功.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => '技能 Levels force restored',
                    'body'  => 'The skills has been force restored成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name'          => '名稱',
            'level'         => 'Level',
            'default-level' => '預設 Level',
        ],
    ],
];
