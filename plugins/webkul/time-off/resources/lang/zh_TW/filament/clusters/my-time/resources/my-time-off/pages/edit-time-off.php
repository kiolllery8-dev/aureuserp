<?php

return [
    'notification' => [
        'title'              => '請假已更新',
        'body'               => 'The time off has been已更新成功.',
        'action_not_allowed' => [
            'title' => '動作 Not Allowed',
            'body'  => 'You cannot modify this leave request as it is in a locked state.',
        ],
        'overlap' => [
            'title' => 'Overlapping Leave Request',
            'body'  => 'The selected leave dates overlap with an existing request. Please choose different dates.',
        ],
    ],

    'header-actions' => [
        'delete' => [
            'notification' => [
                'title' => '請假已刪除',
                'body'  => 'The time off has been已刪除成功.',
            ],
        ],
    ],
];
