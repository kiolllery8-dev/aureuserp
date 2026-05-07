<?php

return [
    'label' => '以電子郵件寄送訂單',

    'form' => [
        'fields' => [
            'to'      => '至',
            'subject' => '主旨',
            'message' => '訊息',
        ],
    ],

    'action' => [
        'notification' => [
            'success' => [
                'title' => '電子郵件已寄出',
                'body'  => 'The email has been sent成功.',
            ],
        ],
    ],
];
