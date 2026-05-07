<?php

return [
    'heading' => '訊息中心',

    'placeholders' => [
        'no-record-found' => 'No記錄 found.',
        'loading'         => 'Loading Chatter...',
    ],

    'activity-infolist' => [
        'title' => '活動',
    ],

    'cancel-activity-plan-action' => [
        'title' => 'Cancel 活動',
    ],

    'delete-message-action' => [
        'title' => '刪除Message',
    ],

    'edit-activity' => [
        'title' => '編輯Activity',

        'form' => [
            'fields' => [
                'activity-plan' => '活動計畫',
                'plan-date'     => 'Plan日期',
                'plan-summary'  => 'Plan Summary',
                'activity-type' => '活動類型',
                'due-date'      => '到期日',
                'summary'       => '摘要',
                'assigned-to'   => '指派給',
            ],
        ],

        'action' => [
            'notification' => [
                'success' => [
                    'title' => 'Activity已更新',
                    'body'  => 'The activity has been已更新成功.',
                ],
            ],
        ],
    ],

    'process-message' => [
        'original-note' => '<br><div><span class="font-bold">Original 備註</span>: :body</div>',
        'original-note' => '<br><div><span class="font-bold">Original 備註</span>: :body</div>',
        'feedback'      => '<div><span class="font-bold">Feedback</span>: <p>:feedback</p></div>',
    ],

    'mark-as-done' => [
        'title' => 'Mark as done',
        'form'  => [
            'fields' => [
                'feedback' => 'Feedback',
            ],
        ],

        'footer-actions' => [
            'label' => 'Done & Schedule Next',

            'actions' => [
                'notification' => [
                    'mark-as-done' => [
                        'title' => '活動 mark as done',
                        'body'  => 'The activity mark as done成功.',
                    ],
                ],
            ],
        ],
    ],
];
