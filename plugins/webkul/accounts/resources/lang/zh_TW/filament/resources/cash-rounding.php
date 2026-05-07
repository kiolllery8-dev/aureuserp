<?php

return [
    'form' => [
        'fields' => [
            'name'               => '名稱',
            'rounding-precision' => 'Rounding Precision',
            'rounding-strategy'  => 'Rounding Strategy',
            'profit-account'     => 'Profit 帳戶',
            'loss-account'       => 'Loss 帳戶',
            'rounding-method'    => 'Rounding 方式',
        ],
    ],

    'table' => [
        'columns' => [
            'name'                 => '名稱',
            'rounding-strategy'    => 'Rounding Strategy',
            'rounding-method'      => 'Rounding 方式',
            'created-by'           => '建立者',
            'profit-account'       => 'Profit 帳戶',
            'loss-account'         => 'Loss 帳戶',
        ],

        'groups' => [
            'name'              => '名稱',
            'rounding-strategy' => 'Rounding Strategy',
            'rounding-method'   => 'Rounding 方式',
            'created-by'        => '建立者',
            'profit-account'    => 'Profit 帳戶',
            'loss-account'      => 'Loss 帳戶',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Cash Rounding已刪除',
                    'body'  => 'The cash rounding has been已刪除成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Cash Rounding已刪除',
                    'body'  => 'The cash rounding has been已刪除成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name'               => '名稱',
            'rounding-precision' => 'Rounding Precision',
            'rounding-strategy'  => 'Rounding Strategy',
            'profit-account'     => 'Profit 帳戶',
            'loss-account'       => 'Loss 帳戶',
            'rounding-method'    => 'Rounding 方式',
        ],
    ],
];
