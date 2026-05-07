<?php

return [
    'form' => [
        'fields' => [
            'tax-source'      => '稅 來源',
            'tax-destination' => '稅 Destination',
        ],
    ],

    'table' => [
        'columns' => [
            'tax-source'      => '稅 來源',
            'tax-destination' => '稅 Destination',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => '付款 Due 條件已更新',
                    'body'  => 'The payment due term has been已更新成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => '付款 Due 條件已刪除',
                    'body'  => 'The payment due term has been已刪除成功.',
                ],
            ],
        ],

        'header-actions' => [
            'create' => [
                'notification' => [
                    'title' => '付款 Due 條件已建立',
                    'body'  => 'The payment due term has been已建立成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'tax-source'      => '稅 來源',
            'tax-destination' => '稅 Destination',
        ],
    ],
];
