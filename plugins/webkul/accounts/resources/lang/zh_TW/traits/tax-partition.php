<?php

return [
    'form' => [
        'factor-percent'    => 'Factor Percent',
        'factor-ratio'      => 'Factor Ratio',
        'repartition-type'  => 'Repartition類型',
        'document-type'     => 'Document類型',
        'account'           => '帳戶',
        'tax'               => '稅',
        'tax-closing-entry' => 'Tax Closing Entry',
    ],

    'table' => [
        'columns' => [
            'factor-percent'    => 'Factor Percent(%)',
            'account'           => '帳戶',
            'tax'               => '稅',
            'company'           => '公司',
            'repartition-type'  => 'Repartition類型',
            'document-type'     => 'Document類型',
            'tax-closing-entry' => 'Tax Closing Entry',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Tax Partition已更新',
                    'body'  => 'The tax partition has been已更新成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Tax Partition Term已刪除',
                    'body'  => 'The tax Partition term has been已刪除成功.',
                ],
            ],
        ],

        'header-actions' => [
            'create' => [
                'notification' => [
                    'title' => 'Tax Partition Term已建立',
                    'body'  => 'The tax Partition term has been已建立成功.',
                ],
            ],
        ],
    ],
];
