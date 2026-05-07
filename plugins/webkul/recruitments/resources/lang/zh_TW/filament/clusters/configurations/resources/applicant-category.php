<?php

return [
    'title' => '標籤',

    'navigation' => [
        'title' => '標籤',
        'group' => 'Applications',
    ],

    'form' => [
        'fields' => [
            'name'             => '名稱',
            'name-placeholder' => 'Enter the name of the tags',
            'color'            => 'Color',
        ],
    ],

    'table' => [
        'columns' => [
            'id'         => 'ID',
            'name'       => '名稱',
            'color'      => 'Color',
            'created-by' => '建立者',
            'created-at' => '建立時間',
            'updated-at' => '更新時間',
        ],

        'filters' => [
            'name'       => '名稱',
            'employee'   => 'Employee',
            'created-by' => '建立者',
            'updated-at' => '更新時間',
            'created-at' => '建立時間',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Tags updated',
                    'body'  => 'The tags has been updated成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Tags deleted',
                    'body'  => 'The tags has been deleted成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Applicant Categories deleted',
                    'body'  => 'The applicant Categories has been deleted成功.',
                ],
            ],
        ],

        'empty-state-action' => [
            'create' => [
                'notification' => [
                    'title' => 'Tags created',
                    'body'  => 'The tags has been created成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'name'  => '名稱',
        'color' => 'Color',
    ],
];
