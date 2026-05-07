<?php

return [
    'notification' => [
        'title' => 'Post updated',
        'body'  => 'The post has been updated成功.',
    ],

    'header-actions' => [
        'draft' => [
            'label' => 'Set as Draft',

            'notification' => [
                'title' => 'Post set as draft',
                'body'  => 'The post has been set as draft成功.',
            ],
        ],

        'publish' => [
            'label' => '發佈',

            'notification' => [
                'title' => 'Post published',
                'body'  => 'The post has been published成功.',
            ],
        ],

        'delete' => [
            'notification' => [
                'title' => 'Post deleted',
                'body'  => 'The post has been deleted成功.',
            ],
        ],
    ],
];
