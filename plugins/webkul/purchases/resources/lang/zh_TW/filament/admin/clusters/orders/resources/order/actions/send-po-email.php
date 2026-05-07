<?php

return [
    'label' => 'Send PO By 電子郵件',

    'form' => [
        'fields' => [
            'to'      => 'To',
            'subject' => '主旨',
            'message' => 'Message',
        ],
    ],

    'action' => [
        'notification' => [
            'success' => [
                'title' => '電子郵件 sent',
                'body'  => 'The email has been sent成功.',
            ],
        ],
    ],
];
