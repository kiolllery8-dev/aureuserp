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
                        'title' => '稅 Group已刪除',
                        'body'  => 'The tax group has been已刪除成功.',
                    ],

                    'error' => [
                        'title' => '稅 群組 could not be已刪除',
                        'body'  => 'The tax group cannot be已刪除 because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => '稅 Groups已刪除',
                        'body'  => 'The tax groups has been已刪除成功.',
                    ],

                    'error' => [
                        'title' => '稅 群組 could not be已刪除',
                        'body'  => 'The tax groups cannot be已刪除 because they are currently in use.',
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
