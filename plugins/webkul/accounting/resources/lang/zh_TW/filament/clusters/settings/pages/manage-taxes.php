<?php

return [
    'title' => '管理稅',

    'form' => [
        'default-taxes' => [
            'label'       => '預設 稅',
            'helper-text' => '預設 will be applied on products if no tax is selected',
        ],

        'sales-tax' => [
            'label' => 'Sales 稅',
        ],

        'purchase-tax' => [
            'label' => 'Purchase 稅',
        ],

        'prices' => [
            'label' => '價格',
        ],

        'rounding-method' => [
            'label'       => 'Rounding 方式',
            'helper-text' => '方式 used to round tax amounts',

            'options' => [
                'round-per-line' => 'Round Per Line',
                'round-globally' => 'Round Globally',
            ],
        ],

        'fiscal-country' => [
            'label' => 'Fiscal 國家',
        ],
    ],
];
