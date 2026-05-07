<?php

return [
    'form' => [
        'sections' => [
            'fields' => [
                'title'        => '標題',
                'type'         => '類型',
                'name'         => '名稱',
                'type'         => '類型',
                'create-type'  => 'Create Type',
                'duration'     => 'Duration',
                'start-date'   => '開始日期',
                'end-date'     => '結束日期',
                'display-type' => 'Display Type',
                'description'  => '描述',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'title'        => '標題',
            'start-date'   => '開始日期',
            'end-date'     => '結束日期',
            'display-type' => 'Display Type',
            'description'  => '描述',
            'created-by'   => '建立者',
            'created-at'   => '建立時間',
            'updated-at'   => '更新時間',
        ],

        'groups' => [
            'group-by-type'         => 'Group By Type',
            'group-by-display-type' => 'Group By Display Type',
        ],

        'header-actions' => [
            'add-resume' => 'Add Resume',
        ],

        'filters' => [
            'type'            => '類型',
            'start-date-from' => 'Start Date From',
            'start-date-to'   => 'Start Date To',
            'created-from'    => 'Created From',
            'created-to'      => 'Created To',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Skill Level updated',
                    'body'  => 'The skill level has been updated成功.',
                ],
            ],

            'create' => [
                'notification' => [
                    'title' => 'Skill Level created',
                    'body'  => 'The skill level has been created成功.',
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
                    'title' => 'Skills deleted',
                    'body'  => 'The skills has been deleted成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'title'        => '標題',
            'display-type' => 'Display Type',
            'type'         => '類型',
            'description'  => '描述',
            'duration'     => 'Duration',
            'start-date'   => '開始日期',
            'end-date'     => '結束日期',
        ],
    ],
];
