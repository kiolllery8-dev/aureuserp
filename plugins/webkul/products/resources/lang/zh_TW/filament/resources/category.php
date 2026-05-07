<?php

return [
    'form' => [
        'sections' => [
            'general' => [
                'title'  => '一般',

                'fields' => [
                    'name'             => '名稱',
                    'name-placeholder' => 'eg. Lamps',
                    'parent'           => 'Parent',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'        => '名稱',
            'full-name'   => 'Full Name',
            'parent-path' => 'Parent Path',
            'parent'      => 'Parent',
            'creator'     => 'Creator',
            'created-at'  => '建立時間',
            'created-at'  => '建立時間',
            'updated-at'  => '更新時間',
        ],

        'groups' => [
            'parent'     => 'Parent',
            'creator'    => 'Creator',
            'created-at' => '建立時間',
            'updated-at' => '更新時間',
        ],

        'filters' => [
            'parent'  => 'Parent',
            'creator' => 'Creator',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Category deleted',
                        'body'  => 'The Category has been deleted成功.',
                    ],

                    'error' => [
                        'title' => 'Category could not be deleted',
                        'body'  => 'The category cannot be deleted because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Categories deleted',
                        'body'  => 'The categories has been deleted成功.',
                    ],

                    'error' => [
                        'title' => 'Categories could not be deleted',
                        'body'  => 'The categories cannot be deleted because they are currently in use.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => '一般資料',

                'entries' => [
                    'name'        => '名稱',
                    'parent'      => 'Parent Category',
                    'full_name'   => 'Full Category Name',
                    'parent_path' => 'Category Path',
                ],
            ],

            'record-information' => [
                'title' => 'Record Information',

                'entries' => [
                    'creator'    => '建立者',
                    'created_at' => '建立時間',
                    'updated_at' => 'Last Updated At',
                ],
            ],
        ],
    ],
];
