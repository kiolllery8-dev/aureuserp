<?php

return [
    'setup' => [
        'title'        => '傳送訊息',
        'submit-title' => '傳送',

        'form' => [
            'fields' => [
                'hide-subject'            => '隱藏主旨',
                'add-subject'             => '新增Subject',
                'subject'                 => '主旨',
                'write-message-here'      => '在這裡輸入訊息',
                'attachments-helper-text' => '最大檔案 10MB，允許類型：圖片、PDF、Word、Excel、文字',
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
