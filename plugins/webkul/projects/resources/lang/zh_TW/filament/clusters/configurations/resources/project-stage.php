<?php

return [
    'navigation' => [
        'title' => '專案 階段',
    ],

    'form' => [
        'name' => '名稱',
    ],

    'table' => [
        'columns' => [
            'name'       => '名稱',
            'created-at' => '建立時間',
            'updated-at' => '更新時間',
        ],

        'groups' => [
            'name'         => '名稱',
            'is-completed' => 'Is 已完成',
            'project'      => '專案',
            'created-at'   => '建立時間',
        ],

        'filters' => [
            'is-completed' => 'Is 已完成',
            'project'      => '專案',
            'creator'      => '建立者',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => '專案 stage已更新',
                    'body'  => 'The project stage has been已更新成功.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => '專案 stage restored',
                    'body'  => 'The project stage has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => '專案 stage已刪除',
                    'body'  => 'The project stage has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => '專案 stage force已刪除',
                        'body'  => 'The project stage has been force已刪除成功.',
                    ],
                    'error' => [
                        'title' => '專案 階段  could not be已刪除',
                        'body'  => 'The 專案 階段  cannot be已刪除 because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => '專案 stages restored',
                    'body'  => 'The project stages has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => '專案 stages已刪除',
                    'body'  => 'The project stages has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => '專案 stages force已刪除',
                    'body'  => 'The project stages has been force已刪除成功.',
                ],
            ],
        ],
    ],
];
