<?php

return [
    'heading' => '訊息中心',

    'placeholders' => [
        'no-record-found' => 'No記錄 found.',
        'loading'         => '載入訊息中…',
    ],

    'activity-infolist' => [
        'title' => '活動',
    ],

    'cancel-activity-plan-action' => [
        'title' => '取消活動',
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
                'plan-summary'  => '計畫摘要',
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
        'original-note' => '<br><div><span class="font-bold">原備註</span>：:body</div>',
        'original-note' => '<br><div><span class="font-bold">原備註</span>：:body</div>',
        'feedback'      => '<div><span class="font-bold">回饋</span>：<p>:feedback</p></div>',
    ],

    'mark-as-done' => [
        'title' => '標記為完成',
        'form'  => [
            'fields' => [
                'feedback' => '回饋',
            ],
        ],

        'footer-actions' => [
            'label' => '完成並安排下一步',

            'actions' => [
                'notification' => [
                    'mark-as-done' => [
                        'title' => '活動已標記完成',
                        'body'  => 'The activity mark as done成功.',
                    ],
                ],
            ],
        ],
    ],
];
