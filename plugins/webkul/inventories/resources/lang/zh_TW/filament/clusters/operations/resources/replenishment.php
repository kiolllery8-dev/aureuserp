<?php

return [
    'navigation' => [
        'title' => 'Replenishment',
        'group' => 'Procurement',
    ],

    'form' => [
        'fields' => [
        ],
    ],

    'table' => [
        'columns' => [
            'product'           => '商品',
            'location'          => '位置',
            'route'             => '路徑',
            'vendor'            => '供應商',
            'trigger'           => 'Trigger',
            'on-hand'           => 'On Hand',
            'min'               => 'Min',
            'max'               => 'Max',
            'multiple-quantity' => 'Multiple Quantity',
            'to-order'          => 'To Order',
            'uom'               => '計量單位',
            'company'           => '公司',
        ],

        'groups' => [
            'location' => '位置',
            'product'  => '商品',
            'category' => '分類',
        ],

        'filters' => [
        ],

        'header-actions' => [
            'create' => [
                'label' => 'Add Replenishment',

                'notification' => [
                    'title' => 'Replenishment added',
                    'body'  => 'The replenishment has been added成功.',
                ],

                'before' => [
                    'notification' => [
                        'title' => 'Replenishment already exists',
                        'body'  => 'A replenishment already exists for this configuration. Please update the existing replenishment instead.',
                    ],
                ],
            ],
        ],

        'actions' => [
        ],
    ],
];
