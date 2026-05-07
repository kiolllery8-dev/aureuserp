<?php

return [
    'form' => [
        'sections' => [
            'fields' => [
                'company'            => '公司',
                'country'            => '國家',
                'name'               => '名稱',
                'preceding-subtotal' => 'Preceding Subtotal',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'company'            => '公司',
            'country'            => '國家',
            'created-by'         => '建立者',
            'name'               => '名稱',
            'preceding-subtotal' => 'Preceding Subtotal',
            'created-at'         => '建立時間',
            'updated-at'         => '更新時間',
        ],

        'groups' => [
            'name'       => '名稱',
            'company'    => '公司',
            'country'    => '國家',
            'created-by' => '建立者',
            'created-at' => '建立時間',
            'updated-at' => '更新時間',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Tax Group deleted',
                        'body'  => 'The tax group has been deleted成功.',
                    ],

                    'error' => [
                        'title' => 'Tax Group could not be deleted',
                        'body'  => 'The tax group cannot be deleted because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Tax Groups deleted',
                        'body'  => 'The tax groups has been deleted成功.',
                    ],

                    'error' => [
                        'title' => 'Tax Groups could not be deleted',
                        'body'  => 'The tax groups cannot be deleted because they are currently in use.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'entries' => [
                'company'            => '公司',
                'country'            => '國家',
                'name'               => '名稱',
                'preceding-subtotal' => 'Preceding Subtotal',
            ],
        ],
    ],
];
