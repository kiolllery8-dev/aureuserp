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
            'country-group'          => '國家 群組',
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
                        'source-account'      => '來源 帳戶',
                        'destination-account' => 'Destination 帳戶',
                    ],
                ],

            ],
            'tax-mapping' => [
                'table' => [
                    'columns' => [
                        'tax-source'      => '稅 來源',
                        'tax-destination' => '稅 Destination',
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
            'country-group'        => '國家 群組',
            'created-by'           => '建立者',
            'zip-from'             => 'Zip From',
            'zip-to'               => 'Zip To',
            'status'               => '狀態',
            'detect-automatically' => 'Detect Automatically',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => '付款 Term已刪除',
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
            'foreign-vat'          => 'Foreign VAT',
            'country'              => '國家',
            'country-group'        => '國家 群組',
            'zip-from'             => 'Zip From',
            'zip-to'               => 'Zip To',
            'detect-automatically' => 'Detect Automatically',
            'notes'                => '備註',
        ],
    ],
];
