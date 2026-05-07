<?php

return [
    'title' => 'Working Schedules',

    'navigation' => [
        'title' => 'Working Schedules',
        'group' => 'Employee',
    ],

    'groups' => [
        'status'     => '狀態',
        'created-by' => '建立者',
        'created-at' => '建立時間',
        'updated-at' => '更新時間',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => '一般資料',
                'fields' => [
                    'name'                  => '名稱',
                    'schedule-name'         => '排程名稱',
                    'schedule-name-tooltip' => 'Please write descriptive working schedule name.',
                    'timezone'              => '時區',
                    'timezone-tooltip'      => 'Please select the timezone for the working schedule.',
                    'company'               => '公司',
                ],
            ],

            'configuration' => [
                'title'  => 'Work Hours Configuration',
                'fields' => [
                    'hours-per-day'                   => 'Hours Per Day',
                    'hours-per-day-suffix'            => 'Hours',
                    'full-time-required-hours'        => 'Full時間 Required Hours',
                    'full-time-required-hours-suffix' => 'Hours Per Week',
                ],
            ],

            'flexibility' => [
                'title'  => 'Flexibility',
                'fields' => [
                    'status'                     => '狀態',
                    'two-weeks-calendar'         => 'Two Weeks Calendar',
                    'two-weeks-calendar-tooltip' => 'Enable alternating two-week work schedule.',
                    'flexible-hours'             => '彈性工時',
                    'flexible-hours-tooltip'     => 'Allow employees to have flexible work hours.',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'id'             => '編號',
            'name'           => '排程名稱',
            'timezone'       => '時區',
            'company'        => '公司',
            'flexible-hours' => '彈性工時',
            'status'         => '狀態',
            'daily-hours'    => 'Daily Hours',
            'created-by'     => '建立者',
            'created-at'     => '建立時間',
            'updated-at'     => '更新時間',
        ],

        'filters' => [
            'company'                  => '公司',
            'is-active'                => '狀態',
            'two-week-calendar'        => 'Two Weeks Calendar',
            'flexible-hours'           => '彈性工時',
            'timezone'                 => '時區',
            'name'                     => '排程名稱',
            'attendance'               => '出勤',
            'created-by'               => '建立者',
            'daily-hours'              => 'Daily Hours',
            'full-time-required-hours' => 'Full時間 Required Hours',
            'updated-at'               => '更新時間',
            'created-at'               => '建立時間',
        ],

        'groups' => [
            'name'           => '排程名稱',
            'status'         => '狀態',
            'timezone'       => '時區',
            'flexible-hours' => '彈性工時',
            'daily-hours'    => 'Daily Hours',
            'created-by'     => '建立者',
            'created-at'     => '建立時間',
            'updated-at'     => '更新時間',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Calendar Plan restored',
                    'body'  => 'The calendar plan has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Calendar Plan已刪除',
                    'body'  => 'The calendar plan has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Calendar Plan force已刪除',
                    'body'  => 'The calendar plan has been force已刪除成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Calendar Plans restored',
                    'body'  => 'The calendar plans has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Calendar Plans已刪除',
                    'body'  => 'The calendar plans has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Calendar Plans force已刪除',
                    'body'  => 'The calendar plans has been force已刪除成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title'   => '一般資料',
                'entries' => [
                    'name'                  => '名稱',
                    'schedule-name'         => '排程名稱',
                    'schedule-name-tooltip' => 'Please write descriptive working schedule name.',
                    'timezone'              => '時區',
                    'timezone-tooltip'      => 'Please select the timezone for the working schedule.',
                    'company'               => '公司',
                ],
            ],

            'configuration' => [
                'title'   => 'Work Hours Configuration',
                'entries' => [
                    'hours-per-day'                   => 'Hours Per Day',
                    'hours-per-day-suffix'            => ' Hours',
                    'full-time-required-hours'        => 'Full時間 Required Hours',
                    'full-time-required-hours-suffix' => ' Hours Per Week',
                ],
            ],

            'flexibility' => [
                'title'   => 'Flexibility',
                'entries' => [
                    'status'                     => '狀態',
                    'two-weeks-calendar'         => 'Two Weeks Calendar',
                    'two-weeks-calendar-tooltip' => 'Enable alternating two-week work schedule.',
                    'flexible-hours'             => '彈性工時',
                    'flexible-hours-tooltip'     => 'Allow employees to have flexible work hours.',
                ],
            ],
        ],
    ],
];
