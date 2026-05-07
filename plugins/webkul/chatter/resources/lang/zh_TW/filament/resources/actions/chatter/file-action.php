<?php

return [
    'setup' => [
        'title'   => '附件',
        'tooltip' => 'Upload Attachments',

        'form' => [
            'fields' => [
                'files'                  => '檔案',
                'attachment-helper-text' => 'Max file size: 10MB. Allowed types: 圖片, PDF, Word, Excel, Text',

                'actions' => [
                    'delete' => [
                        'title' => '檔案已刪除',
                        'body'  => '檔案 has been已刪除成功.',
                    ],
                ],
            ],
        ],

        'actions' => [
            'notification' => [
                'success' => [
                    'title' => 'Attachments Uploaded',
                    'body'  => 'Attachments uploaded成功.',
                ],

                'warning'  => [
                    'title' => 'No new files',
                    'body'  => 'All files have already been uploaded.',
                ],

                'error' => [
                    'title' => 'Attachment upload error',
                    'body'  => 'Failed to upload attachments ',
                ],
            ],
        ],
    ],
];
