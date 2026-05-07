<?php

return [
    'title' => '屬性',

    'form' => [
        'attribute' => '屬性',
        'values'    => '值',
    ],

    'table' => [
        'description' => 'Warning: adding or deleting attributes will delete and recreate existing variants and lead to the loss of their possible customizations.',

        'header-actions' => [
            'create' => [
                'label' => '新增Attribute',

                'notification' => [
                    'title' => 'Attribute已建立',
                    'body'  => 'The attribute has been已建立成功.',
                ],
            ],
        ],

        'columns' => [
            'attribute' => '屬性',
            'values'    => '值',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Attribute已更新',
                    'body'  => 'The attribute has been已更新成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Attribute已刪除',
                    'body'  => 'The attribute has been已刪除成功.',
                ],
            ],
        ],
    ],
];
