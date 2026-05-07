<?php

return [
    'form' => [
        'fields' => [
            'accrual-amount'              => 'Accrual金額',
            'accrual-value-type'          => 'Accrual Value類型',
            'accrual-frequency'           => '累計頻率',
            'accrual-day'                 => '累計日',
            'day-of-month'                => '月份的第幾天',
            'first-day-of-month'          => '月初第一天',
            'second-day-of-month'         => '月初第二天',
            'first-period-month'          => '第一期間月份',
            'first-period-day'            => '第一期間日',
            'second-period-month'         => '第二期間月份',
            'second-period-day'           => '第二期間日',
            'first-period-year'           => '第一期間年份',
            'cap-accrued-time'            => '累計時間上限',
            'days'                        => '日',
            'start-count'                 => '開始計算',
            'start-type'                  => 'Start類型',
            'action-with-unused-accruals' => '未使用累計處理',
            'milestone-cap'               => '里程碑上限',
            'maximum-leave-yearly'        => '年度最大假數',
            'accrual-validity'            => '累計有效',
            'accrual-validity-count'      => '累計有效次數',
            'accrual-validity-type'       => 'Accrual Validity類型',
            'advanced-accrual-settings'   => '進階累計設定',
            'after-allocation-start'      => 'After Allocation Start日期',
        ],
    ],

    'table' => [
        'columns' => [
            'accrual-amount'     => 'Accrual金額',
            'accrual-value-type' => 'Accrual Value類型',
            'frequency'          => '頻率',
            'maximum-leave-days' => '最大請假天數',
        ],

        'groups' => [
            'accrual-amount'       => 'Accrual金額',
            'accrual-value-type'   => 'Accrual Value類型',
            'frequency'            => '頻率',
            'maximum-leave-days'   => '最大請假天數',
        ],

        'filters' => [
            'accrual-frequency'           => '累計頻率',
            'start-type'                  => 'Start類型',
            'cap-accrued-time'            => '累計時間上限',
            'action-with-unused-accruals' => '未使用累計處理',
            'accrual-amount'              => 'Accrual金額',
            'accrual-frequency'           => '累計頻率',
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
            'accrual-frequency'           => '累計頻率',
            'accrual-day'                 => '累計日',
            'day-of-month'                => '月份的第幾天',
            'first-day-of-month'          => '月初第一天',
            'second-day-of-month'         => '月初第二天',
            'first-period-month'          => '第一期間月份',
            'first-period-day'            => '第一期間日',
            'second-period-month'         => '第二期間月份',
            'second-period-day'           => '第二期間日',
            'first-period-year'           => '第一期間年份',
            'cap-accrued-time'            => '累計時間上限',
            'days'                        => '日',
            'start-count'                 => '開始計算',
            'start-type'                  => 'Start類型',
            'action-with-unused-accruals' => '未使用累計處理',
            'milestone-cap'               => '里程碑上限',
            'maximum-leave-yearly'        => '年度最大假數',
            'accrual-validity'            => '累計有效',
            'accrual-validity-count'      => '累計有效次數',
            'accrual-validity-type'       => 'Accrual Validity類型',
            'advanced-accrual-settings'   => '進階累計設定',
            'after-allocation-start'      => 'After Allocation Start日期',
        ],
    ],
];
