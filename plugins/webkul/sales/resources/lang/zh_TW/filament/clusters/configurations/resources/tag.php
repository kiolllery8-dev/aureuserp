<?php

return [
    'title' => '標籤',

    'navigation' => [
        'title' => '標籤',
        'group' => '銷貨訂單',
    ],

    'form' => [
        'fields' => [
            'name'  => '名稱',
            'color' => '顏色',
        ],
    ],

    'table' => [
        'columns' => [
            'created-by' => '建立者',
            'name'       => '名稱',
            'color'      => '顏色',
        ],
        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => '商品 標籤已更新',
                    'body'  => 'The product 標籤 has been已更新成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => '商品 標籤已刪除',
                    'body'  => 'The product 標籤 has been已刪除成功.',
                ],
            ],
        ],
        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => '商品 標籤已刪除',
                    'body'  => 'The product 標籤 has been已刪除成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name'  => '名稱',
            'color' => '顏色',
        ],
    ],
];
