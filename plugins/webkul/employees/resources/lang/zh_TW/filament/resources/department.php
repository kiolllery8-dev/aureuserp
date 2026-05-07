<?php

return [
    'title' => '部門',

    'navigation' => [
        'title' => '部門',
        'group' => '員工',
    ],

    'global-search' => [
        'department-manager' => '主管',
        'company'            => '公司',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => '一般資料',

                'fields' => [
                    'name'                => '名稱',
                    'manager'             => '主管',
                    'parent-department'   => 'Parent Department',
                    'manager-placeholder' => 'Select Manager',
                    'company'             => '公司',
                    'company-placeholder' => 'Select Company',
                    'color'               => '顏色',
                ],
            ],

            'additional' => [
                'title'       => '其他資料',
                'description' => 'Additional information about this department.',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'         => '名稱',
            'manager-name' => '主管',
            'company-name' => '公司',
        ],

        'groups' => [
            'name'       => '名稱',
            'manager'    => '主管',
            'company'    => '公司',
            'updated-at' => '更新時間',
            'created-at' => '建立時間',
        ],

        'filters' => [
            'name'         => '名稱',
            'manager-name' => '主管',
            'company-name' => '公司',
            'updated-at'   => '更新時間',
            'created-at'   => '建立時間',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Department restored',
                    'body'  => 'The department has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Department已刪除',
                    'body'  => 'The department has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Department force已刪除',
                    'body'  => 'The department has been force已刪除成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Departments restored',
                    'body'  => 'The departments has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Departments已刪除',
                    'body'  => 'The departments has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Departments force已刪除',
                    'body'  => 'The departments has been force已刪除成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => '一般',

                'entries' => [
                    'name'            => '名稱',
                    'manager'         => '主管',
                    'company'         => '公司',
                    'color'           => '顏色',
                    'hierarchy-title' => 'Department Organization',
                ],
            ],
        ],
    ],
];
