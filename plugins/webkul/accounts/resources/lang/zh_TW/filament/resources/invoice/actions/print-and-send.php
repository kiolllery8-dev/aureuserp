<?php

return [
    'title' => 'Print & Send',

    'modal' => [
        'title' => 'Preview 發票',

        'form' => [
            'partners'    => '客戶',
            'subject'     => '主旨',
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
                'title' => '發票 已寄出',
                'body'  => '發票 has been sent成功.',
            ],
        ],
    ],
];
