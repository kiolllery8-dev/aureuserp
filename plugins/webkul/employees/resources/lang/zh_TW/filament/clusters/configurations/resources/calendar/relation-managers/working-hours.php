<?php

return [
    'modal' => [
        'title' => '工時',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => '一般資料',
                'fields' => [
                    'attendance-name' => 'Attendance名稱',
                    'attendance-name' => 'Attendance名稱',
                    'day-of-week'     => 'Day of Week',
                ],
            ],

            'timing-information' => [
                'title' => 'Timing資料',

                'fields' => [
                    'day-period' => 'Day Periods',
                    'week-type'  => 'Week類型',
                    'work-from'  => 'Work From',
                    'work-to'    => 'Work To',
                ],
            ],

            'date-information' => [
                'title' => '日期資料',

                'fields' => [
                    'starting-date' => 'Starting日期',
                    'ending-date'   => 'Ending日期',
                ],
            ],

            'additional-information' => [
                'title' => '其他資料',

                'fields' => [
                    'durations-days' => 'Duration (天數)',
                    'display-type'   => '顯示類型',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'          => 'Attendance名稱',
            'day-of-week'   => 'Day of Week',
            'day-period'    => 'Day Periods',
            'work-from'     => 'Work From',
            'work-to'       => 'Work To',
            'starting-date' => 'Starting日期',
            'ending-date'   => 'Ending日期',
            'display-type'  => '顯示類型',
            'created-by'    => '建立者',
            'created-at'    => '建立時間',
            'updated-at'    => '更新時間',
        ],

        'groups' => [
            'activity-type' => '活動類型',
            'assignment'    => '指派',
            'assigned-to'   => '指派給',
            'interval'      => 'Interval',
            'delay-unit'    => 'Delay 單位',
            'delay-from'    => 'Delay From',
            'created-by'    => '建立者',
            'created-at'    => '建立時間',
            'updated-at'    => '更新時間',
        ],

        'filters' => [
            'display-type' => '顯示類型',
            'day-of-week'  => 'Day of Week',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Working Hours已更新',
                    'body'  => 'The working hours has been已更新成功.',
                ],
            ],

            'create' => [
                'notification' => [
                    'title' => 'Working Hours已建立',
                    'body'  => 'The working hours has been已建立成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Working Hours已刪除',
                    'body'  => 'The working hours has been已刪除成功.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Working Hours restored',
                    'body'  => 'The working hours has been restored成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Working Hours已刪除',
                    'body'  => 'The working hours has been已刪除成功.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Working Hours已刪除',
                    'body'  => 'The working hours has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Working Hours已刪除',
                    'body'  => 'The working hours has been已刪除成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => '一般資料',

                'entries' => [
                    'name'        => 'Attendance名稱',
                    'day-of-week' => 'Day of Week',
                ],
            ],

            'timing-information' => [
                'title' => 'Timing資料',

                'entries' => [
                    'day-period' => 'Day Periods',
                    'week-type'  => 'Week類型',
                    'work-from'  => 'Work From',
                    'work-to'    => 'Work To',
                ],
            ],

            'date-information' => [
                'title' => '日期資料',

                'entries' => [
                    'starting-date' => 'Starting日期',
                    'ending-date'   => 'Ending日期',
                ],
            ],

            'additional-information' => [
                'title' => '其他資料',

                'entries' => [
                    'durations-days' => 'Duration (天數)',
                    'display-type'   => '顯示類型',
                ],
            ],
        ],

        'note' => '備註',
    ],
];
