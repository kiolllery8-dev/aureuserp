<?php

return [
    'notification' => [
        'title' => 'Allocation updated',
        'body'  => 'The allocation has been updated成功.',
    ],

    'header-actions' => [
        'delete' => [
            'notification' => [
                'title' => 'Allocation deleted',
                'body'  => 'The allocation has been deleted成功.',
            ],
        ],
        'approved' => [
            'title' => '已核准',

            'notification' => [
                'title' => 'Allocation approved',
                'body'  => 'The allocation has been approved成功.',
            ],
        ],
        'refuse' => [
            'title' => 'Refuse',

            'notification' => [
                'title' => 'Allocation refused',
                'body'  => 'The allocation has been refused成功.',
            ],
        ],
        'mark-as-ready-to-confirm' => [
            'title' => 'Mark as Ready to Confirm',

            'notification' => [
                'title' => 'Marked as ready to confirm',
                'body'  => 'The allocation has been marked as ready to confirm成功.',
            ],
        ],
    ],
];
