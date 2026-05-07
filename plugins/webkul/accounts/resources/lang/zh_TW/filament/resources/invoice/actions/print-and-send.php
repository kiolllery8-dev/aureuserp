<?php

return [
    'title' => '列印並寄送',

    'modal' => [
        'title' => 'Preview Invoice',

        'form' => [
            'partners'    => '客戶',
            'subject'     => '主旨',
            'description' => '說明',
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
