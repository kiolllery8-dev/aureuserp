<?php

return [
    'title' => 'Refuse Reason',

    'navigation' => [
        'title' => 'Refuse Reasons',
        'group' => 'Applications',
    ],

    'form' => [
        'fields' => [
            'name'             => '名稱',
            'template'         => [
                'title'                    => 'Template',
                'applicant-refuse'         => 'Applicant Refuse',
                'applicant-not-interested' => 'Applicant Not Interested',
            ],
            'name-placeholder' => 'Enter the name of the refuse reason',
        ],
    ],

    'table' => [
        'columns' => [
            'id'         => 'ID',
            'name'       => '名稱',
            'template'   => 'Template',
            'created-by' => '建立者',
            'created-at' => '建立時間',
            'updated-at' => '更新時間',
        ],

        'filters' => [
            'name'       => '名稱',
            'employee'   => 'Employee',
            'created-by' => '建立者',
            'updated-at' => '更新時間',
            'created-at' => '建立時間',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Refuse reason updated',
                    'body'  => 'The refuse reason has been updated成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Refuse reason deleted',
                    'body'  => 'The refuse reason has been deleted成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Refuse reasons deleted',
                    'body'  => 'The refuse reasons has been deleted成功.',
                ],
            ],
        ],

        'empty-state-action' => [
            'create' => [
                'notification' => [
                    'title' => 'Refuse reason created',
                    'body'  => 'The refuse reason has been created成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'name'       => '名稱',
        'template'   => 'Template',
    ],
];
