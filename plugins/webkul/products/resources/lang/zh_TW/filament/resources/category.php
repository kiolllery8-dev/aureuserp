<?php

return [
    'form' => [
        'sections' => [
            'general' => [
                'title'  => '一般',

                'fields' => [
                    'name'             => '名稱',
                    'name-placeholder' => 'eg. Lamps',
                    'parent'           => '上層',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'        => '名稱',
            'full-name'   => '姓名',
            'parent-path' => 'Parent Path',
            'parent'      => '上層',
            'creator'     => '建立者',
            'created-at'  => '建立時間',
            'created-at'  => '建立時間',
            'updated-at'  => '更新時間',
        ],

        'groups' => [
            'parent'     => '上層',
            'creator'    => '建立者',
            'created-at' => '建立時間',
            'updated-at' => '更新時間',
        ],

        'filters' => [
            'parent'  => '上層',
            'creator' => '建立者',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => '分類已刪除',
                        'body'  => 'The 分類 has been已刪除成功.',
                    ],

                    'error' => [
                        'title' => '分類 could not be已刪除',
                        'body'  => 'The category cannot be已刪除 because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => '分類已刪除',
                        'body'  => 'The categories has been已刪除成功.',
                    ],

                    'error' => [
                        'title' => '分類 could not be已刪除',
                        'body'  => 'The categories cannot be已刪除 because they are currently in use.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => '一般資料',

                'entries' => [
                    'name'        => '名稱',
                    'parent'      => 'Parent 分類',
                    'full_name'   => 'Full 分類名稱',
                    'parent_path' => '分類 Path',
                ],
            ],

            'record-information' => [
                'title' => '紀錄資料',

                'entries' => [
                    'creator'    => '建立者',
                    'created_at' => '建立時間',
                    'updated_at' => 'Last Updated At',
                ],
            ],
        ],
    ],
];
