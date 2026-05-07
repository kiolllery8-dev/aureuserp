<?php

return [
    'navigation' => [
        'group' => '設定',
        'title' => 'UOM Categories',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => '一般',

                'fields' => [
                    'name' => '名稱',
                ],
            ],

            'uoms' => [
                'title' => '計量單位',

                'fields' => [
                    'uoms'     => 'Units',
                    'type'     => '類型',
                    'name'     => '名稱',
                    'factor'   => 'Factor',
                    'rounding' => 'Rounding Precision',
                ],

                'actions' => [
                    'add' => 'Add Unit',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => '名稱',
            'uoms-count' => 'Units',
            'created-at' => '建立時間',
            'updated-at' => '更新時間',
        ],

        'groups' => [
            'created-at' => '建立時間',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'UOM Category updated',
                    'body'  => 'The UOM category has been updated成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'UOM Category deleted',
                    'body'  => 'The UOM category has been deleted成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'UOM Categories deleted',
                    'body'  => 'The UOM categories has been deleted成功.',
                ],
            ],
        ],
    ],
];
