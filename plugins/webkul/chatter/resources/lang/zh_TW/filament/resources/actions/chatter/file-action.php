<?php

return [
    'setup' => [
        'title'   => '附件',
        'tooltip' => '上傳附件',

        'form' => [
            'fields' => [
                'files'                  => '檔案',
                'attachment-helper-text' => '最大檔案 10MB，允許類型：圖片、PDF、Word、Excel、文字',

                'actions' => [
                    'delete' => [
                        'title' => 'File已刪除',
                        'body'  => 'File has been已刪除成功.',
                    ],
                ],
            ],
        ],

        'actions' => [
            'notification' => [
                'success' => [
                    'title' => '附件已上傳',
                    'body'  => 'Attachments uploaded成功.',
                ],

                'warning'  => [
                    'title' => '沒有新檔案',
                    'body'  => '所有檔案都已上傳。',
                ],

                'error' => [
                    'title' => '附件上傳錯誤',
                    'body'  => '附件上傳失敗 ',
                ],
            ],
        ],
    ],
];
