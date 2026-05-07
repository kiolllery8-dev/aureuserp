<?php

return [
    'form' => [
        'name' => '名稱',
    ],

    'table' => [
        'columns' => [
            'name'       => '名稱',
            'created-at' => '建立時間',
            'updated-at' => '更新時間',
        ],

        'groups' => [
            'created-at' => '建立時間',
        ],

        'filters' => [
            'deleted-records' => 'Deleted記錄',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Skill已更新',
                    'body'  => 'The skill has been已更新成功.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Skill restored',
                    'body'  => 'The skill has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Skill已刪除',
                    'body'  => 'The skill has been已刪除成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Skills已刪除',
                    'body'  => 'The skills has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Skills force已刪除',
                    'body'  => 'The skills has been force已刪除成功.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Skills force restored',
                    'body'  => 'The skills has been force restored成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name' => '名稱',
        ],
    ],
];
