<?php

return [
    'title' => '退回草稿',

    'validation' => [
        'notification' => [
            'error' => [
                'invalid-state' => [
                    'title' => '分錄狀態無效',
                    'body'  => '只有已過帳或已取消的分錄可以重設為草稿。',
                ],
            ],
        ],
    ],
];
