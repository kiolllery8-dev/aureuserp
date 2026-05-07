<?php

return [
    'label'        => 'Send By Email',
    'resend-label' => 'Re-Send By Email',

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
                'title' => 'Email sent',
                'body'  => 'The email has been sent成功.',
            ],
        ],
    ],
];
