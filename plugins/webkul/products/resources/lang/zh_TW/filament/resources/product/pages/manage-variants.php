<?php

return [
    'title' => '規格',

    'form' => [
        'date'                   => '日期',
        'employee'               => '員工',
        'description'            => '描述',
        'time-spent'             => '花費時間',
        'time-spent-helper-text' => '時間 spent in hours (Eg. 1.5 hours means 1 hour 30 minutes)',
    ],

    'table' => [
        'columns' => [
            'date'                   => '日期',
            'employee'               => '員工',
            'description'            => '描述',
            'time-spent'             => '花費時間',
            'time-spent-on-subtasks' => '時間 Spent on Subtasks',
            'total-time-spent'       => 'Total時間 Spent',
            'remaining-time'         => 'Remaining時間',
            'variant-values'         => '規格 Values',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Variant已刪除',
                    'body'  => 'The variant has been已刪除成功.',
                ],
            ],

            'view' => [
                'extra-footer-actions' => [
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
                ],
            ],
        ],
    ],
];
