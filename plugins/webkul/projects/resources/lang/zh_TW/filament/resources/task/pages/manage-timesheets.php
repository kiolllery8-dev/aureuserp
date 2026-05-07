<?php

return [
    'title' => '工時表',

    'form' => [
        'date'                   => '日期',
        'employee'               => '員工',
        'description'            => '描述',
        'time-spent'             => '花費時間',
        'time-spent-helper-text' => '時間 spent in hours (Eg. 1.5 hours means 1 hour 30 minutes)',
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
            'description'            => '描述',
            'time-spent'             => '花費時間',
            'time-spent-on-subtasks' => '時間 Spent on Subtasks',
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
