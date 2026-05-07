<?php

return [
    'title' => '工作排程',

    'navigation' => [
        'title' => '工作排程',
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
                    'schedule-name-tooltip' => '請輸入有描述性的工作排程名稱。',
                    'timezone'              => '時區',
                    'timezone-tooltip'      => '請選擇工作排程的時區。',
                    'company'               => '公司',
                ],
            ],

            'configuration' => [
                'title'  => 'Work Hours Configuration',
                'fields' => [
                    'hours-per-day'                   => '每日小時數',
                    'hours-per-day-suffix'            => '小時',
                    'full-time-required-hours'        => 'Full時間 Required Hours',
                    'full-time-required-hours-suffix' => '每週工時',
                ],
            ],

            'flexibility' => [
                'title'  => '彈性',
                'fields' => [
                    'status'                     => '狀態',
                    'two-weeks-calendar'         => '雙週行事曆',
                    'two-weeks-calendar-tooltip' => '啟用雙週交替工作排程。',
                    'flexible-hours'             => '彈性工時',
                    'flexible-hours-tooltip'     => '允許員工彈性工時。',
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
            'daily-hours'    => '每日工時',
            'created-by'     => '建立者',
            'created-at'     => '建立時間',
            'updated-at'     => '更新時間',
        ],

        'filters' => [
            'company'                  => '公司',
            'is-active'                => '狀態',
            'two-week-calendar'        => '雙週行事曆',
            'flexible-hours'           => '彈性工時',
            'timezone'                 => '時區',
            'name'                     => '排程名稱',
            'attendance'               => '出勤',
            'created-by'               => '建立者',
            'daily-hours'              => '每日工時',
            'full-time-required-hours' => 'Full時間 Required Hours',
            'updated-at'               => '更新時間',
            'created-at'               => '建立時間',
        ],

        'groups' => [
            'name'           => '排程名稱',
            'status'         => '狀態',
            'timezone'       => '時區',
            'flexible-hours' => '彈性工時',
            'daily-hours'    => '每日工時',
            'created-by'     => '建立者',
            'created-at'     => '建立時間',
            'updated-at'     => '更新時間',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => '行事曆計畫已還原',
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
                    'title' => '行事曆計畫已還原',
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
                    'schedule-name-tooltip' => '請輸入有描述性的工作排程名稱。',
                    'timezone'              => '時區',
                    'timezone-tooltip'      => '請選擇工作排程的時區。',
                    'company'               => '公司',
                ],
            ],

            'configuration' => [
                'title'   => 'Work Hours Configuration',
                'entries' => [
                    'hours-per-day'                   => '每日小時數',
                    'hours-per-day-suffix'            => ' 小時',
                    'full-time-required-hours'        => 'Full時間 Required Hours',
                    'full-time-required-hours-suffix' => ' 每週工時',
                ],
            ],

            'flexibility' => [
                'title'   => '彈性',
                'entries' => [
                    'status'                     => '狀態',
                    'two-weeks-calendar'         => '雙週行事曆',
                    'two-weeks-calendar-tooltip' => '啟用雙週交替工作排程。',
                    'flexible-hours'             => '彈性工時',
                    'flexible-hours-tooltip'     => '允許員工彈性工時。',
                ],
            ],
        ],
    ],
];
