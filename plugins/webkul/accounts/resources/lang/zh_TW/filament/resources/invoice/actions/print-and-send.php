<?php

return [
    'title' => 'Print & Send',

    'modal' => [
        'title' => 'Preview Invoice',

        'form' => [
            'partners'    => '客戶',
            'subject'     => 'Subject',
            'description' => '描述',
            'files'       => '附件',
        ],

        'action' => [
            'submit' => [
                'title' => '傳送',
            ],
        ],

        'notification' => [
            'invoice-sent' => [
                'title' => 'Invoice Sent',
                'body'  => 'Invoice has been sent成功.',
            ],
        ],
    ],
];
