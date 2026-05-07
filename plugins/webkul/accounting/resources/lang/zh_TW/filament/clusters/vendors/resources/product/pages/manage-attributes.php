<?php

return [
    'title' => 'Attributes',

    'form' => [
        'attribute' => 'Attribute',
        'values'    => 'Values',
    ],

    'table' => [
        'description' => 'Warning: adding or deleting attributes will delete and recreate existing variants and lead to the loss of their possible customizations.',

        'header-actions' => [
            'create' => [
                'label' => 'Add Attribute',

                'notification' => [
                    'title' => 'Attribute created',
                    'body'  => 'The attribute has been created成功.',
                ],
            ],
        ],

        'columns' => [
            'attribute' => 'Attribute',
            'values'    => 'Values',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Attribute updated',
                    'body'  => 'The attribute has been updated成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Attribute deleted',
                    'body'  => 'The attribute has been deleted成功.',
                ],
            ],
        ],
    ],
];
