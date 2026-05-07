<?php

return [
    'title' => '技能',

    'navigation' => [
        'title' => '技能',
    ],

    'form' => [
        'sections' => [
            'skill-details' => [
                'title' => '技能詳情',

                'fields' => [
                    'employee'       => '員工',
                    'skill'          => '技能',
                    'skill-level'    => '等級',
                    'skill-type'     => '技能類別',
                ],
            ],
            'addition-information' => [
                'title' => '其他資料',

                'fields' => [
                    'created-by' => '建立者',
                    'updated-by' => '更新者',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'id'              => '編號',
            'employee'        => '員工',
            'skill'           => '技能',
            'skill-level'     => '等級',
            'skill-type'      => '技能類別',
            'user'            => '使用者',
            'proficiency'     => 'Proficiency',
            'created-by'      => '建立者',
            'created-at'      => '建立時間',
        ],

        'filters' => [
            'employee'        => '員工',
            'skill'           => '技能',
            'skill-level'     => '等級',
            'skill-type'      => '技能類別',
            'user'            => '使用者',
            'created-by'      => '建立者',
            'created-at'      => '建立時間',
            'updated-at'      => '更新時間',
        ],

        'groups' => [
            'employee'   => '員工',
            'skill-type' => '技能類別',
        ],
    ],

    'infolist' => [
        'sections' => [
            'skill-details' => [
                'title' => '技能詳情',

                'entries' => [
                    'employee'        => '員工',
                    'skill'           => '技能',
                    'skill-level'     => '等級',
                    'skill-type'      => '技能類別',
                ],
            ],

            'additional-information' => [
                'title' => '其他資料',

                'entries' => [
                    'created-by' => '建立者',
                    'updated-by' => '更新者',
                ],
            ],
        ],
    ],
];
