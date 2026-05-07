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
                        'title' => 'Logistics',

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
                        'title' => 'Logistics',

                        'entries' => [
                            'routes'     => 'Warehouse Routes',
                            'route_name' => 'Route Name',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
