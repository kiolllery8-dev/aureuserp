<?php

return [
    'title' => '規格',

    'form' => [
        'date'                   => '日期',
        'employee'               => '員工',
        'description'            => '說明',
        'time-spent'             => '已花時間',
        'time-spent-helper-text' => '已花費時間，單位：小時（例如 1.5 表示 1 小時 30 分鐘）',
    ],

    'table' => [
        'columns' => [
            'date'                   => '日期',
            'employee'               => '員工',
            'description'            => '說明',
            'time-spent'             => '已花時間',
            'time-spent-on-subtasks' => '子任務花費時間',
            'total-time-spent'       => 'Total時間 Spent',
            'remaining-time'         => 'Remaining時間',
            'variant-values'         => '款式值',
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
                ],
            ],
        ],
    ],
];
