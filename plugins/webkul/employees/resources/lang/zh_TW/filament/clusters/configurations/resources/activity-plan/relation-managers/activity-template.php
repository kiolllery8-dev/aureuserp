<?php

return [
    'form' => [
        'sections' => [
            'activity-details' => [
                'title' => 'Activity Details',

                'fields' => [
                    'activity-type' => '活動類型',
                    'summary'       => '摘要',
                    'note'          => '備註',
                ],
            ],

            'assignment' => [
                'title' => '指派',

                'fields' => [
                    'assignment' => '指派',
                    'assignee'   => 'Assignee',
                ],
            ],

            'delay-information' => [
                'title' => 'Delay資料',

                'fields' => [
                    'delay-count'            => 'Delay Count',
                    'delay-unit'             => 'Delay Unit',
                    'delay-from'             => 'Delay From',
                    'delay-from-helper-text' => 'Source of delay calculation',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'activity-type' => '活動類型',
            'summary'       => '摘要',
            'assignment'    => '指派',
            'assigned-to'   => '指派給',
            'interval'      => 'Interval',
            'delay-unit'    => 'Delay Unit',
            'delay-from'    => 'Delay From',
            'created-by'    => '建立者',
            'created-at'    => '建立時間',
            'updated-at'    => '更新時間',
        ],

        'groups' => [
            'activity-type' => '活動類型',
            'assignment'    => '指派',
            'assigned-to'   => '指派給',
            'interval'      => 'Interval',
            'delay-unit'    => 'Delay Unit',
            'delay-from'    => 'Delay From',
            'created-by'    => '建立者',
            'created-at'    => '建立時間',
            'updated-at'    => '更新時間',
        ],

        'filters' => [
            'activity-type'   => '活動類型',
            'activity-status' => 'Activity狀態',
            'has-delay'       => 'Has Delay',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Activity template已更新',
                    'body'  => 'The activity template has been已更新成功.',
                ],
            ],

            'create' => [
                'notification' => [
                    'title' => 'Activity template已建立',
                    'body'  => 'The activity template has been已建立成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Activity template已刪除',
                    'body'  => 'The activity template has been已刪除成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Activity templates已刪除',
                    'body'  => 'The activity templates has been已刪除成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'activity-details' => [
                'title' => 'Activity Details',

                'entries' => [
                    'activity-type' => '活動類型',
                    'summary'       => '摘要',
                ],
            ],

            'assignment' => [
                'title' => '指派',

                'entries' => [
                    'assignment' => '指派',
                    'assignee'   => 'Assignee',
                ],
            ],

            'delay-information' => [
                'title' => 'Delay資料',

                'entries' => [
                    'delay-count'            => 'Delay Count',
                    'delay-unit'             => 'Delay Unit',
                    'delay-from'             => 'Delay From',
                    'delay-from-helper-text' => 'Source of delay calculation',
                ],
            ],
        ],

        'note' => '備註',
    ],
];
