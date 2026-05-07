<?php

return [
    'navigation' => [
        'group' => '設定',
        'title' => 'UOM 分類',
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
                    'uoms'     => '單位',
                    'type'     => '類型',
                    'name'     => '名稱',
                    'factor'   => 'Factor',
                    'rounding' => 'Rounding Precision',
                ],

                'actions' => [
                    'add' => '新增Unit',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => '名稱',
            'uoms-count' => '單位',
            'created-at' => '建立時間',
            'updated-at' => '更新時間',
        ],

        'groups' => [
            'created-at' => '建立時間',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'UOM Category已更新',
                    'body'  => 'The UOM category has been已更新成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'UOM Category已刪除',
                    'body'  => 'The UOM category has been已刪除成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'UOM Categories已刪除',
                    'body'  => 'The UOM categories has been已刪除成功.',
                ],
            ],
        ],
    ],
];
