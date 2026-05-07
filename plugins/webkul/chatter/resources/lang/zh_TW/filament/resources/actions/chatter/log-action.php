<?php

return [
    'setup' => [
        'title'        => '記錄備註',
        'submit-title' => '記錄',

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
                    'title' => '已新增記錄備註',
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
