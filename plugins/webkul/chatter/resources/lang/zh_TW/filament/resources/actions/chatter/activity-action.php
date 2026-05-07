<?php

return [
    'setup' => [
        'title'               => 'Schedule Activity',
        'submit-action-title' => 'Schedule',

        'form' => [
            'fields' => [
                'activity-plan' => 'Activity Plan',
                'plan-date'     => 'Plan Date',
                'plan-summary'  => 'Plan Summary',
                'activity-type' => 'Activity Type',
                'due-date'      => '到期日',
                'summary'       => '摘要',
                'assigned-to'   => 'Assigned To',
                'log-note'      => 'Log note',
            ],
        ],

        'actions' => [
            'notification' => [
                'success' => [
                    'title' => 'Activity Created',
                    'body'  => 'The activity has been created.',
                ],

                'warning'  => [
                    'title' => 'No new files',
                    'body'  => 'All files have already been uploaded.',
                ],

                'error' => [
                    'title' => 'Activity creation失敗',
                    'body'  => 'Failed to create activity ',
                ],
            ],
        ],
    ],
];
