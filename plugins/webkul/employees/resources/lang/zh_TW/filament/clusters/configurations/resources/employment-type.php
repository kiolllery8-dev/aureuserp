<?php

return [
    'title' => 'Employment Types',

    'navigation' => [
        'title' => 'Employment Types',
        'group' => '招募',
    ],

    'form' => [
        'fields' => [
            'name'    => 'Employment Type',
            'code'    => '代碼',
            'country' => '國家',
        ],
    ],

    'table' => [
        'columns' => [
            'id'         => 'ID',
            'name'       => 'Employment Type',
            'code'       => '代碼',
            'country'    => '國家',
            'created-by' => '建立者',
            'created-at' => '建立時間',
            'updated-at' => '更新時間',
        ],

        'filters' => [
            'name'       => 'Employment Type',
            'country'    => '國家',
            'created-by' => '建立者',
            'updated-at' => '更新時間',
            'created-at' => '建立時間',
        ],

        'groups' => [
            'name'       => 'Employment Type',
            'country'    => '國家',
            'code'       => '代碼',
            'created-by' => '建立者',
            'created-at' => '建立時間',
            'updated-at' => '更新時間',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Employment Type',
                    'body'  => 'The Employment Type has been edited成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Employment Type deleted',
                    'body'  => 'The Employment Type has been deleted成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Employment Types deleted',
                    'body'  => 'The Employment Types has been deleted成功.',
                ],
            ],
        ],

        'empty-state-actions' => [
            'create' => [
                'notification' => [
                    'title' => 'Employment Types',
                    'body'  => 'The Employment Types has been created成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name'    => 'Employment Type',
            'code'    => '代碼',
            'country' => '國家',
        ],
    ],
];
