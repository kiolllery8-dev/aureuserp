<?php

return [
    'title' => '管理Invoice',

    'breadcrumb' => '管理Invoice',

    'navigation' => [
        'title' => '管理Invoice',
    ],

    'form' => [
        'invoice-policy' => [
            'label'      => 'Invoice Policy',
            'label-help' => '定義銷售訂單如何產生發票。',
            'options'    => [
                'order'    => '依訂單數量產生發票',
                'delivery' => '依出貨數量產生發票',
            ],
        ],
    ],
];
