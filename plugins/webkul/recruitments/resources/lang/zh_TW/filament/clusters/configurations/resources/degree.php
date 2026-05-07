<?php

return [
    'title' => 'Degrees',

    'navigation' => [
        'title' => 'Degrees',
        'group' => 'Applications',
    ],

    'groups' => [
        'status'     => '狀態',
        'created-by' => '建立者',
        'created-at' => '建立時間',
        'updated-at' => '更新時間',
    ],

    'form' => [
        'fields' => [
            'name'             => '名稱',
            'name-placeholder' => 'Enter the name of the degree',
        ],
    ],

    'table' => [
        'columns' => [
            'id'         => 'ID',
            'name'       => '名稱',
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
                    'title' => 'Degree updated',
                    'body'  => 'The degree has been updated成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Degree deleted',
                    'body'  => 'The degree has been deleted成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Degrees deleted',
                    'body'  => 'The degrees has been deleted成功.',
                ],
            ],
        ],

        'empty-state-action' => [
            'create' => [
                'notification' => [
                    'title' => 'Degree created',
                    'body'  => 'The degree has been created成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'name' => '名稱',
    ],
];
