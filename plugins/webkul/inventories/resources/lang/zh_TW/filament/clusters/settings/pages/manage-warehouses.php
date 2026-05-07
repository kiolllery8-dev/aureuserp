<?php

return [
    'title' => '管理Warehouses',

    'form' => [
        'enable-locations'                      => '位置',
        'enable-locations-helper-text'          => '追蹤商品在倉庫的位置',
        'configure-locations'                   => '設定位置',
        'enable-multi-steps-routes'             => '多步驟路線',
        'enable-multi-steps-routes-helper-text' => '用自己的路線管理商品在倉庫間移動',
        'configure-routes'                      => '設定倉庫路線',
    ],

    'before-save' => [
        'notification' => [
            'warning' => [
                'title' => '多倉庫',
                'body'  => '若有多於一個倉庫，無法停用多位置。',
            ],
        ],
    ],
];
