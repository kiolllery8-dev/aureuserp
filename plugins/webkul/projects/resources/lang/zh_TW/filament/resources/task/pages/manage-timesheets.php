<?php

return [
    'title' => '工時表',

    'form' => [
        'date'                   => '日期',
        'employee'               => '員工',
        'description'            => '說明',
        'time-spent'             => '已花時間',
        'time-spent-helper-text' => '已花費時間，單位：小時（例如 1.5 表示 1 小時 30 分鐘）',
    ],

    'table' => [
        'header-actions' => [
            'create' => [
                'label' => '新增Timesheet',

                'notification' => [
                    'title' => 'Timesheet已建立',
                    'body'  => 'The timesheet has been已建立成功.',
                ],
            ],
        ],

        'columns' => [
            'date'                   => '日期',
            'employee'               => '員工',
            'description'            => '說明',
            'time-spent'             => '已花時間',
            'time-spent-on-subtasks' => '子任務花費時間',
            'total-time-spent'       => 'Total時間 Spent',
            'remaining-time'         => 'Remaining時間',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Timesheet已更新',
                    'body'  => 'The timesheet has been已更新成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Timesheet已刪除',
                    'body'  => 'The timesheet has been已刪除成功.',
                ],
            ],
        ],
    ],
];
