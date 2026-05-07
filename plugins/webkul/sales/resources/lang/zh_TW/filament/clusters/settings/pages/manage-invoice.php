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
            'label-help' => 'Define how invoices are generated from sales orders.',
            'options'    => [
                'order'    => 'Generate invoice based on ordered quantities',
                'delivery' => 'Generate invoice based on delivered quantities',
            ],
        ],
    ],
];
