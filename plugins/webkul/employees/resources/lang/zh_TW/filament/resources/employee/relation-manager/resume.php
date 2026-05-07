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
                'duration'     => '持續時間',
                'start-date'   => '開始日期',
                'end-date'     => '結束日期',
                'display-type' => '顯示類型',
                'description'  => '說明',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'title'        => '標題',
            'start-date'   => '開始日期',
            'end-date'     => '結束日期',
            'display-type' => '顯示類型',
            'description'  => '說明',
            'created-by'   => '建立者',
            'created-at'   => '建立時間',
            'updated-at'   => '更新時間',
        ],

        'groups' => [
            'group-by-type'         => 'Group By類型',
            'group-by-display-type' => 'Group By Display類型',
        ],

        'header-actions' => [
            'add-resume' => '新增Resume',
        ],

        'filters' => [
            'type'            => '類型',
            'start-date-from' => 'Start日期 From',
            'start-date-to'   => 'Start日期 To',
            'created-from'    => '建立自',
            'created-to'      => '建立至',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Skill Level已更新',
                    'body'  => 'The skill level has been已更新成功.',
                ],
            ],

            'create' => [
                'notification' => [
                    'title' => 'Skill Level已建立',
                    'body'  => 'The skill level has been已建立成功.',
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
            'description'  => '說明',
            'duration'     => '持續時間',
            'start-date'   => '開始日期',
            'end-date'     => '結束日期',
        ],
    ],
];
