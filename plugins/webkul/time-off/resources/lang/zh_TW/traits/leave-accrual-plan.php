<?php

return [
    'form' => [
        'fields' => [
            'accrual-amount'              => 'Accrual金額',
            'accrual-value-type'          => 'Accrual Value類型',
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
            'days'                        => '天數',
            'start-count'                 => 'Start Count',
            'start-type'                  => 'Start類型',
            'action-with-unused-accruals' => '動作 with Unused Accruals',
            'milestone-cap'               => 'Milestone Cap',
            'maximum-leave-yearly'        => 'Maximum Leave Yearly',
            'accrual-validity'            => 'Accrual Validity',
            'accrual-validity-count'      => 'Accrual Validity Count',
            'accrual-validity-type'       => 'Accrual Validity類型',
            'advanced-accrual-settings'   => 'Advanced Accrual 設定',
            'after-allocation-start'      => 'After Allocation Start日期',
        ],
    ],

    'table' => [
        'columns' => [
            'accrual-amount'     => 'Accrual金額',
            'accrual-value-type' => 'Accrual Value類型',
            'frequency'          => 'Frequency',
            'maximum-leave-days' => 'Maximum Leave 天數',
        ],

        'groups' => [
            'accrual-amount'       => 'Accrual金額',
            'accrual-value-type'   => 'Accrual Value類型',
            'frequency'            => 'Frequency',
            'maximum-leave-days'   => 'Maximum Leave 天數',
        ],

        'filters' => [
            'accrual-frequency'           => 'Accrual Frequency',
            'start-type'                  => 'Start類型',
            'cap-accrued-time'            => 'Cap Accrued時間',
            'action-with-unused-accruals' => '動作 With Unused Accruals',
            'accrual-amount'              => 'Accrual金額',
            'accrual-frequency'           => 'Accrual Frequency',
            'start-type'                  => 'Start類型',
            'created-at'                  => '建立時間',
            'updated-at'                  => '更新時間',
        ],

        'header-actions' => [
            'created' => [
                'title' => '新增Leave Accrual Plan',

                'notification' => [
                    'title' => 'Leave accrual plan已建立',
                    'body'  => 'The leave accrual plan has been已建立成功.',
                ],
            ],
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Leave accrual plan已更新',
                    'body'  => 'The leave accrual plan has been已更新成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Leave accrual plan已刪除',
                    'body'  => 'The leave accrual plan has been已刪除成功.',
                ],
            ],
        ],

        'bulk-actions' => [

            'delete' => [
                'notification' => [
                    'title' => 'Leave accrual plans已刪除',
                    'body'  => 'The leave accrual plans has been已刪除成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'accrual-amount'              => 'Accrual金額',
            'accrual-value-type'          => 'Accrual Value類型',
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
            'days'                        => '天數',
            'start-count'                 => 'Start Count',
            'start-type'                  => 'Start類型',
            'action-with-unused-accruals' => '動作 with Unused Accruals',
            'milestone-cap'               => 'Milestone Cap',
            'maximum-leave-yearly'        => 'Maximum Leave Yearly',
            'accrual-validity'            => 'Accrual Validity',
            'accrual-validity-count'      => 'Accrual Validity Count',
            'accrual-validity-type'       => 'Accrual Validity類型',
            'advanced-accrual-settings'   => 'Advanced Accrual 設定',
            'after-allocation-start'      => 'After Allocation Start日期',
        ],
    ],
];
