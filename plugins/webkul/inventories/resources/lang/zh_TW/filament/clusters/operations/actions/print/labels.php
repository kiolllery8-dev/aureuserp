<?php

return [
    'label' => '標籤',

    'form' => [
        'fields' => [
            'type'          => 'Type Of Labels',
            'quantity'      => '數量',
            'format'        => '格式',
            'layout'        => '標籤排版',
            'quantity-type' => 'Quantity To Print',
            'quantity'      => '數量',

            'quantity-type-options' => [
                'operation' => 'Operation數量',
                'custom'    => 'Custom數量',
                'per-slot'  => '每批次／序號一張',
                'per-unit'  => '每件一張',
            ],

            'type-options' => [
                'product' => 'Product Labels',
                'lot'     => 'Lot/SN Labels',
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
