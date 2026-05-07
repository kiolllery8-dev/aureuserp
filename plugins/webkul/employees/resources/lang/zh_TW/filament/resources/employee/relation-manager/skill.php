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
            'add-skill' => 'Add Skill',
        ],

        'filters' => [
            'activity-type'   => 'Activity Type',
            'activity-status' => 'Activity Status',
            'has-delay'       => 'Has Delay',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Skill updated',
                    'body'  => 'The skill has been updated成功.',
                ],
            ],

            'create' => [
                'notification' => [
                    'title' => 'Skill created',
                    'body'  => 'The skill has been created成功.',
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
