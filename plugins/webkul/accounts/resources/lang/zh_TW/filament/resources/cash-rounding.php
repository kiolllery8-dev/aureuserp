<?php

return [
    'form' => [
        'fields' => [
            'name'               => '名稱',
            'rounding-precision' => '進位精度',
            'rounding-strategy'  => '進位策略',
            'profit-account'     => '利潤科目',
            'loss-account'       => '損失科目',
            'rounding-method'    => '進位方式',
        ],
    ],

    'table' => [
        'columns' => [
            'name'                 => '名稱',
            'rounding-strategy'    => '進位策略',
            'rounding-method'      => '進位方式',
            'created-by'           => '建立者',
            'profit-account'       => '利潤科目',
            'loss-account'         => '損失科目',
        ],

        'groups' => [
            'name'              => '名稱',
            'rounding-strategy' => '進位策略',
            'rounding-method'   => '進位方式',
            'created-by'        => '建立者',
            'profit-account'    => '利潤科目',
            'loss-account'      => '損失科目',
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
            'rounding-precision' => '進位精度',
            'rounding-strategy'  => '進位策略',
            'profit-account'     => '利潤科目',
            'loss-account'       => '損失科目',
            'rounding-method'    => '進位方式',
        ],
    ],
];
