<?php

return [
    'title' => 'Employment類型s',

    'navigation' => [
        'title' => 'Employment類型s',
        'group' => '招募',
    ],

    'form' => [
        'fields' => [
            'name'    => '雇用類型',
            'code'    => '代碼',
            'country' => '國家',
        ],
    ],

    'table' => [
        'columns' => [
            'id'         => '編號',
            'name'       => '雇用類型',
            'code'       => '代碼',
            'country'    => '國家',
            'created-by' => '建立者',
            'created-at' => '建立時間',
            'updated-at' => '更新時間',
        ],

        'filters' => [
            'name'       => '雇用類型',
            'country'    => '國家',
            'created-by' => '建立者',
            'updated-at' => '更新時間',
            'created-at' => '建立時間',
        ],

        'groups' => [
            'name'       => '雇用類型',
            'country'    => '國家',
            'code'       => '代碼',
            'created-by' => '建立者',
            'created-at' => '建立時間',
            'updated-at' => '更新時間',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => '雇用類型',
                    'body'  => 'The Employment類型 has been edited成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Employment類型已刪除',
                    'body'  => 'The Employment類型 has been已刪除成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Employment類型s已刪除',
                    'body'  => 'The Employment類型s has been已刪除成功.',
                ],
            ],
        ],

        'empty-state-actions' => [
            'create' => [
                'notification' => [
                    'title' => 'Employment類型s',
                    'body'  => 'The Employment類型s has been已建立成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name'    => '雇用類型',
            'code'    => '代碼',
            'country' => '國家',
        ],
    ],
];
