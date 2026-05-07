<?php

return [
    'title' => '來源',

    'navigation' => [
        'title' => '來源',
        'group' => 'UTM',
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
            'name-placeholder' => '輸入來源名稱',
            'status'           => '狀態',
        ],
    ],

    'table' => [
        'columns' => [
            'id'         => '編號',
            'name'       => '名稱',
            'status'     => '狀態',
            'created-by' => '建立者',
            'created-at' => '建立時間',
            'updated-at' => '更新時間',
        ],

        'filters' => [
            'name'       => '名稱',
            'created-by' => '建立者',
            'updated-at' => '更新時間',
            'created-at' => '建立時間',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Source已更新',
                    'body'  => 'The source has been已更新成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Source已刪除',
                    'body'  => 'The source has been已刪除成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Sources已刪除',
                    'body'  => 'The Sources has been已刪除成功.',
                ],
            ],
        ],

        'empty-state-action' => [
            'create' => [
                'notification' => [
                    'title' => 'Source已建立',
                    'body'  => 'The source has been已建立成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'name' => '名稱',
    ],
];
