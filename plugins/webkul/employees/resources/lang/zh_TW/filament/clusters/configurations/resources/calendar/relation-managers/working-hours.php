<?php

return [
    'modal' => [
        'title' => 'Working Hours',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => '一般資料',
                'fields' => [
                    'attendance-name' => 'Attendance Name',
                    'attendance-name' => 'Attendance Name',
                    'day-of-week'     => 'Day of Week',
                ],
            ],

            'timing-information' => [
                'title' => 'Timing Information',

                'fields' => [
                    'day-period' => 'Day Periods',
                    'week-type'  => 'Week Type',
                    'work-from'  => 'Work From',
                    'work-to'    => 'Work To',
                ],
            ],

            'date-information' => [
                'title' => 'Date Information',

                'fields' => [
                    'starting-date' => 'Starting Date',
                    'ending-date'   => 'Ending Date',
                ],
            ],

            'additional-information' => [
                'title' => 'Additional Information',

                'fields' => [
                    'durations-days' => 'Duration (Days)',
                    'display-type'   => 'Display Type',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'          => 'Attendance Name',
            'day-of-week'   => 'Day of Week',
            'day-period'    => 'Day Periods',
            'work-from'     => 'Work From',
            'work-to'       => 'Work To',
            'starting-date' => 'Starting Date',
            'ending-date'   => 'Ending Date',
            'display-type'  => 'Display Type',
            'created-by'    => '建立者',
            'created-at'    => '建立時間',
            'updated-at'    => '更新時間',
        ],

        'groups' => [
            'activity-type' => 'Activity Type',
            'assignment'    => 'Assignment',
            'assigned-to'   => 'Assigned To',
            'interval'      => 'Interval',
            'delay-unit'    => 'Delay Unit',
            'delay-from'    => 'Delay From',
            'created-by'    => '建立者',
            'created-at'    => '建立時間',
            'updated-at'    => '更新時間',
        ],

        'filters' => [
            'display-type' => 'Display Type',
            'day-of-week'  => 'Day of Week',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Working Hours updated',
                    'body'  => 'The working hours has been updated成功.',
                ],
            ],

            'create' => [
                'notification' => [
                    'title' => 'Working Hours created',
                    'body'  => 'The working hours has been created成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Working Hours deleted',
                    'body'  => 'The working hours has been deleted成功.',
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
                    'title' => 'Working Hours deleted',
                    'body'  => 'The working hours has been deleted成功.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Working Hours deleted',
                    'body'  => 'The working hours has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Working Hours deleted',
                    'body'  => 'The working hours has been deleted成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => '一般資料',

                'entries' => [
                    'name'        => 'Attendance Name',
                    'day-of-week' => 'Day of Week',
                ],
            ],

            'timing-information' => [
                'title' => 'Timing Information',

                'entries' => [
                    'day-period' => 'Day Periods',
                    'week-type'  => 'Week Type',
                    'work-from'  => 'Work From',
                    'work-to'    => 'Work To',
                ],
            ],

            'date-information' => [
                'title' => 'Date Information',

                'entries' => [
                    'starting-date' => 'Starting Date',
                    'ending-date'   => 'Ending Date',
                ],
            ],

            'additional-information' => [
                'title' => 'Additional Information',

                'entries' => [
                    'durations-days' => 'Duration (Days)',
                    'display-type'   => 'Display Type',
                ],
            ],
        ],

        'note' => '備註',
    ],
];
