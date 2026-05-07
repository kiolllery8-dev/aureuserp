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
            'color' => 'Color',
        ],
    ],

    'table' => [
        'columns' => [
            'created-by' => '建立者',
            'name'       => '名稱',
            'color'      => 'Color',
        ],
        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Product Tag updated',
                    'body'  => 'The product Tag has been updated成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Product Tag deleted',
                    'body'  => 'The product Tag has been deleted成功.',
                ],
            ],
        ],
        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Product Tag deleted',
                    'body'  => 'The product Tag has been deleted成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name'  => '名稱',
            'color' => 'Color',
        ],
    ],
];
