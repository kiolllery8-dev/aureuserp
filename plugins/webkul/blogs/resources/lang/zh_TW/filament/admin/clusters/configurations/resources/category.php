<?php

return [
    'navigation' => [
        'title' => '分類',
        'group' => '部落格',
    ],

    'form' => [
        'fields' => [
            'name'             => '名稱',
            'name-placeholder' => 'Category title ...',
            'sub-title'        => 'Sub Title',
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => '名稱',
            'sub-title'  => 'Sub Title',
            'posts'      => '文章',
            'created-at' => '建立時間',
        ],

        'filters' => [
            'is-published' => 'Is Published',
            'author'       => '作者',
            'creator'      => '建立者',
            'category'     => '分類',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Category updated',
                    'body'  => 'The category has been updated成功.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Category restored',
                    'body'  => 'The category has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Category deleted',
                    'body'  => 'The category has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Category force deleted',
                        'body'  => 'The Category has been force deleted成功.',
                    ],
                    'error' => [
                        'title' => 'Category  could not be deleted',
                        'body'  => 'The Category  cannot be deleted because it is currently in use.',
                    ],
                ],
            ],

            'force-delete-error' => [
                'notification' => [
                    'title' => 'Cannot delete category',
                    'body'  => 'You cannot delete this category as it is associated with some posts.',
                ],

                'exception' => 'You cannot force delete this category as it is associated with some posts.',
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Categories restored',
                    'body'  => 'The categories has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Categories deleted',
                    'body'  => 'The categories has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Categories force deleted',
                    'body'  => 'The categories has been force deleted成功.',
                ],
            ],

            'force-delete-error' => [
                'notification' => [
                    'title' => 'Cannot delete category',
                    'body'  => 'You cannot delete this category as it is associated with some posts.',
                ],
            ],
        ],
    ],

    'infolist' => [
    ],
];
