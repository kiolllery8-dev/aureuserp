<?php

return [
    'header-actions' => [
        'print' => [
            'label' => 'Print Labels',

            'form' => [
                'fields' => [
                    'quantity' => '編號 of Labels',
                    'format'   => 'Format',

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
                'title' => '商品 Deleted',
                'body'  => 'The product has been已刪除成功.',
            ],
        ],
    ],
];
