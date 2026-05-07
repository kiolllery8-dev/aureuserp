<?php

return [
    'label'        => '以電子郵件寄送',
    'resend-label' => '重新以電子郵件寄送',

    'form' => [
        'fields' => [
            'to'      => '至',
            'subject' => '主旨',
            'message' => 'Message',
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
