<?php

return [
    'form' => [
        'sections' => [
            'fields' => [
                'payment-term'         => '付款條件',
                'early-discount'       => 'Early Discount',
                'discount-days-prefix' => 'if paid within',
                'discount-days-suffix' => '天數',
                'reduced-tax'          => 'Reduced tax',
                'note'                 => '備註',
                'status'               => '狀態',
            ],
        ],

        'tabs' => [
            'due-terms' => [
                'title' => 'Due 條件',

                'repeater' => [
                    'due-terms' => [
                        'fields' => [
                            'value'                  => '值',
                            'due'                    => 'Due',
                            'delay-type'             => 'Delay類型',
                            'days-on-the-next-month' => '天數 on the next month',
                            'days'                   => '天數',
                        ],
                    ],
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'payment-term' => '付款條件',
            'company'      => '公司',
            'created-at'   => '建立時間',
            'updated-at'   => '更新時間',
        ],

        'groups' => [
            'company-name'        => '公司名稱',
            'discount-days'       => 'Discount 天數',
            'early-pay-discount'  => 'Early Pay Discount',
            'payment-term'        => '付款條件',
            'display-on-invoice'  => 'Display on 發票',
            'early-discount'      => 'Early Discount',
            'discount-percentage' => '折扣百分比',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => '付款 條件 restored',
                    'body'  => 'The payment term has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => '付款 Term已刪除',
                    'body'  => 'The payment term has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => '付款 條件 force已刪除',
                        'body'  => 'The payment term has been force已刪除成功.',
                    ],

                    'error' => [
                        'title' => '付款 條件 force deletion失敗',
                        'body'  => 'The payment term could not be force已刪除 because it is associated journal entries.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => '付款 條件 restored',
                    'body'  => 'The payment 條件 has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => '付款 Terms已刪除',
                    'body'  => 'The payment 條件 has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => '付款 條件 force已刪除',
                        'body'  => 'The payment 條件 has been force已刪除成功.',
                    ],

                    'error' => [
                        'title' => '付款 條件 force deletion失敗',
                        'body'  => 'The payment terms could not be force已刪除 because they have associated journal entries.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'entries' => [
                'payment-term'         => '付款條件',
                'early-discount'       => 'Early Discount',
                'discount-percentage'  => '折扣百分比',
                'discount-days-prefix' => 'if paid within',
                'discount-days-suffix' => '天數',
                'reduced-tax'          => 'Reduced tax',
                'note'                 => '備註',
                'status'               => '狀態',
            ],
        ],

        'tabs' => [
            'due-terms' => [
                'title' => 'Due 條件',

                'repeater' => [
                    'due-terms' => [
                        'entries' => [
                            'value'                  => '值',
                            'due'                    => 'Due',
                            'delay-type'             => 'Delay類型',
                            'days-on-the-next-month' => '天數 on the next month',
                            'days'                   => '天數',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
