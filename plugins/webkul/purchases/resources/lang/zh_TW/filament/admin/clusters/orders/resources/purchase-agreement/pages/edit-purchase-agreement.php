<?php

return [
    'notification' => [
        'title' => 'Purchase Agreement已更新',
        'body'  => 'The purchase agreement has been已更新成功.',
    ],

    'header-actions' => [
        'confirm' => [
            'label' => '確認',
        ],

        'close' => [
            'label' => '關閉',
            'notification' => [
                'warning' => [
                    'title' => '無法關閉採購合約',
                    'body'  => '部分相關報價邀請未處於完成或已取消狀態，無法關閉此採購合約。',
                ],
            ],
        ],

        'cancel' => [
            'label' => '取消',
        ],

        'print' => [
            'label' => '列印',
        ],

        'delete' => [
            'notification' => [
                'title' => '採購合約已刪除',
                'body'  => 'The purchase agreement has been已刪除成功.',
            ],
        ],
    ],
];
