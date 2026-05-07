<?php

return [
    'title' => '技能類別',

    'navigation' => [
        'title' => '技能類別',
        'group' => 'Employee',
    ],

    'form' => [
        'sections' => [
            'fields' => [
                'name'       => '名稱',
                'color'      => 'Color',
                'status'     => '狀態',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'id'         => 'ID',
            'name'       => '技能類別',
            'status'     => '狀態',
            'color'      => 'Color',
            'skills'     => '技能',
            'levels'     => 'Levels',
            'created-by' => '建立者',
            'created-at' => '建立時間',
            'updated-at' => '更新時間',
        ],

        'filters' => [
            'skill-levels' => 'Skill Levels',
            'skills'       => '技能',
            'created-by'   => '建立者',
            'status'       => '狀態',
            'updated-at'   => '更新時間',
            'created-at'   => '建立時間',
        ],

        'groups' => [
            'name'       => '技能類別',
            'color'      => 'Color',
            'status'     => '狀態',
            'created-by' => '建立者',
            'created-at' => '建立時間',
            'updated-at' => '更新時間',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Skill Type restored',
                    'body'  => 'The Skill Type has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Skill Type deleted',
                    'body'  => 'The Skill Type has been deleted成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Skill Types restored',
                    'body'  => 'The Skill Types has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Skill Types deleted',
                    'body'  => 'The Skill Types has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Skill Types force deleted',
                    'body'  => 'The Skill Types has been force deleted成功.',
                ],
            ],
        ],

        'empty-state-actions' => [
            'create' => [
                'notification' => [
                    'title' => '技能類別',
                    'body'  => 'The Skill Types has been created成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'entries' => [
                'name'   => '技能類別',
                'color'  => 'Color',
                'status' => '狀態',
            ],
        ],
    ],
];
