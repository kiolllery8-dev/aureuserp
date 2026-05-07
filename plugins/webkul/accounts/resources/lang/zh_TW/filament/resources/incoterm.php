<?php

return [
    'form' => [
        'fields' => [
            'code' => '代碼',
            'name' => '名稱',
        ],
    ],

    'table' => [
        'columns' => [
            'code'       => '代碼',
            'name'       => '名稱',
            'created-by' => '建立者',
        ],

        'groups' => [
            'code' => '代碼',
            'name' => '名稱',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Incoterm updated',
                    'body'  => 'The incoterm has been updated成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Incoterm deleted',
                    'body'  => 'The incoterm has been deleted成功.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Incoterm restored',
                    'body'  => 'The incoterm has been restored成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Incoterms restored',
                    'body'  => 'The incoterms has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Incoterms deleted',
                    'body'  => 'The incoterms has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Incoterms force deleted',
                    'body'  => 'The incoterms has been force deleted成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name' => '名稱',
            'code' => '代碼',
        ],
    ],
];
