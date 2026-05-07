    <?php

    return [
        'setup' => [
            'title'               => '追蹤者',
            'submit-action-title' => '新增Follower',
            'tooltip'             => '新增Follower',

            'form' => [
                'fields' => [
                    'recipients'  => '收件人',
                    'notify-user' => 'Notify User',
                    'add-a-note'  => '新增a note',
                ],
            ],

            'actions' => [
                'notification' => [
                    'success' => [
                        'title' => '已新增追蹤者',
                        'body'  => '追蹤者已成功新增。',
                    ],

                    'partial_message' => [
                        'title'    => '訊息已寄出並通知',
                        'single'   => ':count follower was not notified due to missing email: :names',
                        'multiple' => ':count followers were not notified due to missing emails: :names',
                    ],

                    'error' => [
                        'title' => '新增追蹤者錯誤',
                        'body'  => 'Failed to ":partner" as follower',
                    ],
                ],

                'mail' => [
                    'subject' => 'Invitation to follow :model: :department',
                ],
            ],
        ],
    ];
