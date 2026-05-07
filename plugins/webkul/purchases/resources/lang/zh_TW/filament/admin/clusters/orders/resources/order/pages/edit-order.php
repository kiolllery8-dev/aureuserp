<?php

return [
    'notification' => [
        'title' => 'Order已更新',
        'body'  => 'The order has been已更新成功.',
    ],

    'header-actions' => [
        'confirm' => [
            'label' => '確認',
        ],

        'close' => [
            'label' => '關閉',
        ],

        'cancel' => [
            'label' => '取消',
        ],

        'print' => [
            'label' => '列印',
        ],

        'delete' => [
            'notification' => [
                'success' => [
                    'title' => '訂單已刪除',
                    'body'  => 'The order has been已刪除成功.',
                ],

                'error' => [
                    'title' => 'Order could not be已刪除',
                    'body'  => 'The order cannot be已刪除 because it is currently in use.',
                ],
            ],
        ],
    ],
];
