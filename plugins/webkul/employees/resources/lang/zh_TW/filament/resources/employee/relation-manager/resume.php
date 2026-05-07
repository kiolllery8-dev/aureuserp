<?php

return [
    'form' => [
        'sections' => [
            'fields' => [
                'title'        => '標題',
                'type'         => '類型',
                'name'         => '名稱',
                'type'         => '類型',
                'create-type'  => '新增Type',
                'duration'     => 'Duration',
                'start-date'   => '開始日期',
                'end-date'     => '結束日期',
                'display-type' => '顯示類型',
                'description'  => '描述',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'title'        => '標題',
            'start-date'   => '開始日期',
            'end-date'     => '結束日期',
            'display-type' => '顯示類型',
            'description'  => '描述',
            'created-by'   => '建立者',
            'created-at'   => '建立時間',
            'updated-at'   => '更新時間',
        ],

        'groups' => [
            'group-by-type'         => '群組依據類型',
            'group-by-display-type' => '群組依據 Display類型',
        ],

        'header-actions' => [
            'add-resume' => '新增Resume',
        ],

        'filters' => [
            'type'            => '類型',
            'start-date-from' => 'Start日期 From',
            'start-date-to'   => 'Start日期 To',
            'created-from'    => 'Created From',
            'created-to'      => 'Created To',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => '技能 Level已更新',
                    'body'  => 'The skill level has been已更新成功.',
                ],
            ],

            'create' => [
                'notification' => [
                    'title' => '技能 Level已建立',
                    'body'  => 'The skill level has been已建立成功.',
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
                    'title' => 'Skills已刪除',
                    'body'  => 'The skills has been已刪除成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'title'        => '標題',
            'display-type' => '顯示類型',
            'type'         => '類型',
            'description'  => '描述',
            'duration'     => 'Duration',
            'start-date'   => '開始日期',
            'end-date'     => '結束日期',
        ],
    ],
];
