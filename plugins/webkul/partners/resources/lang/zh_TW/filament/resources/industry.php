<?php

return [
    'form' => [
        'name'      => '名稱',
        'full-name' => '姓名',
    ],

    'table' => [
        'columns' => [
            'name'       => '名稱',
            'full-name'  => '姓名',
            'created-at' => '建立時間',
            'updated-at' => '更新時間',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => '產業已更新',
                    'body'  => 'The industry has been已更新成功.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => '產業 restored',
                    'body'  => 'The industry has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => '產業已刪除',
                    'body'  => 'The industry has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => '產業 force已刪除',
                    'body'  => 'The industry has been force已刪除成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => '產業 restored',
                    'body'  => 'The industries has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => '產業已刪除',
                    'body'  => 'The industries has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => '產業 force已刪除',
                    'body'  => 'The industries has been force已刪除成功.',
                ],
            ],
        ],
    ],
];
