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
                    'title' => 'Team已更新',
                    'body'  => 'The team has been已更新成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Team已刪除',
                    'body'  => 'The team has been已刪除成功.',
                ],
            ],
        ],

        'empty-state-actions' => [
            'create' => [
                'notification' => [
                    'title' => 'Teams已建立',
                    'body'  => 'The teams has been已建立成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'entries' => [
                'name'          => '名稱',
                'job-title'     => '職稱',
                'work-email'    => 'Work 電子郵件',
                'work-mobile'   => 'Work 行動電話',
                'work-phone'    => 'Work 電話',
                'manager'       => '主管',
                'department'    => '部門',
                'job-position'  => '職位',
                'team-tags'     => 'Team 標籤',
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
