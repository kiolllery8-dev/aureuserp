<?php

return [
    'form' => [
        'fields' => [
            'tax-source'      => '稅務來源',
            'tax-destination' => '稅務目的地',
        ],
    ],

    'table' => [
        'columns' => [
            'tax-source'      => '稅務來源',
            'tax-destination' => '稅務目的地',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Payment Due Term已更新',
                    'body'  => 'The payment due term has been已更新成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Payment Due Term已刪除',
                    'body'  => 'The payment due term has been已刪除成功.',
                ],
            ],
        ],

        'header-actions' => [
            'create' => [
                'notification' => [
                    'title' => 'Payment Due Term已建立',
                    'body'  => 'The payment due term has been已建立成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'tax-source'      => '稅務來源',
            'tax-destination' => '稅務目的地',
        ],
    ],
];
