<?php

return [
    'title' => 'Work Locations',

    'navigation' => [
        'title' => 'Work Locations',
        'group' => 'Employee',
    ],

    'form' => [
        'name'            => '名稱',
        'company'         => '公司',
        'location-type'   => 'Location Type',
        'location-number' => 'Location Number',
        'status'          => '狀態',
    ],

    'table' => [
        'columns' => [
            'id'              => 'ID',
            'name'            => '名稱',
            'status'          => '狀態',
            'company'         => '公司',
            'location-type'   => 'Location Type',
            'location-number' => 'Location Number',
            'deleted-at'      => 'Deleted At',
            'created-by'      => '建立者',
            'created-at'      => '建立時間',
            'updated-at'      => '更新時間',
        ],

        'filters' => [
            'name'            => '名稱',
            'status'          => '狀態',
            'created-by'      => '建立者',
            'company'         => '公司',
            'location-number' => 'Location Number',
            'location-type'   => 'Location Type',
            'updated-at'      => '更新時間',
            'created-at'      => '建立時間',
        ],

        'groups' => [
            'name'          => '名稱',
            'status'        => '狀態',
            'location-type' => 'Location Type',
            'company'       => '公司',
            'created-by'    => '建立者',
            'created-at'    => '建立時間',
            'updated-at'    => '更新時間',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Work Location updated',
                    'body'  => 'The work Location has been updated成功.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Work Location restored',
                    'body'  => 'The work Location has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Work Location deleted',
                    'body'  => 'The work Location has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Work Location force deleted',
                    'body'  => 'The work Location has been force deleted成功.',
                ],
            ],

            'empty-state' => [
                'notification' => [
                    'title' => 'Work Location created',
                    'body'  => 'The Work Location has been created成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Work Locations deleted',
                    'body'  => 'The work Locations has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Work Locations force deleted',
                    'body'  => 'The work Locations has been force deleted成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'name'            => '名稱',
        'company'         => '公司',
        'location-type'   => 'Location Type',
        'location-number' => 'Location Number',
        'status'          => '狀態',
    ],
];
