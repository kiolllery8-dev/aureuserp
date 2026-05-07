<?php

return [
    'label' => 'Labels',

    'form' => [
        'fields' => [
            'type'          => '類型 Of Labels',
            'quantity'      => '數量',
            'format'        => 'Format',
            'layout'        => 'Layout Of Labels',
            'quantity-type' => '數量 To Print',
            'quantity'      => '數量',

            'quantity-type-options' => [
                'operation' => '作業數量',
                'custom'    => 'Custom數量',
                'per-slot'  => 'One per lot/SN',
                'per-unit'  => 'One per unit',
            ],

            'type-options' => [
                'product' => '商品 Labels',
                'lot'     => '批號/SN Labels',
            ],

            'format-options' => [
                'dymo'       => 'Dymo',
                '2x7_price'  => '2x7 with price',
                '4x7_price'  => '4x7 with price',
                '4x12'       => '4x12',
                '4x12_price' => '4x12 with price',
            ],
        ],
    ],
];
