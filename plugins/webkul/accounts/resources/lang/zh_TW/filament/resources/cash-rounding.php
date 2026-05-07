<?php

return [
    'form' => [
        'fields' => [
            'name'               => '名稱',
            'rounding-precision' => 'Rounding Precision',
            'rounding-strategy'  => 'Rounding Strategy',
            'profit-account'     => 'Profit Account',
            'loss-account'       => 'Loss Account',
            'rounding-method'    => 'Rounding Method',
        ],
    ],

    'table' => [
        'columns' => [
            'name'                 => '名稱',
            'rounding-strategy'    => 'Rounding Strategy',
            'rounding-method'      => 'Rounding Method',
            'created-by'           => '建立者',
            'profit-account'       => 'Profit Account',
            'loss-account'         => 'Loss Account',
        ],

        'groups' => [
            'name'              => '名稱',
            'rounding-strategy' => 'Rounding Strategy',
            'rounding-method'   => 'Rounding Method',
            'created-by'        => '建立者',
            'profit-account'    => 'Profit Account',
            'loss-account'      => 'Loss Account',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Cash Rounding deleted',
                    'body'  => 'The cash rounding has been deleted成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Cash Rounding deleted',
                    'body'  => 'The cash rounding has been deleted成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name'               => '名稱',
            'rounding-precision' => 'Rounding Precision',
            'rounding-strategy'  => 'Rounding Strategy',
            'profit-account'     => 'Profit Account',
            'loss-account'       => 'Loss Account',
            'rounding-method'    => 'Rounding Method',
        ],
    ],
];
