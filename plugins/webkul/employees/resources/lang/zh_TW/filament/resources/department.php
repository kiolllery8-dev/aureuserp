<?php

return [
    'title' => '部門',

    'navigation' => [
        'title' => '部門',
        'group' => '員工',
    ],

    'global-search' => [
        'department-manager' => 'Manager',
        'company'            => '公司',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => '一般資料',

                'fields' => [
                    'name'                => '名稱',
                    'manager'             => 'Manager',
                    'parent-department'   => 'Parent Department',
                    'manager-placeholder' => 'Select Manager',
                    'company'             => '公司',
                    'company-placeholder' => 'Select Company',
                    'color'               => 'Color',
                ],
            ],

            'additional' => [
                'title'       => 'Additional Information',
                'description' => 'Additional information about this department.',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'         => '名稱',
            'manager-name' => 'Manager',
            'company-name' => '公司',
        ],

        'groups' => [
            'name'       => '名稱',
            'manager'    => 'Manager',
            'company'    => '公司',
            'updated-at' => '更新時間',
            'created-at' => '建立時間',
        ],

        'filters' => [
            'name'         => '名稱',
            'manager-name' => 'Manager',
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
                    'title' => 'Department deleted',
                    'body'  => 'The department has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Department force deleted',
                    'body'  => 'The department has been force deleted成功.',
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
                    'title' => 'Departments deleted',
                    'body'  => 'The departments has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Departments force deleted',
                    'body'  => 'The departments has been force deleted成功.',
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
                    'manager'         => 'Manager',
                    'company'         => '公司',
                    'color'           => 'Color',
                    'hierarchy-title' => 'Department Organization',
                ],
            ],
        ],
    ],
];
