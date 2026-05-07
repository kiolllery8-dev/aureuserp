<?php

return [
    'title' => '分錄',

    'navigation' => [
        'title' => '分錄',
    ],

    'record-sub-navigation' => [
        'payment' => '付款',
    ],

    'global-search' => [
        'number'   => 'Number',
        'partner'  => '夥伴',
        'date'     => 'Invoice Date',
        'due-date' => 'Invoice Due Date',
    ],

    'form' => [
        'section' => [
            'general' => [
                'title'  => '一般',

                'fields' => [
                    'reference'       => '參考',
                    'accounting-date' => 'Accounting Date',
                    'journal'         => '日記帳',
                ],
            ],
        ],

        'tabs' => [
            'lines' => [
                'title' => '分錄項目',

                'repeater' => [
                    'title'       => 'Items',
                    'add-item'    => 'Add Item',

                    'columns' => [
                        'account'                  => '科目',
                        'partner'                  => '夥伴',
                        'label'                    => 'Label',
                        'amount-currency'          => 'Amount (Currency)',
                        'currency'                 => '幣別',
                        'taxes'                    => '稅',
                        'debit'                    => 'Debit',
                        'credit'                   => 'Credit',
                        'discount-amount-currency' => 'Discount Amount (Currency)',
                    ],

                    'fields' => [
                        'account'                  => '科目',
                        'partner'                  => '夥伴',
                        'label'                    => 'Label',
                        'amount-currency'          => 'Amount (Currency)',
                        'currency'                 => '幣別',
                        'taxes'                    => '稅',
                        'debit'                    => 'Debit',
                        'credit'                   => 'Credit',
                        'discount-amount-currency' => 'Discount Amount (Currency)',
                    ],
                ],
            ],

            'other-information' => [
                'title'    => '其他資料',

                'fields' => [
                    'checked'         => 'Checked',
                    'company'         => '公司',
                    'fiscal-position' => '財務立場',
                ],
            ],

            'term-and-conditions' => [
                'title' => 'Term & Conditions',
            ],
        ],
    ],

    'table' => [
        'total'   => '總計',
        'columns' => [
            'invoice-date' => 'Invoice Date',
            'date'         => '日期',
            'number'       => 'Number',
            'partner'      => '夥伴',
            'reference'    => '參考',
            'journal'      => '日記帳',
            'company'      => '公司',
            'total'        => '總計',
            'state'        => '狀態',
            'checked'      => 'Checked',
        ],

        'summarizers' => [
            'total' => '總計',
        ],

        'groups' => [
            'partner'        => '夥伴',
            'journal'        => '日記帳',
            'state'          => '狀態',
            'payment-method' => 'Payment Method',
            'date'           => '日期',
            'invoice-date'   => 'Invoice Date',
            'company'        => '公司',
        ],

        'filters' => [
            'number'                       => 'Number',
            'invoice-partner-display-name' => 'Invoice Partner Display Name',
            'invoice-date'                 => 'Invoice Date',
            'invoice-due-date'             => 'Invoice Due Date',
            'invoice-origin'               => 'Invoice Origin',
            'reference'                    => '參考',
            'created-at'                   => '建立時間',
            'updated-at'                   => '更新時間',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Payment deleted',
                    'body'  => 'The payment has been deleted成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Payments deleted',
                    'body'  => 'The payments has been deleted成功.',
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
                    'number'          => 'Number',
                    'reference'       => '參考',
                    'accounting-date' => 'Accounting Date',
                    'journal'         => '日記帳',
                ],
            ],
        ],

        'tabs' => [
            'lines' => [
                'title' => '分錄項目',

                'repeater' => [
                    'entries' => [
                        'account'  => '科目',
                        'partner'  => '夥伴',
                        'label'    => 'Label',
                        'currency' => '幣別',
                        'taxes'    => '稅',
                        'debit'    => 'Debit',
                        'credit'   => 'Credit',
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
                            'fiscal-position' => '財務立場',
                            'checked'         => 'Checked',
                        ],
                    ],
                ],
            ],

            'term-and-conditions' => [
                'title' => 'Term & Conditions',
            ],
        ],
    ],

];
