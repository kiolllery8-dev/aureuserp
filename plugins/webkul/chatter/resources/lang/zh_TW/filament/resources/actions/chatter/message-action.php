<?php

return [
    'setup' => [
        'title'        => '傳送訊息',
        'submit-title' => '傳送',

        'form' => [
            'fields' => [
                'hide-subject'            => 'Hide Subject',
                'add-subject'             => '新增Subject',
                'subject'                 => '主旨',
                'write-message-here'      => 'Write your message here',
                'attachments-helper-text' => 'Max file size: 10MB. Allowed types: Images, PDF, Word, Excel, Text',
            ],
        ],

        'actions' => [
            'notification' => [
                'success' => [
                    'title' => '訊息已寄出',
                    'body'  => 'Your message has been send成功.',
                ],

                'error' => [
                    'title' => '訊息寄送錯誤',
                    'body'  => '訊息寄送失敗',
                ],
            ],

            'mail' => [
                'subject' => ':record_name',
            ],
        ],
    ],
];
