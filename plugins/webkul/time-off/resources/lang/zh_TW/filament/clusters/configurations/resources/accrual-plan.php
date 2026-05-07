<?php

return [
    'title'      => 'Accrual Plan',
    'navigation' => [
        'title' => 'Accrual Plan',
    ],

    'form' => [
        'fields' => [
            'name'                    => '標題',
            'is-based-on-worked-time' => 'Is Based on Worked Time',
            'accrued-gain-time'       => 'Accrued Gain Time',
            'carry-over-time'         => 'Carry Over Time',
            'carry-over-date'         => 'Carry Over Date',
            'status'                  => '狀態',
        ],
    ],

    'table' => [
        'columns' => [
            'name'   => '名稱',
            'levels' => 'Levels',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Accrual Plan deleted',
                    'body'  => 'The Accrual Plan has been deleted成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Accrual Plan deleted',
                    'body'  => 'The Accrual Plan has been deleted成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'basic-information' => 'Basic Information',
        ],

        'entries' => [
            'name'                    => '名稱',
            'is-based-on-worked-time' => 'Is Based on Worked Time',
            'accrued-gain-time'       => 'Accrued Gain Time',
            'carry-over-time'         => 'Carry Over Time',
            'carry-over-day'          => 'Carry Over Day',
            'carry-over-month'        => 'Carry Over Month',
        ],
    ],
];
