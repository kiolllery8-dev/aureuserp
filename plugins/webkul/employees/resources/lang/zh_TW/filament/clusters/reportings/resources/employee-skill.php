<?php

return [
    'title' => '技能',

    'navigation' => [
        'title' => '技能',
    ],

    'form' => [
        'sections' => [
            'skill-details' => [
                'title' => 'Skill Details',

                'fields' => [
                    'employee'       => 'Employee',
                    'skill'          => '技能',
                    'skill-level'    => 'Level',
                    'skill-type'     => '技能類別',
                ],
            ],
            'addition-information' => [
                'title' => 'Additional Information',

                'fields' => [
                    'created-by' => '建立者',
                    'updated-by' => '更新者',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'id'              => 'ID',
            'employee'        => 'Employee',
            'skill'           => '技能',
            'skill-level'     => 'Level',
            'skill-type'      => '技能類別',
            'user'            => '使用者',
            'proficiency'     => 'Proficiency',
            'created-by'      => '建立者',
            'created-at'      => '建立時間',
        ],

        'filters' => [
            'employee'        => 'Employee',
            'skill'           => '技能',
            'skill-level'     => 'Level',
            'skill-type'      => '技能類別',
            'user'            => '使用者',
            'created-by'      => '建立者',
            'created-at'      => '建立時間',
            'updated-at'      => '更新時間',
        ],

        'groups' => [
            'employee'   => 'Employee',
            'skill-type' => '技能類別',
        ],
    ],

    'infolist' => [
        'sections' => [
            'skill-details' => [
                'title' => 'Skill Details',

                'entries' => [
                    'employee'        => 'Employee',
                    'skill'           => '技能',
                    'skill-level'     => 'Level',
                    'skill-type'      => '技能類別',
                ],
            ],

            'additional-information' => [
                'title' => 'Additional Information',

                'entries' => [
                    'created-by' => '建立者',
                    'updated-by' => '更新者',
                ],
            ],
        ],
    ],
];
