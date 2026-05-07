<?php

return [
    'title' => '拒絕原因',

    'navigation' => [
        'title' => '拒絕原因',
        'group' => '申請',
    ],

    'form' => [
        'fields' => [
            'name'             => '名稱',
            'template'         => [
                'title'                    => '範本',
                'applicant-refuse'         => 'Applicant Refuse',
                'applicant-not-interested' => 'Applicant Not Interested',
            ],
            'name-placeholder' => '輸入拒絕原因名稱',
        ],
    ],

    'table' => [
        'columns' => [
            'id'         => '編號',
            'name'       => '名稱',
            'template'   => '範本',
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
                    'title' => 'Refuse reason已更新',
                    'body'  => 'The refuse reason has been已更新成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Refuse reason已刪除',
                    'body'  => 'The refuse reason has been已刪除成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Refuse reasons已刪除',
                    'body'  => 'The refuse reasons has been已刪除成功.',
                ],
            ],
        ],

        'empty-state-action' => [
            'create' => [
                'notification' => [
                    'title' => 'Refuse reason已建立',
                    'body'  => 'The refuse reason has been已建立成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'name'       => '名稱',
        'template'   => '範本',
    ],
];
