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
                        'dymo'       => 'Dymo',
                        '2x7_price'  => '2x7 with price',
                        '4x7_price'  => '4x7 with price',
                        '4x12'       => '4x12',
                        '4x12_price' => '4x12 with price',
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
