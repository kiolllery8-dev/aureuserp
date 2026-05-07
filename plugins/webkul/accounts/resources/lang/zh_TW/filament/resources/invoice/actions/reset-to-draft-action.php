<?php

return [
    'title' => '退回草稿',

    'validation' => [
        'notification' => [
            'error' => [
                'invalid-state' => [
                    'title' => '帳本 Entry State Invalid',
                    'body'  => 'Only posted or cancelled journal entries can be reset to draft.',
                ],
            ],
        ],
    ],
];
