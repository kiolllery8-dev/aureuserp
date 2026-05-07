<?php

return [
    'label' => '標籤',

    'form' => [
        'fields' => [
            'type'          => '標籤類型',
            'quantity'      => '數量',
            'format'        => '格式',
            'layout'        => '標籤排版',
            'quantity-type' => '列印數量',
            'quantity'      => '數量',

            'quantity-type-options' => [
                'operation' => 'Operation數量',
                'custom'    => 'Custom數量',
                'per-slot'  => '每批次／序號一張',
                'per-unit'  => '每件一張',
            ],

            'type-options' => [
                'product' => '商品標籤',
                'lot'     => '批次／序號標籤',
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
