<?php

return [
    'navigation' => [
        'title' => 'Storage Categories',
        'group' => 'Warehouse Management',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => '一般',

                'fields' => [
                    'name'               => '名稱',
                    'allow-new-products' => 'Allow 新增Products',
                    'max-weight'         => 'Max Weight',
                    'company'            => '公司',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'               => '名稱',
            'allow-new-products' => 'Allow 新增Products',
            'max-weight'         => 'Max Weight',
            'company'            => '公司',
            'deleted-at'         => 'Deleted At',
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
                    'title' => 'Storage Category deleted',
                    'body'  => 'The storage category has been deleted成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Storage Categories deleted',
                    'body'  => 'The storage categories has been deleted成功.',
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
                    'max-weight'         => 'Max Weight',
                    'company'            => '公司',
                ],
            ],

            'record-information' => [
                'title' => 'Record Information',

                'entries' => [
                    'created-by'   => '建立者',
                    'created-at'   => '建立時間',
                    'last-updated' => 'Last Updated',
                ],
            ],
        ],
    ],
];
