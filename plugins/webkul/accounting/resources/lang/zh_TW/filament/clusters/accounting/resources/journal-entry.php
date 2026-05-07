<?php

return [
    'title' => '帳目記錄',

    'navigation' => [
        'title' => '帳目記錄',
    ],

    'record-sub-navigation' => [
        'payment' => '付款',
    ],

    'global-search' => [
        'number'   => '編號',
        'partner'  => '夥伴',
        'date'     => '開立日期',
        'due-date' => '發票 Due日期',
    ],

    'form' => [
        'section' => [
            'general' => [
                'title'  => '一般',

                'fields' => [
                    'reference'       => '參考編號',
                    'accounting-date' => '入帳日期',
                    'journal'         => '帳本',
                ],
            ],
        ],

        'tabs' => [
            'lines' => [
                'title' => '帳目明細',

                'repeater' => [
                    'title'       => 'Items',
                    'add-item'    => '新增Item',

                    'columns' => [
                        'account'                  => '帳戶',
                        'partner'                  => '夥伴',
                        'label'                    => '標籤',
                        'amount-currency'          => '金額 (幣別)',
                        'currency'                 => '幣別',
                        'taxes'                    => '稅',
                        'debit'                    => '借方',
                        'credit'                   => '貸方',
                        'discount-amount-currency' => 'Discount金額 (幣別)',
                    ],

                    'fields' => [
                        'account'                  => '帳戶',
                        'partner'                  => '夥伴',
                        'label'                    => '標籤',
                        'amount-currency'          => '金額 (幣別)',
                        'currency'                 => '幣別',
                        'taxes'                    => '稅',
                        'debit'                    => '借方',
                        'credit'                   => '貸方',
                        'discount-amount-currency' => 'Discount金額 (幣別)',
                    ],
                ],
            ],

            'other-information' => [
                'title'    => '其他資料',

                'fields' => [
                    'checked'         => '已核對',
                    'company'         => '公司',
                    'fiscal-position' => '稅務情境',
                ],
            ],

            'term-and-conditions' => [
                'title' => '條款',
            ],
        ],
    ],

    'table' => [
        'total'   => '總計',
        'columns' => [
            'invoice-date' => '開立日期',
            'date'         => '日期',
            'number'       => '編號',
            'partner'      => '夥伴',
            'reference'    => '參考編號',
            'journal'      => '帳本',
            'company'      => '公司',
            'total'        => '總計',
            'state'        => '狀態',
            'checked'      => '已核對',
        ],

        'summarizers' => [
            'total' => '總計',
        ],

        'groups' => [
            'partner'        => '夥伴',
            'journal'        => '帳本',
            'state'          => '狀態',
            'payment-method' => '付款方式',
            'date'           => '日期',
            'invoice-date'   => '開立日期',
            'company'        => '公司',
        ],

        'filters' => [
            'number'                       => '編號',
            'invoice-partner-display-name' => '發票 夥伴 Display名稱',
            'invoice-date'                 => '開立日期',
            'invoice-due-date'             => '發票 Due日期',
            'invoice-origin'               => '發票 Origin',
            'reference'                    => '參考編號',
            'created-at'                   => '建立時間',
            'updated-at'                   => '更新時間',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Payment已刪除',
                    'body'  => 'The payment has been已刪除成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Payments已刪除',
                    'body'  => 'The payments has been已刪除成功.',
                ],
            ],
        ],

        'toolbar-actions' => [
            'export' => [
                'label' => '匯出',
            ],
        ],
    ],

    'infolist' => [
        'section' => [
            'general' => [
                'title'   => '一般',
                'entries' => [
                    'number'          => '編號',
                    'reference'       => '參考編號',
                    'accounting-date' => '入帳日期',
                    'journal'         => '帳本',
                ],
            ],
        ],

        'tabs' => [
            'lines' => [
                'title' => '帳目明細',

                'repeater' => [
                    'entries' => [
                        'account'  => '帳戶',
                        'partner'  => '夥伴',
                        'label'    => '標籤',
                        'currency' => '幣別',
                        'taxes'    => '稅',
                        'debit'    => '借方',
                        'credit'   => '貸方',
                    ],
                ],
            ],

            'other-information' => [
                'title' => '其他資料',

                'fieldset' => [
                    'accounting' => [
                        'title' => '會計',

                        'entries' => [
                            'company'         => '公司',
                            'fiscal-position' => '稅務情境',
                            'checked'         => '已核對',
                        ],
                    ],
                ],
            ],

            'term-and-conditions' => [
                'title' => '條款',
            ],
        ],
    ],

];
