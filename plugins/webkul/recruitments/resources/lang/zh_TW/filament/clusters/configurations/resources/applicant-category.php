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
            'color'            => '顏色',
        ],
    ],

    'table' => [
        'columns' => [
            'id'         => '編號',
            'name'       => '名稱',
            'color'      => '顏色',
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
                    'title' => 'Tags已更新',
                    'body'  => 'The tags has been已更新成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Tags已刪除',
                    'body'  => 'The tags has been已刪除成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Applicant Categories已刪除',
                    'body'  => 'The applicant Categories has been已刪除成功.',
                ],
            ],
        ],

        'empty-state-action' => [
            'create' => [
                'notification' => [
                    'title' => 'Tags已建立',
                    'body'  => 'The tags has been已建立成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'name'  => '名稱',
        'color' => '顏色',
    ],
];
