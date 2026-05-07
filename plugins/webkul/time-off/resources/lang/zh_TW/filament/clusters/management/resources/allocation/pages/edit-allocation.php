<?php

return [
    'notification' => [
        'title' => 'Allocation已更新',
        'body'  => 'The allocation has been已更新成功.',
    ],

    'header-actions' => [
        'delete' => [
            'notification' => [
                'title' => '分配已刪除',
                'body'  => 'The allocation has been已刪除成功.',
            ],
        ],
        'approved' => [
            'title' => '已核准',

            'notification' => [
                'title' => '分配已核准',
                'body'  => 'The allocation has been approved成功.',
            ],
        ],
        'refuse' => [
            'title' => '拒絕',

            'notification' => [
                'title' => '分配已拒絕',
                'body'  => 'The allocation has been refused成功.',
            ],
        ],
        'mark-as-ready-to-confirm' => [
            'title' => '標記為待確認',

            'notification' => [
                'title' => '已標記為待確認',
                'body'  => 'The allocation has been marked as ready to confirm成功.',
            ],
        ],
    ],
];
