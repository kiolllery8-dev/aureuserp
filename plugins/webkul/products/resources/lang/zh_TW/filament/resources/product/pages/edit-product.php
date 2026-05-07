<?php

return [
    'notification' => [
        'title' => 'Product已更新',
        'body'  => 'The product has been已更新成功.',
    ],

    'header-actions' => [
        'print' => [
            'label' => '列印標籤',

            'form' => [
                'fields' => [
                    'quantity' => 'Number of Labels',
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
                'title' => 'Product已刪除',
                'body'  => 'The product has been已刪除成功.',
            ],
        ],
    ],
];
