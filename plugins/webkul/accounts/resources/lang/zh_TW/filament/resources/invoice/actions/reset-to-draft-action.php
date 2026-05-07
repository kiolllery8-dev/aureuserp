<?php

return [
    'title' => '退回草稿',

    'validation' => [
        'notification' => [
            'error' => [
                'invalid-state' => [
                    'title' => 'Journal Entry State Invalid',
                    'body'  => '只有已過帳或已取消的分錄可以重設為草稿。',
                ],
            ],
        ],
    ],
];
