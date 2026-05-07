<?php

return [
    'form' => [
        'sections' => [
            'fields' => [
                'skill-type'  => '技能類別',
                'skill'       => '技能',
                'skill-level' => '技能等級',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'skill-type'    => '技能類別',
            'skill'         => '技能',
            'skill-level'   => '技能等級',
            'level-percent' => 'Level Percent',
            'created-by'    => '建立者',
            'user'          => '使用者',
            'created-at'    => '建立時間',
        ],

        'groups' => [
            'skill-type' => '技能類別',
        ],

        'header-actions' => [
            'add-skill' => '新增技能',
        ],

        'filters' => [
            'activity-type'   => '活動類型',
            'activity-status' => '活動狀態',
            'has-delay'       => 'Has Delay',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => '技能已更新',
                    'body'  => 'The skill has been已更新成功.',
                ],
            ],

            'create' => [
                'notification' => [
                    'title' => '技能已建立',
                    'body'  => 'The skill has been已建立成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => '技能已刪除',
                    'body'  => 'The skill has been已刪除成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => '技能已刪除',
                    'body'  => 'The skills has been已刪除成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'skill-type'    => '技能類別',
            'skill'         => '技能',
            'skill-level'   => '技能等級',
            'level-percent' => 'Level Percent',
        ],
    ],
];
