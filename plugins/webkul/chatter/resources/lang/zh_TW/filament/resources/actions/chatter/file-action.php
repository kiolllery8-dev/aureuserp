<?php

return [
    'setup' => [
        'title'   => '附件',
        'tooltip' => 'Upload Attachments',

        'form' => [
            'fields' => [
                'files'                  => '檔案',
                'attachment-helper-text' => 'Max file size: 10MB. Allowed types: Images, PDF, Word, Excel, Text',

                'actions' => [
                    'delete' => [
                        'title' => 'File deleted',
                        'body'  => 'File has been deleted成功.',
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
