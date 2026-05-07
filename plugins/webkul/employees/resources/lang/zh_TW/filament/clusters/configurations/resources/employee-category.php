<?php

return [
    'title' => '標籤',

    'navigation' => [
        'title' => '標籤',
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
            'name'  => '名稱',
            'color' => 'Color',
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
            'created-by' => '建立者',
            'updated-by' => '更新者',
            'updated-at' => '更新時間',
            'created-at' => '建立時間',
        ],

        'groups' => [
            'name'         => '名稱',
            'job-position' => '職位',
            'color'        => 'Color',
            'created-by'   => '建立者',
            'created-at'   => '建立時間',
            'updated-at'   => '更新時間',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Tag updated',
                    'body'  => 'The tag has been updated成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Tag deleted',
                    'body'  => 'The tag has been deleted成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Tags deleted',
                    'body'  => 'The tags has been deleted成功.',
                ],
            ],
        ],

        'empty-state-action' => [
            'create' => [
                'notification' => [
                    'title' => 'Tag created',
                    'body'  => 'The tag has been created成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'name'  => '名稱',
        'color' => 'Color',
    ],
];
