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
                    'title' => 'Skill updated',
                    'body'  => 'The skill has been updated成功.',
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
                    'title' => 'Skill deleted',
                    'body'  => 'The skill has been deleted成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Skills deleted',
                    'body'  => 'The skills has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Skills force deleted',
                    'body'  => 'The skills has been force deleted成功.',
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
