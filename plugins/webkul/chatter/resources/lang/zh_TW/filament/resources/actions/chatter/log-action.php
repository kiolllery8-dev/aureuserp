<?php

return [
    'setup' => [
        'title'        => 'Log 備註',
        'submit-title' => 'Log',

        'form' => [
            'fields' => [
                'hide-subject'            => 'Hide 主旨',
                'add-subject'             => '新增Subject',
                'subject'                 => '主旨',
                'write-message-here'      => 'Write your message here',
                'attachments-helper-text' => 'Max file size: 10MB. Allowed types: 圖片, PDF, Word, Excel, Text',
            ],
        ],

        'actions' => [
            'notification' => [
                'success' => [
                    'title' => 'Log 備註 added',
                    'body'  => 'Your log note added成功.',
                ],

                'error' => [
                    'title' => 'Log add error',
                    'body'  => 'Failed to add your log note',
                ],
            ],
        ],
    ],
];
