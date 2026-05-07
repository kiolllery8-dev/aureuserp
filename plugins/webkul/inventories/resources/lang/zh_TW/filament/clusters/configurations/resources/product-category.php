<?php

return [
    'navigation' => [
        'title' => '分類',
        'group' => '商品',
    ],

    'form' => [
        'sections' => [
            'inventory' => [
                'title' => '庫存',

                'fieldsets' => [
                    'logistics' => [
                        'title' => '物流',

                        'fields' => [
                            'routes' => '路徑',
                        ],
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'inventory' => [
                'title' => '庫存',

                'subsections' => [
                    'logistics' => [
                        'title' => '物流',

                        'entries' => [
                            'routes'     => '倉庫路線',
                            'route_name' => 'Route名稱',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
