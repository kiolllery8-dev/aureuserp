<?php

return [
    'notification' => [
        'title' => 'Receipt已更新',
        'body'  => 'The receipt has been已更新成功.',
    ],

    'header-actions' => [
        'print' => [
            'label' => '列印',
        ],

        'delete' => [
            'notification' => [
                'success' => [
                    'title' => '收貨已刪除',
                    'body'  => 'The receipt has been已刪除成功.',
                ],

                'error' => [
                    'title' => 'Receipt could not be已刪除',
                    'body'  => 'The Receipt cannot be已刪除 because it is currently in use.',
                ],
            ],
        ],
    ],
];
