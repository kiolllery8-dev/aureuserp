<?php

return [
    'notification' => [
        'title' => '文章已更新',
        'body'  => 'The post has been已更新成功.',
    ],

    'header-actions' => [
        'draft' => [
            'label' => 'Set as 草稿',

            'notification' => [
                'title' => '文章 set as draft',
                'body'  => 'The post has been set as draft成功.',
            ],
        ],

        'publish' => [
            'label' => '發佈',

            'notification' => [
                'title' => '文章已發佈',
                'body'  => 'The post has been已發佈成功.',
            ],
        ],

        'delete' => [
            'notification' => [
                'title' => '文章已刪除',
                'body'  => 'The post has been已刪除成功.',
            ],
        ],
    ],
];
