<?php

return [
    'form' => [
        'sections' => [
            'activity-details' => [
                'title' => 'Activity Details',

                'fields' => [
                    'activity-type' => 'Activity Type',
                    'summary'       => '摘要',
                    'note'          => '備註',
                ],
            ],

            'assignment' => [
                'title' => 'Assignment',

                'fields' => [
                    'assignment' => 'Assignment',
                    'assignee'   => 'Assignee',
                ],
            ],

            'delay-information' => [
                'title' => 'Delay Information',

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
            'activity-type' => 'Activity Type',
            'summary'       => '摘要',
            'assignment'    => 'Assignment',
            'assigned-to'   => 'Assigned To',
            'interval'      => 'Interval',
            'delay-unit'    => 'Delay Unit',
            'delay-from'    => 'Delay From',
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
            'activity-type'   => 'Activity Type',
            'activity-status' => 'Activity Status',
            'has-delay'       => 'Has Delay',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Activity template updated',
                    'body'  => 'The activity template has been updated成功.',
                ],
            ],

            'create' => [
                'notification' => [
                    'title' => 'Activity template created',
                    'body'  => 'The activity template has been created成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Activity template deleted',
                    'body'  => 'The activity template has been deleted成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Activity templates deleted',
                    'body'  => 'The activity templates has been deleted成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'activity-details' => [
                'title' => 'Activity Details',

                'entries' => [
                    'activity-type' => 'Activity Type',
                    'summary'       => '摘要',
                ],
            ],

            'assignment' => [
                'title' => 'Assignment',

                'entries' => [
                    'assignment' => 'Assignment',
                    'assignee'   => 'Assignee',
                ],
            ],

            'delay-information' => [
                'title' => 'Delay Information',

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
