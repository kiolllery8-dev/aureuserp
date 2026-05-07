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
                    'schedule-name'         => 'Schedule Name',
                    'schedule-name-tooltip' => 'Please write descriptive working schedule name.',
                    'timezone'              => 'Timezone',
                    'timezone-tooltip'      => 'Please select the timezone for the working schedule.',
                    'company'               => '公司',
                ],
            ],

            'configuration' => [
                'title'  => 'Work Hours Configuration',
                'fields' => [
                    'hours-per-day'                   => 'Hours Per Day',
                    'hours-per-day-suffix'            => 'Hours',
                    'full-time-required-hours'        => 'Full Time Required Hours',
                    'full-time-required-hours-suffix' => 'Hours Per Week',
                ],
            ],

            'flexibility' => [
                'title'  => 'Flexibility',
                'fields' => [
                    'status'                     => '狀態',
                    'two-weeks-calendar'         => 'Two Weeks Calendar',
                    'two-weeks-calendar-tooltip' => 'Enable alternating two-week work schedule.',
                    'flexible-hours'             => 'Flexible Hours',
                    'flexible-hours-tooltip'     => 'Allow employees to have flexible work hours.',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'id'             => 'ID',
            'name'           => 'Schedule Name',
            'timezone'       => 'Timezone',
            'company'        => '公司',
            'flexible-hours' => 'Flexible Hours',
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
            'flexible-hours'           => 'Flexible Hours',
            'timezone'                 => 'Timezone',
            'name'                     => 'Schedule Name',
            'attendance'               => '出勤',
            'created-by'               => '建立者',
            'daily-hours'              => 'Daily Hours',
            'full-time-required-hours' => 'Full Time Required Hours',
            'updated-at'               => '更新時間',
            'created-at'               => '建立時間',
        ],

        'groups' => [
            'name'           => 'Schedule Name',
            'status'         => '狀態',
            'timezone'       => 'Timezone',
            'flexible-hours' => 'Flexible Hours',
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
                    'title' => 'Calendar Plan deleted',
                    'body'  => 'The calendar plan has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Calendar Plan force deleted',
                    'body'  => 'The calendar plan has been force deleted成功.',
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
                    'title' => 'Calendar Plans deleted',
                    'body'  => 'The calendar plans has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Calendar Plans force deleted',
                    'body'  => 'The calendar plans has been force deleted成功.',
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
                    'schedule-name'         => 'Schedule Name',
                    'schedule-name-tooltip' => 'Please write descriptive working schedule name.',
                    'timezone'              => 'Timezone',
                    'timezone-tooltip'      => 'Please select the timezone for the working schedule.',
                    'company'               => '公司',
                ],
            ],

            'configuration' => [
                'title'   => 'Work Hours Configuration',
                'entries' => [
                    'hours-per-day'                   => 'Hours Per Day',
                    'hours-per-day-suffix'            => ' Hours',
                    'full-time-required-hours'        => 'Full Time Required Hours',
                    'full-time-required-hours-suffix' => ' Hours Per Week',
                ],
            ],

            'flexibility' => [
                'title'   => 'Flexibility',
                'entries' => [
                    'status'                     => '狀態',
                    'two-weeks-calendar'         => 'Two Weeks Calendar',
                    'two-weeks-calendar-tooltip' => 'Enable alternating two-week work schedule.',
                    'flexible-hours'             => 'Flexible Hours',
                    'flexible-hours-tooltip'     => 'Allow employees to have flexible work hours.',
                ],
            ],
        ],
    ],
];
