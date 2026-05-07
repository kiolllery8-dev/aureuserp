<?php

return [
    'title' => 'Variants',

    'form' => [
        'date'                   => '日期',
        'employee'               => 'Employee',
        'description'            => '描述',
        'time-spent'             => 'Time Spent',
        'time-spent-helper-text' => 'Time spent in hours (Eg. 1.5 hours means 1 hour 30 minutes)',
    ],

    'table' => [
        'columns' => [
            'date'                   => '日期',
            'employee'               => 'Employee',
            'description'            => '描述',
            'time-spent'             => 'Time Spent',
            'time-spent-on-subtasks' => 'Time Spent on Subtasks',
            'total-time-spent'       => 'Total Time Spent',
            'remaining-time'         => 'Remaining Time',
            'variant-values'         => 'Variant Values',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Variant deleted',
                    'body'  => 'The variant has been deleted成功.',
                ],
            ],

            'view' => [
                'extra-footer-actions' => [
                    'print' => [
                        'label' => 'Print Labels',

                        'form' => [
                            'fields' => [
                                'quantity' => 'Number of Labels',
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
