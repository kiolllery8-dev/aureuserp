<?php

return [
    'title' => '媒介',

    'navigation' => [
        'title' => '媒介',
        'group' => 'UTM 追蹤',
    ],

    'form' => [
        'fields' => [
            'name'             => '名稱',
            'name-placeholder' => '輸入媒介名稱',
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
            'created-by' => '建立者',
            'updated-at' => '更新時間',
            'created-at' => '建立時間',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Medium已更新',
                    'body'  => 'The medium has been已更新成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Medium已刪除',
                    'body'  => 'The medium has been已刪除成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Mediums已刪除',
                    'body'  => 'The Mediums has been已刪除成功.',
                ],
            ],
        ],

        'empty-state-action' => [
            'create' => [
                'notification' => [
                    'title' => 'Medium已建立',
                    'body'  => 'The medium has been已建立成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'name' => '名稱',
    ],
];
