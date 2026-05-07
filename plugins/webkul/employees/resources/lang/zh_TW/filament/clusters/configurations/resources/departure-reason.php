<?php

return [
    'title' => 'Departure Reasons',

    'navigation' => [
        'title' => 'Departure Reasons',
        'group' => 'Employee',
    ],

    'groups' => [
        'status'     => '狀態',
        'created-by' => '建立者',
        'created-at' => '建立時間',
        'updated-at' => '更新時間',
    ],

    'form' => [
        'fields' => [
            'name' => '名稱',
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
                    'title' => 'Departure reason updated',
                    'body'  => 'The departure reason has been updated成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Departure reason deleted',
                    'body'  => 'The departure reason has been deleted成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Departure reasons deleted',
                    'body'  => 'The departure reasons has been deleted成功.',
                ],
            ],
        ],

        'empty-state-action' => [
            'create' => [
                'notification' => [
                    'title' => 'Departure reason created',
                    'body'  => 'The departure reason has been created成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'name' => '名稱',
    ],
];
