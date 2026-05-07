<?php

return [
    'global-search' => [
        'zip-from' => '郵遞區號（起）',
        'zip-to'   => '郵遞區號（迄）',
        'name'     => '名稱',
    ],

    'form' => [
        'fields' => [
            'name'                   => '名稱',
            'foreign-vat'            => '外國 VAT',
            'country'                => '國家',
            'country-group'          => 'Country Group',
            'zip-from'               => '郵遞區號（起）',
            'zip-to'                 => '郵遞區號（迄）',
            'detect-automatically'   => '自動偵測',
            'notes'                  => '備註',
            'company'                => '公司',
        ],
        'tabs' => [
            'account-mapping' => [
                'table' => [
                    'columns' => [
                        'source-account'      => 'Source Account',
                        'destination-account' => 'Destination Account',
                    ],
                ],

            ],
            'tax-mapping' => [
                'table' => [
                    'columns' => [
                        'tax-source'      => 'Tax Source',
                        'tax-destination' => 'Tax Destination',
                    ],
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'                 => '名稱',
            'company'              => '公司',
            'country'              => '國家',
            'country-group'        => 'Country Group',
            'created-by'           => '建立者',
            'zip-from'             => '郵遞區號（起）',
            'zip-to'               => '郵遞區號（迄）',
            'status'               => '狀態',
            'detect-automatically' => '自動偵測',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Payment Term已刪除',
                    'body'  => 'The payment term has been已刪除成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Fiscal Position已刪除',
                    'body'  => 'The fiscal Position has been已刪除成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name'                 => '名稱',
            'foreign-vat'          => '外國 VAT',
            'country'              => '國家',
            'country-group'        => 'Country Group',
            'zip-from'             => '郵遞區號（起）',
            'zip-to'               => '郵遞區號（迄）',
            'detect-automatically' => '自動偵測',
            'notes'                => '備註',
        ],
    ],
];
