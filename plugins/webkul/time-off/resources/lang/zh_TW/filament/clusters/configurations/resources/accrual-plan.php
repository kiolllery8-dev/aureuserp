<?php

return [
    'title'      => '累計計畫',
    'navigation' => [
        'title' => '累計計畫',
    ],

    'form' => [
        'fields' => [
            'name'                    => '標題',
            'is-based-on-worked-time' => 'Is Based on Worked時間',
            'accrued-gain-time'       => 'Accrued Gain時間',
            'carry-over-time'         => 'Carry Over時間',
            'carry-over-date'         => 'Carry Over日期',
            'status'                  => '狀態',
        ],
    ],

    'table' => [
        'columns' => [
            'name'   => '名稱',
            'levels' => '等級',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Accrual Plan已刪除',
                    'body'  => 'The Accrual Plan has been已刪除成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Accrual Plan已刪除',
                    'body'  => 'The Accrual Plan has been已刪除成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'basic-information' => 'Basic資料',
        ],

        'entries' => [
            'name'                    => '名稱',
            'is-based-on-worked-time' => 'Is Based on Worked時間',
            'accrued-gain-time'       => 'Accrued Gain時間',
            'carry-over-time'         => 'Carry Over時間',
            'carry-over-day'          => '結轉日',
            'carry-over-month'        => '結轉月',
        ],
    ],
];
