<?php

return [
    'title' => '管理Taxes',

    'form' => [
        'default-taxes' => [
            'label'       => 'Default Taxes',
            'helper-text' => 'Default will be applied on products if no tax is selected',
        ],

        'sales-tax' => [
            'label' => 'Sales Tax',
        ],

        'purchase-tax' => [
            'label' => 'Purchase Tax',
        ],

        'prices' => [
            'label' => 'Prices',
        ],

        'rounding-method' => [
            'label'       => 'Rounding Method',
            'helper-text' => 'Method used to round tax amounts',

            'options' => [
                'round-per-line' => '逐行進位',
                'round-globally' => '整體進位',
            ],
        ],

        'fiscal-country' => [
            'label' => 'Fiscal Country',
        ],
    ],
];
