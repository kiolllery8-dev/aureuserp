<?php

return [
    'form' => [
        'factor-percent'    => 'Factor Percent',
        'factor-ratio'      => 'Factor Ratio',
        'repartition-type'  => 'Repartition Type',
        'document-type'     => 'Document Type',
        'account'           => '科目',
        'tax'               => '稅',
        'tax-closing-entry' => 'Tax Closing Entry',
    ],

    'table' => [
        'columns' => [
            'factor-percent'    => 'Factor Percent(%)',
            'account'           => '科目',
            'tax'               => '稅',
            'company'           => '公司',
            'repartition-type'  => 'Repartition Type',
            'document-type'     => 'Document Type',
            'tax-closing-entry' => 'Tax Closing Entry',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Tax Partition updated',
                    'body'  => 'The tax partition has been updated成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Tax Partition Term deleted',
                    'body'  => 'The tax Partition term has been deleted成功.',
                ],
            ],
        ],

        'header-actions' => [
            'create' => [
                'notification' => [
                    'title' => 'Tax Partition Term created',
                    'body'  => 'The tax Partition term has been created成功.',
                ],
            ],
        ],
    ],
];
