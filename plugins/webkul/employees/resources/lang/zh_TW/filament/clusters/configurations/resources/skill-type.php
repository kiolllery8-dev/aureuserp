<?php

return [
    'title' => '技能類別',

    'navigation' => [
        'title' => '技能類別',
        'group' => '員工',
    ],

    'form' => [
        'sections' => [
            'fields' => [
                'name'       => '名稱',
                'color'      => '顏色',
                'status'     => '狀態',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'id'         => '編號',
            'name'       => '技能類別',
            'status'     => '狀態',
            'color'      => '顏色',
            'skills'     => '技能',
            'levels'     => '等級',
            'created-by' => '建立者',
            'created-at' => '建立時間',
            'updated-at' => '更新時間',
        ],

        'filters' => [
            'skill-levels' => '技能等級',
            'skills'       => '技能',
            'created-by'   => '建立者',
            'status'       => '狀態',
            'updated-at'   => '更新時間',
            'created-at'   => '建立時間',
        ],

        'groups' => [
            'name'       => '技能類別',
            'color'      => '顏色',
            'status'     => '狀態',
            'created-by' => '建立者',
            'created-at' => '建立時間',
            'updated-at' => '更新時間',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Skill類型 restored',
                    'body'  => 'The Skill類型 has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Skill類型已刪除',
                    'body'  => 'The Skill類型 has been已刪除成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Skill類型s restored',
                    'body'  => 'The Skill類型s has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Skill類型s已刪除',
                    'body'  => 'The Skill類型s has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Skill類型s force已刪除',
                    'body'  => 'The Skill類型s has been force已刪除成功.',
                ],
            ],
        ],

        'empty-state-actions' => [
            'create' => [
                'notification' => [
                    'title' => '技能類別',
                    'body'  => 'The Skill類型s has been已建立成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'entries' => [
                'name'   => '技能類別',
                'color'  => '顏色',
                'status' => '狀態',
            ],
        ],
    ],
];
