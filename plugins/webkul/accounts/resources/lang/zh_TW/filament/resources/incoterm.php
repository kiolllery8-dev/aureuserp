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
                    'title' => 'Incoterm已更新',
                    'body'  => 'The incoterm has been已更新成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Incoterm已刪除',
                    'body'  => 'The incoterm has been已刪除成功.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => '國貿條款已還原',
                    'body'  => 'The incoterm has been restored成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => '國貿條款已還原',
                    'body'  => 'The incoterms has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Incoterms已刪除',
                    'body'  => 'The incoterms has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Incoterms force已刪除',
                    'body'  => 'The incoterms has been force已刪除成功.',
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
