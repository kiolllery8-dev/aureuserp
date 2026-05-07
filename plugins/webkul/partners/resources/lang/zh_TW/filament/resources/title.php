<?php

return [
    'form' => [
        'name'       => '名稱',
        'short-name' => 'Short名稱',
    ],

    'table' => [
        'columns' => [
            'name'       => '名稱',
            'short-name' => 'Short名稱',
            'created-at' => '建立時間',
            'updated-at' => '更新時間',
        ],

        'filters' => [
            'creator' => '建立者',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Title已更新',
                    'body'  => 'The 標題 has been已更新成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Title已刪除',
                    'body'  => 'The title has been已刪除成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Titles已刪除',
                    'body'  => 'The titles has been已刪除成功.',
                ],
            ],
        ],
    ],
];
