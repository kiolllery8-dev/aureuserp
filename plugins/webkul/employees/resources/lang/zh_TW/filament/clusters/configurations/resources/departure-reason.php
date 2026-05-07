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
            'id'         => '編號',
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
                    'title' => 'Departure reason已更新',
                    'body'  => 'The departure reason has been已更新成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Departure reason已刪除',
                    'body'  => 'The departure reason has been已刪除成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Departure reasons已刪除',
                    'body'  => 'The departure reasons has been已刪除成功.',
                ],
            ],
        ],

        'empty-state-action' => [
            'create' => [
                'notification' => [
                    'title' => 'Departure reason已建立',
                    'body'  => 'The departure reason has been已建立成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'name' => '名稱',
    ],
];
