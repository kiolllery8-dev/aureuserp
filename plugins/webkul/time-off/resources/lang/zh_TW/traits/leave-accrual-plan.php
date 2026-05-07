<?php

return [
    'form' => [
        'fields' => [
            'accrual-amount'              => 'Accrual Amount',
            'accrual-value-type'          => 'Accrual Value Type',
            'accrual-frequency'           => 'Accrual Frequency',
            'accrual-day'                 => 'Accrual Day',
            'day-of-month'                => 'Day of Month',
            'first-day-of-month'          => 'First Day of Month',
            'second-day-of-month'         => 'Second Day of Month',
            'first-period-month'          => 'First Period Month',
            'first-period-day'            => 'First Period Day',
            'second-period-month'         => 'Second Period Month',
            'second-period-day'           => 'Second Period Day',
            'first-period-year'           => 'First Period Year',
            'cap-accrued-time'            => 'Cap accrued time',
            'days'                        => 'Days',
            'start-count'                 => 'Start Count',
            'start-type'                  => 'Start Type',
            'action-with-unused-accruals' => 'Action with Unused Accruals',
            'milestone-cap'               => 'Milestone Cap',
            'maximum-leave-yearly'        => 'Maximum Leave Yearly',
            'accrual-validity'            => 'Accrual Validity',
            'accrual-validity-count'      => 'Accrual Validity Count',
            'accrual-validity-type'       => 'Accrual Validity Type',
            'advanced-accrual-settings'   => 'Advanced Accrual Settings',
            'after-allocation-start'      => 'After Allocation Start Date',
        ],
    ],

    'table' => [
        'columns' => [
            'accrual-amount'     => 'Accrual Amount',
            'accrual-value-type' => 'Accrual Value Type',
            'frequency'          => 'Frequency',
            'maximum-leave-days' => 'Maximum Leave Days',
        ],

        'groups' => [
            'accrual-amount'       => 'Accrual Amount',
            'accrual-value-type'   => 'Accrual Value Type',
            'frequency'            => 'Frequency',
            'maximum-leave-days'   => 'Maximum Leave Days',
        ],

        'filters' => [
            'accrual-frequency'           => 'Accrual Frequency',
            'start-type'                  => 'Start Type',
            'cap-accrued-time'            => 'Cap Accrued Time',
            'action-with-unused-accruals' => 'Action With Unused Accruals',
            'accrual-amount'              => 'Accrual Amount',
            'accrual-frequency'           => 'Accrual Frequency',
            'start-type'                  => 'Start Type',
            'created-at'                  => '建立時間',
            'updated-at'                  => '更新時間',
        ],

        'header-actions' => [
            'created' => [
                'title' => '新增Leave Accrual Plan',

                'notification' => [
                    'title' => 'Leave accrual plan created',
                    'body'  => 'The leave accrual plan has been created成功.',
                ],
            ],
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Leave accrual plan updated',
                    'body'  => 'The leave accrual plan has been updated成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Leave accrual plan deleted',
                    'body'  => 'The leave accrual plan has been deleted成功.',
                ],
            ],
        ],

        'bulk-actions' => [

            'delete' => [
                'notification' => [
                    'title' => 'Leave accrual plans deleted',
                    'body'  => 'The leave accrual plans has been deleted成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'accrual-amount'              => 'Accrual Amount',
            'accrual-value-type'          => 'Accrual Value Type',
            'accrual-frequency'           => 'Accrual Frequency',
            'accrual-day'                 => 'Accrual Day',
            'day-of-month'                => 'Day of Month',
            'first-day-of-month'          => 'First Day of Month',
            'second-day-of-month'         => 'Second Day of Month',
            'first-period-month'          => 'First Period Month',
            'first-period-day'            => 'First Period Day',
            'second-period-month'         => 'Second Period Month',
            'second-period-day'           => 'Second Period Day',
            'first-period-year'           => 'First Period Year',
            'cap-accrued-time'            => 'Cap accrued time',
            'days'                        => 'Days',
            'start-count'                 => 'Start Count',
            'start-type'                  => 'Start Type',
            'action-with-unused-accruals' => 'Action with Unused Accruals',
            'milestone-cap'               => 'Milestone Cap',
            'maximum-leave-yearly'        => 'Maximum Leave Yearly',
            'accrual-validity'            => 'Accrual Validity',
            'accrual-validity-count'      => 'Accrual Validity Count',
            'accrual-validity-type'       => 'Accrual Validity Type',
            'advanced-accrual-settings'   => 'Advanced Accrual Settings',
            'after-allocation-start'      => 'After Allocation Start Date',
        ],
    ],
];
