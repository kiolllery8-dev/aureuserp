<?php

return [
    'title' => '管理Taxes',

    'form' => [
        'default-taxes' => [
            'label'       => '預設稅',
            'helper-text' => '若未選稅，會套用商品預設值',
        ],

        'sales-tax' => [
            'label' => '銷項稅',
        ],

        'purchase-tax' => [
            'label' => '進項稅',
        ],

        'prices' => [
            'label' => '價格',
        ],

        'rounding-method' => [
            'label'       => '進位方式',
            'helper-text' => '稅額進位方式',

            'options' => [
                'round-per-line' => '逐行進位',
                'round-globally' => '整體進位',
            ],
        ],

        'fiscal-country' => [
            'label' => '財務所在國',
        ],
    ],
];
