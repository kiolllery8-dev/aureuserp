<?php

return [
    'setup' => [
        'title'               => '排程活動',
        'submit-action-title' => '排程',

        'form' => [
            'fields' => [
                'activity-plan' => '活動計畫',
                'plan-date'     => 'Plan日期',
                'plan-summary'  => '計畫摘要',
                'activity-type' => '活動類型',
                'due-date'      => '到期日',
                'summary'       => '摘要',
                'assigned-to'   => '指派給',
                'log-note'      => '記錄備註',
            ],
        ],

        'actions' => [
            'notification' => [
                'success' => [
                    'title' => '活動已建立',
                    'body'  => 'The activity has been已建立.',
                ],

                'warning'  => [
                    'title' => '沒有新檔案',
                    'body'  => '所有檔案都已上傳。',
                ],

                'error' => [
                    'title' => 'Activity creation失敗',
                    'body'  => '建立活動失敗 ',
                ],
            ],
        ],
    ],
];
