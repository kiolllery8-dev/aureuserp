<?php

return [
    'navigation' => [
        'title' => 'Blog Posts',
        'group' => '網址',
    ],

    'global-search' => [
        'author' => '作者',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => '一般',

                'fields' => [
                    'title'             => '標題',
                    'sub-title'         => 'Sub Title',
                    'title-placeholder' => 'Post title ...',
                    'slug'              => 'Slug',
                    'content'           => 'Content',
                    'banner'            => 'Banner',
                ],
            ],

            'seo' => [
                'title' => 'SEO',

                'fields' => [
                    'meta-title'       => 'Meta Title',
                    'meta-keywords'    => 'Meta Keywords',
                    'meta-description' => 'Meta Description',
                ],
            ],

            'settings' => [
                'title' => '設定',

                'fields' => [
                    'category'     => '分類',
                    'tags'         => '標籤',
                    'name'         => '名稱',
                    'color'        => '顏色',
                    'is-published' => 'Is Published',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'title'        => '標題',
            'slug'         => 'Slug',
            'author'       => '作者',
            'category'     => '分類',
            'creator'      => '建立者',
            'is-published' => 'Is Published',
            'created-at'   => '建立時間',
            'updated-at'   => '更新時間',
        ],

        'groups' => [
            'category'   => '分類',
            'author'     => '作者',
            'created-at' => '建立時間',
        ],

        'filters' => [
            'is-published' => 'Is Published',
            'author'       => '作者',
            'creator'      => '建立者',
            'category'     => '分類',
            'tags'         => '標籤',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Post已更新',
                    'body'  => 'The post has been已更新成功.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Post restored',
                    'body'  => 'The post has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Post已刪除',
                    'body'  => 'The post has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Post force已刪除',
                    'body'  => 'The post has been force已刪除成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Posts restored',
                    'body'  => 'The posts has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Posts已刪除',
                    'body'  => 'The posts has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Posts force已刪除',
                    'body'  => 'The posts has been force已刪除成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => '一般',

                'entries' => [
                    'title'   => '標題',
                    'slug'    => 'Slug',
                    'content' => 'Content',
                    'banner'  => 'Banner',
                ],
            ],

            'seo' => [
                'title' => 'SEO',

                'entries' => [
                    'meta-title'       => 'Meta Title',
                    'meta-keywords'    => 'Meta Keywords',
                    'meta-description' => 'Meta Description',
                ],
            ],

            'record-information' => [
                'title' => '紀錄資料',

                'entries' => [
                    'author'          => '作者',
                    'created-by'      => '建立者',
                    'published-at'    => 'Published At',
                    'last-updated-by' => 'Last Updated By',
                    'last-updated'    => 'Last Updated At',
                    'created-at'      => '建立時間',
                ],
            ],

            'settings' => [
                'title' => '設定',

                'entries' => [
                    'category'     => '分類',
                    'tags'         => '標籤',
                    'name'         => '名稱',
                    'color'        => '顏色',
                    'is-published' => 'Is Published',
                ],
            ],
        ],
    ],
];
