<?php

return [
    'title' => 'Work 位置',

    'navigation' => [
        'title' => 'Work 位置',
        'group' => '員工',
    ],

    'form' => [
        'name'            => '名稱',
        'company'         => '公司',
        'location-type'   => 'Location類型',
        'location-number' => '位置 編號',
        'status'          => '狀態',
    ],

    'table' => [
        'columns' => [
            'id'              => '編號',
            'name'            => '名稱',
            'status'          => '狀態',
            'company'         => '公司',
            'location-type'   => 'Location類型',
            'location-number' => '位置 編號',
            'deleted-at'      => '刪除時間',
            'created-by'      => '建立者',
            'created-at'      => '建立時間',
            'updated-at'      => '更新時間',
        ],

        'filters' => [
            'name'            => '名稱',
            'status'          => '狀態',
            'created-by'      => '建立者',
            'company'         => '公司',
            'location-number' => '位置 編號',
            'location-type'   => 'Location類型',
            'updated-at'      => '更新時間',
            'created-at'      => '建立時間',
        ],

        'groups' => [
            'name'          => '名稱',
            'status'        => '狀態',
            'location-type' => 'Location類型',
            'company'       => '公司',
            'created-by'    => '建立者',
            'created-at'    => '建立時間',
            'updated-at'    => '更新時間',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Work Location已更新',
                    'body'  => 'The work 位置 has been已更新成功.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Work 位置 restored',
                    'body'  => 'The work 位置 has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Work Location已刪除',
                    'body'  => 'The work 位置 has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Work 位置 force已刪除',
                    'body'  => 'The work 位置 has been force已刪除成功.',
                ],
            ],

            'empty-state' => [
                'notification' => [
                    'title' => 'Work Location已建立',
                    'body'  => 'The Work 位置 has been已建立成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Work Locations已刪除',
                    'body'  => 'The work 位置 has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Work 位置 force已刪除',
                    'body'  => 'The work 位置 has been force已刪除成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'name'            => '名稱',
        'company'         => '公司',
        'location-type'   => 'Location類型',
        'location-number' => '位置 編號',
        'status'          => '狀態',
    ],
];
