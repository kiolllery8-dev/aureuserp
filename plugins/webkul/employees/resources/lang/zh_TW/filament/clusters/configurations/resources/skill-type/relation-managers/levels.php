<?php

return [
    'form' => [
        'name'          => '名稱',
        'level'         => '等級',
        'default-level' => '預設等級',
    ],

    'table' => [
        'columns' => [
            'name'          => '名稱',
            'level'         => '等級',
            'default-level' => '預設等級',
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
                    'title' => 'Skill Level已建立',
                    'body'  => 'The skill level has been已建立成功.',
                ],
            ],

            'edit' => [
                'notification' => [
                    'title' => 'Skill Level已更新',
                    'body'  => 'The skill level has been已更新成功.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => '技能等級已還原',
                    'body'  => 'The skill level has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Skill Level已刪除',
                    'body'  => 'The skill level has been已刪除成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Skill Levels已刪除',
                    'body'  => 'The skills has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Skill Levels force已刪除',
                    'body'  => 'The skills has been force已刪除成功.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => '技能等級已強制還原',
                    'body'  => 'The skills has been force restored成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name'          => '名稱',
            'level'         => '等級',
            'default-level' => '預設等級',
        ],
    ],
];
