<?php

return [
    'navigation' => [
        'title' => '補貨',
        'group' => '採購',
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
            'trigger'           => '觸發',
            'on-hand'           => '現有',
            'min'               => '最小',
            'max'               => '最大',
            'multiple-quantity' => 'Multiple數量',
            'to-order'          => '待訂購',
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
                'label' => '新增Replenishment',

                'notification' => [
                    'title' => '已新增補貨',
                    'body'  => 'The replenishment has been added成功.',
                ],

                'before' => [
                    'notification' => [
                        'title' => 'Replenishment已存在',
                        'body'  => 'A replenishment已存在 for this configuration. Please update the existing replenishment instead.',
                    ],
                ],
            ],
        ],

        'actions' => [
        ],
    ],
];
