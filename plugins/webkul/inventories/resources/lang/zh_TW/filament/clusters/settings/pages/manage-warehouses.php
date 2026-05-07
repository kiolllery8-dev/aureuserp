<?php

return [
    'title' => '管理Warehouses',

    'form' => [
        'enable-locations'                      => '位置',
        'enable-locations-helper-text'          => 'Track product location in your warehouse',
        'configure-locations'                   => 'Configure 位置',
        'enable-multi-steps-routes'             => 'Multi Steps 路徑',
        'enable-multi-steps-routes-helper-text' => 'Use your own routes to manage the transfer of products between warehouses',
        'configure-routes'                      => 'Configure 倉庫 路徑',
    ],

    'before-save' => [
        'notification' => [
            'warning' => [
                'title' => 'Have multiple warehouses',
                'body'  => 'You can\'t deactivate the multi-location if you have more than one warehouse.',
            ],
        ],
    ],
];
