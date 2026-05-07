<?php

return [
    'title' => '規格',

    'form' => [
        'date'                   => '日期',
        'employee'               => 'Employee',
        'description'            => '說明',
        'time-spent'             => '已花時間',
        'time-spent-helper-text' => 'Time spent in hours (Eg. 1.5 hours means 1 hour 30 minutes)',
    ],

    'table' => [
        'columns' => [
            'date'                   => '日期',
            'employee'               => 'Employee',
            'description'            => '說明',
            'time-spent'             => '已花時間',
            'time-spent-on-subtasks' => 'Time Spent on Subtasks',
            'total-time-spent'       => 'Total時間 Spent',
            'remaining-time'         => 'Remaining時間',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Variant已刪除',
                    'body'  => 'The variant has been已刪除成功.',
                ],
            ],
        ],
    ],
];
