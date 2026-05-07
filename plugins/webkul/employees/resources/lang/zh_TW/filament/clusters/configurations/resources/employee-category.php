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
            'color' => '顏色',
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
            'created-by' => '建立者',
            'updated-by' => '更新者',
            'updated-at' => '更新時間',
            'created-at' => '建立時間',
        ],

        'groups' => [
            'name'         => '名稱',
            'job-position' => '職位',
            'color'        => '顏色',
            'created-by'   => '建立者',
            'created-at'   => '建立時間',
            'updated-at'   => '更新時間',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Tag已更新',
                    'body'  => 'The tag has been已更新成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Tag已刪除',
                    'body'  => 'The tag has been已刪除成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Tags已刪除',
                    'body'  => 'The tags has been已刪除成功.',
                ],
            ],
        ],

        'empty-state-action' => [
            'create' => [
                'notification' => [
                    'title' => 'Tag已建立',
                    'body'  => 'The tag has been已建立成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'name'  => '名稱',
        'color' => '顏色',
    ],
];
