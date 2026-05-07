<?php

return [
    'navigation' => [
        'title' => '標籤',
    ],

    'form' => [
        'name'  => '名稱',
        'color' => '顏色',
    ],

    'table' => [
        'columns' => [
            'name'       => '名稱',
            'color'      => '顏色',
            'created-at' => '建立時間',
            'updated-at' => '更新時間',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Tag已更新',
                    'body'  => 'The tag has been已更新成功.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => '標籤 restored',
                    'body'  => 'The tag has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Tag已刪除',
                    'body'  => 'The tag has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => '標籤 force已刪除',
                    'body'  => 'The tag has been force已刪除成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => '標籤 restored',
                    'body'  => 'The tags has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Tags已刪除',
                    'body'  => 'The tags has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => '標籤 force已刪除',
                    'body'  => 'The tags has been force已刪除成功.',
                ],
            ],
        ],
    ],
];
