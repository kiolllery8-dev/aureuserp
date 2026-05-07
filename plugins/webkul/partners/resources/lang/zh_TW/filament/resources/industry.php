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
                    'title' => 'Industry已更新',
                    'body'  => 'The industry has been已更新成功.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => '產業已還原',
                    'body'  => 'The industry has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Industry已刪除',
                    'body'  => 'The industry has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Industry force已刪除',
                    'body'  => 'The industry has been force已刪除成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => '產業已還原',
                    'body'  => 'The industries has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Industries已刪除',
                    'body'  => 'The industries has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Industries force已刪除',
                    'body'  => 'The industries has been force已刪除成功.',
                ],
            ],
        ],
    ],
];
