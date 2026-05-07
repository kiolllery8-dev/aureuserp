<?php

return [
    'notification' => [
        'title' => 'Scrap已更新',
        'body'  => 'The scrap has been已更新成功.',
    ],

    'header-actions' => [
        'validate' => [
            'label' => '驗證',

            'notification' => [
                'warning' => [
                    'title' => '庫存不足',
                    'body'  => '庫存不足以驗證此報廢。',
                ],

                'success' => [
                    'title' => '報廢已標記完成',
                    'body'  => 'The scrap has been marked as done成功.',
                ],
            ],
        ],

        'delete' => [
            'notification' => [
                'success' => [
                    'title' => '報廢已刪除',
                    'body'  => 'The scrap has been已刪除成功.',
                ],

                'error' => [
                    'title' => 'Scraps could not be已刪除',
                    'body'  => 'The scraps cannot be已刪除 because they are currently in use.',
                ],
            ],
        ],
    ],
];
