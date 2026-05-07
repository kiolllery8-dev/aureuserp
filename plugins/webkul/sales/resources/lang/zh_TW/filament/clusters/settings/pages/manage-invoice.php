<?php

return [
    'title' => '管理發票',

    'breadcrumb' => '管理發票',

    'navigation' => [
        'title' => '管理發票',
    ],

    'form' => [
        'invoice-policy' => [
            'label'      => '發票 Policy',
            'label-help' => 'Define how invoices are generated from sales orders.',
            'options'    => [
                'order'    => 'Generate invoice based on ordered quantities',
                'delivery' => 'Generate invoice based on delivered quantities',
            ],
        ],
    ],
];
