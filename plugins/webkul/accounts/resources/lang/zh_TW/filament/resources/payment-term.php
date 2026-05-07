<?php

return [
    'form' => [
        'sections' => [
            'fields' => [
                'payment-term'         => '付款條件',
                'early-discount'       => '提早折扣',
                'discount-days-prefix' => '若於此期間內付款',
                'discount-days-suffix' => '日',
                'reduced-tax'          => '減稅',
                'note'                 => '備註',
                'status'               => '狀態',
            ],
        ],

        'tabs' => [
            'due-terms' => [
                'title' => 'Due Terms',

                'repeater' => [
                    'due-terms' => [
                        'fields' => [
                            'value'                  => '值',
                            'due'                    => '到期',
                            'delay-type'             => 'Delay類型',
                            'days-on-the-next-month' => 'Days on the next month',
                            'days'                   => '日',
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
            'discount-days'       => 'Discount Days',
            'early-pay-discount'  => '提早付款折扣',
            'payment-term'        => '付款條件',
            'display-on-invoice'  => 'Display on Invoice',
            'early-discount'      => '提早折扣',
            'discount-percentage' => '折扣百分比',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Payment Term restored',
                    'body'  => 'The payment term has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Payment Term已刪除',
                    'body'  => 'The payment term has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Payment Term force已刪除',
                        'body'  => 'The payment term has been force已刪除成功.',
                    ],

                    'error' => [
                        'title' => 'Payment Term force deletion失敗',
                        'body'  => 'The payment term could not be force已刪除 because it is associated journal entries.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Payment Terms restored',
                    'body'  => 'The payment Terms has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Payment Terms已刪除',
                    'body'  => 'The payment Terms has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Payment Terms force已刪除',
                        'body'  => 'The payment Terms has been force已刪除成功.',
                    ],

                    'error' => [
                        'title' => 'Payment Terms force deletion失敗',
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
                'early-discount'       => '提早折扣',
                'discount-percentage'  => '折扣百分比',
                'discount-days-prefix' => '若於此期間內付款',
                'discount-days-suffix' => '日',
                'reduced-tax'          => '減稅',
                'note'                 => '備註',
                'status'               => '狀態',
            ],
        ],

        'tabs' => [
            'due-terms' => [
                'title' => 'Due Terms',

                'repeater' => [
                    'due-terms' => [
                        'entries' => [
                            'value'                  => '值',
                            'due'                    => '到期',
                            'delay-type'             => 'Delay類型',
                            'days-on-the-next-month' => 'Days on the next month',
                            'days'                   => '日',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
