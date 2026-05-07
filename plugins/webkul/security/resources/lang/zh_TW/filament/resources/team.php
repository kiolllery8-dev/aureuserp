<?php

return [
    'title' => 'Teams',

    'navigation' => [
        'title' => 'Teams',
        'group' => '設定',
    ],

    'form' => [
        'fields' => [
            'name' => '名稱',
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => '名稱',
            'created-by' => '建立者',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Team updated',
                    'body'  => 'The team has been updated成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Team deleted',
                    'body'  => 'The team has been deleted成功.',
                ],
            ],
        ],

        'empty-state-actions' => [
            'create' => [
                'notification' => [
                    'title' => 'Teams created',
                    'body'  => 'The teams has been created成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'entries' => [
                'name'          => '名稱',
                'job-title'     => 'Job Title',
                'work-email'    => 'Work Email',
                'work-mobile'   => 'Work Mobile',
                'work-phone'    => 'Work Phone',
                'manager'       => 'Manager',
                'department'    => '部門',
                'job-position'  => '職位',
                'team-tags'     => 'Team Tags',
                'coach'         => 'Coach',
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name' => '名稱',
        ],
    ],
];
