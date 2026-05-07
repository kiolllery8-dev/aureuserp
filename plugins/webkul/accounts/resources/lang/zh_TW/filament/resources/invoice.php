<?php

return [
    'title' => '發票',

    'navigation' => [
        'title' => '發票',
        'group' => '發票',
    ],

    'global-search' => [
        'customer' => '客戶',
        'date'     => '日期',
        'due-date' => '到期日',
    ],

    'form' => [
        'section' => [
            'general' => [
                'title'  => '一般',

                'fields' => [
                    'customer-invoice' => 'Customer Invoice',
                    'customer'         => '客戶',
                    'invoice-date'     => '開立日期',
                    'due-date'         => '到期日',
                    'payment-term'     => '付款條件',
                    'journal'          => '帳本',
                    'currency'         => '幣別',
                ],
            ],
        ],

        'tabs' => [
            'invoice-lines' => [
                'title' => 'Invoice Lines',

                'repeater' => [
                    'products' => [
                        'title'       => '商品',
                        'add-product' => '新增商品',

                        'columns' => [
                            'product'             => '商品',
                            'quantity'            => '數量',
                            'unit'                => '單位',
                            'taxes'               => '稅',
                            'discount-percentage' => '折扣',
                            'unit-price'          => '單價',
                            'sub-total'           => '小計',
                        ],

                        'fields' => [
                            'product'             => '商品',
                            'quantity'            => '數量',
                            'unit'                => '單位',
                            'taxes'               => '稅',
                            'discount-percentage' => '折扣百分比',
                            'unit-price'          => '單價',
                            'sub-total'           => '小計',
                        ],
                    ],
                ],
            ],

            'other-information' => [
                'title'    => '其他資料',

                'fieldset' => [
                    'invoice' => [
                        'title'  => '發票',

                        'fields' => [
                            'customer-reference' => 'Customer Reference',
                            'sales-person'       => '業務',
                            'payment-reference'  => '付款參考',
                            'recipient-bank'     => 'Recipient Bank',
                            'delivery-date'      => 'Delivery日期',
                        ],
                    ],

                    'accounting' => [
                        'title' => '會計',

                        'fields' => [
                            'company'                 => '公司',
                            'incoterm'                => '貿易條件',
                            'incoterm-location'       => '貿易條件地點',
                            'fiscal-position'         => '稅務情境',
                            'fiscal-position-tooltip' => '財務立場用於依客戶位置調整稅務與科目。',
                            'cash-rounding'           => 'Cash Rounding Method',
                            'cash-rounding-tooltip'   => '指定貨幣可現金支付的最小單位。',
                            'payment-method'          => '付款方式',
                            'auto-post'               => 'Auto Post',
                            'checked'                 => '已核對',
                        ],
                    ],
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
            'number'           => '編號',
            'state'            => '狀態',
            'created-by'       => '建立者',
            'customer'         => '客戶',
            'invoice-date'     => '開立日期',
            'checked'          => '已核對',
            'accounting-date'  => '會計',
            'due-date'         => '到期日',
            'source-document'  => '來源單據',
            'reference'        => '參考編號',
            'sales-person'     => '業務',
            'tax-excluded'     => 'Tax Excluded',
            'tax'              => '稅',
            'total'            => '總計',
            'amount-due'       => 'Amount Due',
            'invoice-currency' => 'Invoice Currency',
        ],

        'summarizers' => [
            'total' => '總計',
        ],

        'groups' => [
            'name'                         => '名稱',
            'invoice-partner-display-name' => 'Invoice Partner Display名稱',
            'invoice-date'                 => '開立日期',
            'checked'                      => '已核對',
            'date'                         => '日期',
            'invoice-due-date'             => 'Invoice Due日期',
            'invoice-origin'               => 'Invoice Origin',
            'sales-person'                 => '業務',
            'currency'                     => '幣別',
            'created-at'                   => '建立時間',
            'updated-at'                   => '更新時間',
        ],

        'filters' => [
            'number'                       => '編號',
            'invoice-partner-display-name' => 'Invoice Partner Display名稱',
            'invoice-date'                 => '開立日期',
            'invoice-due-date'             => 'Invoice Due日期',
            'invoice-origin'               => 'Invoice Origin',
            'reference'                    => '參考編號',
            'payment-reference'            => '付款參考',
            'narration'                    => '說明',
            'partner'                      => '夥伴',
            'journal'                      => '帳本',
            'fiscal-position'              => '稅務情境',
            'currency'                     => '幣別',
            'company'                      => '公司',
            'date'                         => '入帳日期',
            'delivery-date'                => 'Delivery日期',
            'amount-untaxed'               => '未稅金額',
            'amount-tax'                   => '稅額',
            'amount-total'                 => '總金額',
            'amount-residual'              => 'Amount Due',
            'checked'                      => '已核對',
            'posted-before'                => 'Posted Before',
            'is-move-sent'                 => '已寄出',
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
                    'customer-invoice' => 'Customer Invoice',
                    'customer'         => '客戶',
                    'invoice-date'     => '開立日期',
                    'due-date'         => '到期日',
                    'payment-term'     => '付款條件',
                    'journal'          => '帳本',
                    'currency'         => '幣別',
                ],
            ],
        ],

        'tabs' => [
            'invoice-lines' => [
                'title' => 'Invoice Lines',

                'repeater' => [
                    'products' => [
                        'entries' => [
                            'product'             => '商品',
                            'quantity'            => '數量',
                            'unit'                => '計量單位',
                            'taxes'               => '稅',
                            'discount-percentage' => '折扣百分比',
                            'unit-price'          => '單價',
                            'sub-total'           => '小計',
                            'total'               => '總計',
                        ],
                    ],
                ],
            ],

            'other-information' => [
                'title'    => '其他資料',

                'fieldset' => [
                    'invoice' => [
                        'title'   => '發票',

                        'entries' => [
                            'customer-reference' => 'Customer Reference',
                            'sales-person'       => '業務',
                            'payment-reference'  => '付款參考',
                            'recipient-bank'     => 'Recipient Bank',
                            'delivery-date'      => 'Delivery日期',
                        ],
                    ],

                    'accounting' => [
                        'title' => '會計',

                        'entries' => [
                            'company'           => '公司',
                            'incoterm'          => '貿易條件',
                            'incoterm-location' => '貿易條件地點',
                            'payment-method'    => '付款方式',
                            'cash-rounding'     => 'Cash Rounding Method',
                            'fiscal-position'   => '稅務情境',
                            'auto-post'         => 'Auto Post',
                            'checked'           => '已核對',
                        ],
                    ],
                ],
            ],

            'term-and-conditions' => [
                'title' => '條款',
            ],

            'journal-items' => [
                'title' => '帳目明細',

                'repeater' => [
                    'entries' => [
                        'account'  => '帳戶',
                        'partner'  => '夥伴',
                        'label'    => '標籤',
                        'currency' => '幣別',
                        'due-date' => '到期日',
                        'taxes'    => '稅',
                        'debit'    => '借方',
                        'credit'   => '貸方',
                    ],
                ],
            ],
        ],
    ],

];
