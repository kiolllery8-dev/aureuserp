<?php

return [
    'global-search' => [
        'zip-from' => 'Zip From',
        'zip-to'   => 'Zip To',
        'name'     => '名稱',
    ],

    'form' => [
        'fields' => [
            'name'                   => '名稱',
            'foreign-vat'            => 'Foreign VAT',
            'country'                => '國家',
            'country-group'          => 'Country Group',
            'zip-from'               => 'Zip From',
            'zip-to'                 => 'Zip To',
            'detect-automatically'   => 'Detect Automatically',
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
            'zip-from'             => 'Zip From',
            'zip-to'               => 'Zip To',
            'status'               => '狀態',
            'detect-automatically' => 'Detect Automatically',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Payment Term deleted',
                    'body'  => 'The payment term has been deleted成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Fiscal Position deleted',
                    'body'  => 'The fiscal Position has been deleted成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name'                 => '名稱',
            'foreign-vat'          => 'Foreign VAT',
            'country'              => '國家',
            'country-group'        => 'Country Group',
            'zip-from'             => 'Zip From',
            'zip-to'               => 'Zip To',
            'detect-automatically' => 'Detect Automatically',
            'notes'                => '備註',
        ],
    ],
];
