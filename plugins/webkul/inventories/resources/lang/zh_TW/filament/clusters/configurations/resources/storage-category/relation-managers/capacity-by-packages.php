<?php

return [
    'title' => 'Capacity By 包裝',

    'form' => [
        'package-type' => '包裝類型',
        'qty'          => '數量',
    ],

    'table' => [
        'header-actions' => [
            'create' => [
                'label' => '新增Package類型 Capacity',

                'notification' => [
                    'title' => 'Package類型 Capacity已建立',
                    'body'  => 'The package type capacity been added成功.',
                ],
            ],
        ],

        'columns' => [
            'package-type' => '包裝類型',
            'qty'          => '數量',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Package類型 Capacity已更新',
                    'body'  => 'The package type capacity has been已更新成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Package類型 Capacity已刪除',
                    'body'  => 'The package type capacity has been已刪除成功.',
                ],
            ],
        ],
    ],
];
