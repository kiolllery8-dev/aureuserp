<?php

return [
    'navigation' => [
        'title' => '標籤',
        'group' => '部落格',
    ],

    'form' => [
        'name'  => '名稱',
        'color' => 'Color',
    ],

    'table' => [
        'columns' => [
            'name'       => '名稱',
            'color'      => 'Color',
            'created-at' => '建立時間',
            'updated-at' => '更新時間',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Tag updated',
                    'body'  => 'The tag has been updated成功.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Tag restored',
                    'body'  => 'The tag has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Tag deleted',
                    'body'  => 'The tag has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Tag force deleted',
                    'body'  => 'The tag has been force deleted成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Tags restored',
                    'body'  => 'The tags has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Tags deleted',
                    'body'  => 'The tags has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Tags force deleted',
                    'body'  => 'The tags has been force deleted成功.',
                ],
            ],
        ],
    ],
];
