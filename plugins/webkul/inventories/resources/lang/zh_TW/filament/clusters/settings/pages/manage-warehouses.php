<?php

return [
    'title' => '管理Warehouses',

    'form' => [
        'enable-locations'                      => '位置',
        'enable-locations-helper-text'          => '追蹤商品在倉庫的位置',
        'configure-locations'                   => 'Configure Locations',
        'enable-multi-steps-routes'             => 'Multi Steps Routes',
        'enable-multi-steps-routes-helper-text' => '用自己的路線管理商品在倉庫間移動',
        'configure-routes'                      => 'Configure Warehouse Routes',
    ],

    'before-save' => [
        'notification' => [
            'warning' => [
                'title' => '多倉庫',
                'body'  => 'You can\'t deactivate the multi-location if you have more than one warehouse.',
            ],
        ],
    ],
];
