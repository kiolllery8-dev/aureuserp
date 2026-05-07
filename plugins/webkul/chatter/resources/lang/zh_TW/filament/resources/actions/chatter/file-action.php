<?php

return [
    'setup' => [
        'title'   => '附件',
        'tooltip' => '上傳附件',

        'form' => [
            'fields' => [
                'files'                  => '檔案',
                'attachment-helper-text' => 'Max file size: 10MB. Allowed types: Images, PDF, Word, Excel, Text',

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
                    'title' => 'No new files',
                    'body'  => 'All files have already been uploaded.',
                ],

                'error' => [
                    'title' => '附件上傳錯誤',
                    'body'  => '附件上傳失敗 ',
                ],
            ],
        ],
    ],
];
