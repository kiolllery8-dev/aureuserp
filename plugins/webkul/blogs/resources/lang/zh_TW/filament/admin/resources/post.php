<?php

return [
    'navigation' => [
        'title' => '文章',
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
                    'sub-title'         => '副標題',
                    'title-placeholder' => '文章標題…',
                    'slug'              => '網址代稱',
                    'content'           => '內容',
                    'banner'            => '橫幅',
                ],
            ],

            'seo' => [
                'title' => 'SEO 設定',

                'fields' => [
                    'meta-title'       => 'Meta 標題',
                    'meta-keywords'    => 'Meta 關鍵字',
                    'meta-description' => 'Meta 描述',
                ],
            ],

            'settings' => [
                'title' => '設定',

                'fields' => [
                    'category'     => '分類',
                    'tags'         => '標籤',
                    'name'         => '名稱',
                    'color'        => '顏色',
                    'is-published' => '已發佈',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'title'        => '標題',
            'slug'         => '網址代稱',
            'author'       => '作者',
            'category'     => '分類',
            'creator'      => '建立者',
            'is-published' => '已發佈',
            'created-at'   => '建立時間',
            'updated-at'   => '更新時間',
        ],

        'groups' => [
            'category'   => '分類',
            'author'     => '作者',
            'created-at' => '建立時間',
        ],

        'filters' => [
            'is-published' => '已發佈',
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
                    'title' => '文章已還原',
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
                    'title' => '文章已還原',
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
                    'slug'    => '網址代稱',
                    'content' => '內容',
                    'banner'  => '橫幅',
                ],
            ],

            'seo' => [
                'title' => 'SEO 設定',

                'entries' => [
                    'meta-title'       => 'Meta 標題',
                    'meta-keywords'    => 'Meta 關鍵字',
                    'meta-description' => 'Meta 描述',
                ],
            ],

            'record-information' => [
                'title' => '紀錄資料',

                'entries' => [
                    'author'          => '作者',
                    'created-by'      => '建立者',
                    'published-at'    => '發佈時間',
                    'last-updated-by' => '最後更新者',
                    'last-updated'    => '最後更新時間',
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
                    'is-published' => '已發佈',
                ],
            ],
        ],
    ],
];
