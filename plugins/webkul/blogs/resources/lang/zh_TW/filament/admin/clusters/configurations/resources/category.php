<?php

return [
    'navigation' => [
        'title' => '分類',
        'group' => '部落格',
    ],

    'form' => [
        'fields' => [
            'name'             => '名稱',
            'name-placeholder' => '分類標題…',
            'sub-title'        => '副標題',
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => '名稱',
            'sub-title'  => '副標題',
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
                    'title' => 'Category已更新',
                    'body'  => 'The category has been已更新成功.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => '分類已還原',
                    'body'  => 'The category has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Category已刪除',
                    'body'  => 'The category has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Category force已刪除',
                        'body'  => 'The Category has been force已刪除成功.',
                    ],
                    'error' => [
                        'title' => 'Category  could not be已刪除',
                        'body'  => 'The Category  cannot be已刪除 because it is currently in use.',
                    ],
                ],
            ],

            'force-delete-error' => [
                'notification' => [
                    'title' => '無法刪除分類',
                    'body'  => '此分類與部分文章有關聯，無法刪除。',
                ],

                'exception' => '此分類與部分文章有關聯，無法強制刪除。',
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => '分類已還原',
                    'body'  => 'The categories has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Categories已刪除',
                    'body'  => 'The categories has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Categories force已刪除',
                    'body'  => 'The categories has been force已刪除成功.',
                ],
            ],

            'force-delete-error' => [
                'notification' => [
                    'title' => '無法刪除分類',
                    'body'  => '此分類與部分文章有關聯，無法刪除。',
                ],
            ],
        ],
    ],

    'infolist' => [
    ],
];
