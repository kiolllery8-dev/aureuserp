<?php

return [
    'header-actions' => [
        'print' => [
            'label' => '列印標籤',

            'form' => [
                'fields' => [
                    'quantity' => '標籤數量',
                    'format'   => '格式',

                    'format-options' => [
                        'dymo'       => 'Dymo 標籤',
                        '2x7_price'  => '2x7（含價格）',
                        '4x7_price'  => '4x7（含價格）',
                        '4x12'       => '4x12 規格',
                        '4x12_price' => '4x12（含價格）',
                    ],
                ],
            ],
        ],

        'delete' => [
            'notification' => [
                'title' => '商品已刪除',
                'body'  => 'The product has been已刪除成功.',
            ],
        ],
    ],
];
