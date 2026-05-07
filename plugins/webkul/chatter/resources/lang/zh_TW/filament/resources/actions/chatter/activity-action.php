<?php

return [
    'setup' => [
        'title'               => 'Schedule Activity',
        'submit-action-title' => '排程',

        'form' => [
            'fields' => [
                'activity-plan' => '活動計畫',
                'plan-date'     => 'Plan日期',
                'plan-summary'  => 'Plan Summary',
                'activity-type' => '活動類型',
                'due-date'      => '到期日',
                'summary'       => '摘要',
                'assigned-to'   => '指派給',
                'log-note'      => 'Log note',
            ],
        ],

        'actions' => [
            'notification' => [
                'success' => [
                    'title' => 'Activity Created',
                    'body'  => 'The activity has been已建立.',
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
