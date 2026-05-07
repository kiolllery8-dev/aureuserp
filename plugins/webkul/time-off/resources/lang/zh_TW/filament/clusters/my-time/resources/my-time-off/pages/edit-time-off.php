<?php

return [
    'notification' => [
        'title'              => 'Time Off已更新',
        'body'               => 'The time off has been已更新成功.',
        'action_not_allowed' => [
            'title' => 'Action Not Allowed',
            'body'  => 'You cannot modify this leave request as it is in a locked state.',
        ],
        'overlap' => [
            'title' => '請假時間重疊',
            'body'  => 'The selected leave dates overlap with an existing request. Please choose different dates.',
        ],
    ],

    'header-actions' => [
        'delete' => [
            'notification' => [
                'title' => 'Time Off已刪除',
                'body'  => 'The time off has been已刪除成功.',
            ],
        ],
    ],
];
