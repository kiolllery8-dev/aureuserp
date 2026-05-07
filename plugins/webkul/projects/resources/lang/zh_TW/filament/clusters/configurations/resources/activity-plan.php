<?php

return [
    'navigation' => [
        'title' => 'Activity Plans',
    ],

    'form' => [
        'name'   => '名稱',
        'status' => '狀態',
    ],

    'table' => [
        'columns' => [
            'name'       => '名稱',
            'status'     => '狀態',
            'created-at' => '建立時間',
            'updated-at' => '更新時間',
        ],

        'groups' => [
            'name'       => '名稱',
            'status'     => '狀態',
            'created-at' => '建立時間',
            'updated-at' => '更新時間',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Activity Plan restored',
                    'body'  => 'The activity plan has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Activity Plan deleted',
                    'body'  => 'The activity plan has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Activity Plan force deleted',
                    'body'  => 'The activity plan has been force deleted成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Activity Plans restored',
                    'body'  => 'The activity plans has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Activity Plans deleted',
                    'body'  => 'The activity plans has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Activity Plans force deleted',
                    'body'  => 'The activity plans has been force deleted成功.',
                ],
            ],
        ],

        'empty-state' => [
            'create' => [
                'notification' => [
                    'title' => 'Activity Plan created',
                    'body'  => 'The activity plan has been created成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'name'   => '名稱',
        'status' => '狀態',
    ],
];
