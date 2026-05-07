<?php

return [
    'navigation' => [
        'title' => '頁面',
        'group' => '網址',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => '一般',

                'fields' => [
                    'title'             => '標題',
                    'title-placeholder' => 'Page title ...',
                    'slug'              => 'Slug',
                    'content'           => 'Content',
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
                    'is-header-visible' => 'Is Visible Header Menu',
                    'is-footer-visible' => 'Is Visible Footer Menu',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'title'             => '標題',
            'slug'              => 'Slug',
            'creator'           => '建立者',
            'is-published'      => 'Is Published',
            'is-header-visible' => 'Is Visible Header Menu',
            'is-footer-visible' => 'Is Visible Footer Menu',
            'created-at'        => '建立時間',
            'updated-at'        => '更新時間',
        ],

        'groups' => [
            'created-at' => '建立時間',
        ],

        'filters' => [
            'is-published' => 'Is Published',
            'creator'      => '建立者',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Page已更新',
                    'body'  => 'The page has been已更新成功.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Page restored',
                    'body'  => 'The page has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Page已刪除',
                    'body'  => 'The page has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Page force已刪除',
                    'body'  => 'The page has been force已刪除成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Pages restored',
                    'body'  => 'The pages has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Pages已刪除',
                    'body'  => 'The pages has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Pages force已刪除',
                    'body'  => 'The pages has been force已刪除成功.',
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
                    'is-header-visible' => 'Is Visible Header Menu',
                    'is-footer-visible' => 'Is Visible Footer Menu',
                ],
            ],
        ],
    ],
];
