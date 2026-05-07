<?php

return [
    'setup' => [
        'title'        => '記錄備註',
        'submit-title' => '記錄',

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
                    'title' => 'Log Note added',
                    'body'  => 'Your log note added成功.',
                ],

                'error' => [
                    'title' => '新增記錄錯誤',
                    'body'  => '新增記錄備註失敗',
                ],
            ],
        ],
    ],
];
