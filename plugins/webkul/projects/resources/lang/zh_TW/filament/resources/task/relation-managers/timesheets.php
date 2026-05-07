<?php

return [
    'form' => [
        'date'                   => '日期',
        'employee'               => 'Employee',
        'description'            => '描述',
        'time-spent'             => 'Time Spent',
        'time-spent-helper-text' => 'Time spent in hours (Eg. 1.5 hours means 1 hour 30 minutes)',
    ],

    'table' => [
        'header-actions' => [
            'create' => [
                'label' => 'Add Timesheet',

                'notification' => [
                    'title' => 'Timesheet created',
                    'body'  => 'The timesheet has been created成功.',
                ],
            ],
        ],

        'columns' => [
            'date'                   => '日期',
            'employee'               => 'Employee',
            'description'            => '描述',
            'time-spent'             => 'Time Spent',
            'time-spent-on-subtasks' => 'Time Spent on Subtasks',
            'total-time-spent'       => 'Total Time Spent',
            'remaining-time'         => 'Remaining Time',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Timesheet updated',
                    'body'  => 'The timesheet has been updated成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Timesheet deleted',
                    'body'  => 'The timesheet has been deleted成功.',
                ],
            ],
        ],
    ],
];
