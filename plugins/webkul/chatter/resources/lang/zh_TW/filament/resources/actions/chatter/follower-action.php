    <?php

    return [
        'setup' => [
            'title'               => 'Followers',
            'submit-action-title' => '新增Follower',
            'tooltip'             => '新增Follower',

            'form' => [
                'fields' => [
                    'recipients'  => 'Recipients',
                    'notify-user' => 'Notify User',
                    'add-a-note'  => '新增a note',
                ],
            ],

            'actions' => [
                'notification' => [
                    'success' => [
                        'title' => 'Follower Added',
                        'body'  => 'Follower has been added Successfully.',
                    ],

                    'partial_message' => [
                        'title'    => 'Message sent with a notice',
                        'single'   => ':count follower was not notified due to missing email: :names',
                        'multiple' => ':count followers were not notified due to missing emails: :names',
                    ],

                    'error' => [
                        'title' => 'Follower added error',
                        'body'  => 'Failed to ":partner" as follower',
                    ],
                ],

                'mail' => [
                    'subject' => 'Invitation to follow :model: :department',
                ],
            ],
        ],
    ];
