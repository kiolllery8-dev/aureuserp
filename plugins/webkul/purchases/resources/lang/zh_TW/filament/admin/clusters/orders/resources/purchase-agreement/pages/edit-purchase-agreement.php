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
                    'title' => 'Unable to close purchase agreement',
                    'body'  => 'You cannot close this purchase agreement because some related RFQs are not in Done or Canceled status.',
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
