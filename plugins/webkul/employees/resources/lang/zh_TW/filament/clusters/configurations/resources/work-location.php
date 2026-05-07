<?php

return [
    'title' => '工作地點',

    'navigation' => [
        'title' => '工作地點',
        'group' => '員工',
    ],

    'form' => [
        'name'            => '名稱',
        'company'         => '公司',
        'location-type'   => 'Location類型',
        'location-number' => '位置號碼',
        'status'          => '狀態',
    ],

    'table' => [
        'columns' => [
            'id'              => '編號',
            'name'            => '名稱',
            'status'          => '狀態',
            'company'         => '公司',
            'location-type'   => 'Location類型',
            'location-number' => '位置號碼',
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
            'location-number' => '位置號碼',
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
                    'body'  => 'The work Location has been已更新成功.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => '工作地點已還原',
                    'body'  => 'The work Location has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Work Location已刪除',
                    'body'  => 'The work Location has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Work Location force已刪除',
                    'body'  => 'The work Location has been force已刪除成功.',
                ],
            ],

            'empty-state' => [
                'notification' => [
                    'title' => 'Work Location已建立',
                    'body'  => 'The Work Location has been已建立成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Work Locations已刪除',
                    'body'  => 'The work Locations has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Work Locations force已刪除',
                    'body'  => 'The work Locations has been force已刪除成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'name'            => '名稱',
        'company'         => '公司',
        'location-type'   => 'Location類型',
        'location-number' => '位置號碼',
        'status'          => '狀態',
    ],
];
