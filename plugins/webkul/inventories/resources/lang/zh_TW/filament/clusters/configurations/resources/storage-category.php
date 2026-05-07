<?php

return [
    'navigation' => [
        'title' => 'Storage 分類',
        'group' => '倉庫 Management',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => '一般',

                'fields' => [
                    'name'               => '名稱',
                    'allow-new-products' => 'Allow 新增Products',
                    'max-weight'         => 'Max 重量',
                    'company'            => '公司',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'               => '名稱',
            'allow-new-products' => 'Allow 新增Products',
            'max-weight'         => 'Max 重量',
            'company'            => '公司',
            'deleted-at'         => '刪除時間',
            'created-at'         => '建立時間',
            'updated-at'         => '更新時間',
        ],

        'groups' => [
            'allow-new-products' => 'Allow 新增Products',
            'created-at'         => '建立時間',
            'updated-at'         => '更新時間',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Storage Category已刪除',
                    'body'  => 'The storage category has been已刪除成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Storage Categories已刪除',
                    'body'  => 'The storage categories has been已刪除成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title'  => '一般',

                'entries' => [
                    'name'               => '名稱',
                    'allow-new-products' => 'Allow 新增Products',
                    'max-weight'         => 'Max 重量',
                    'company'            => '公司',
                ],
            ],

            'record-information' => [
                'title' => '紀錄資料',

                'entries' => [
                    'created-by'   => '建立者',
                    'created-at'   => '建立時間',
                    'last-updated' => '最後更新',
                ],
            ],
        ],
    ],
];
