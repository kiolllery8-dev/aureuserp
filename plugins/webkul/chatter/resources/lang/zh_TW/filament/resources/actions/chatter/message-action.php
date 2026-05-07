<?php

return [
    'setup' => [
        'title'        => '傳送訊息',
        'submit-title' => '傳送',

        'form' => [
            'fields' => [
                'hide-subject'            => 'Hide 主旨',
                'add-subject'             => '新增主旨',
                'subject'                 => '主旨',
                'write-message-here'      => 'Write your message here',
                'attachments-helper-text' => 'Max file size: 10MB. Allowed types: 圖片, PDF, Word, Excel, Text',
            ],
        ],

        'actions' => [
            'notification' => [
                'success' => [
                    'title' => 'Message sent',
                    'body'  => 'Your message has been send成功.',
                ],

                'error' => [
                    'title' => 'Message sent error',
                    'body'  => 'Failed to send your message',
                ],
            ],

            'mail' => [
                'subject' => ':record_name',
            ],
        ],
    ],
];
