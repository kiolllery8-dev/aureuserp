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
                    'invoice-date'     => 'Invoice Date',
                    'due-date'         => '到期日',
                    'payment-term'     => 'Payment Term',
                    'journal'          => '日記帳',
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
                        'add-product' => 'Add Product',

                        'columns' => [
                            'product'             => '商品',
                            'quantity'            => '數量',
                            'unit'                => 'Unit',
                            'taxes'               => '稅',
                            'discount-percentage' => '折扣',
                            'unit-price'          => '單價',
                            'sub-total'           => 'Sub Total',
                        ],

                        'fields' => [
                            'product'             => '商品',
                            'quantity'            => '數量',
                            'unit'                => 'Unit',
                            'taxes'               => '稅',
                            'discount-percentage' => 'Discount Percentage',
                            'unit-price'          => '單價',
                            'sub-total'           => 'Sub Total',
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
                            'sales-person'       => 'Sales Person',
                            'payment-reference'  => 'Payment Reference',
                            'recipient-bank'     => 'Recipient Bank',
                            'delivery-date'      => 'Delivery Date',
                        ],
                    ],

                    'accounting' => [
                        'title' => '會計',

                        'fields' => [
                            'company'                 => '公司',
                            'incoterm'                => 'Incoterm',
                            'incoterm-location'       => 'Incoterm Location',
                            'fiscal-position'         => '財務立場',
                            'fiscal-position-tooltip' => 'Fiscal positions are used to adapt taxes and accounts based on the customer location.',
                            'cash-rounding'           => 'Cash Rounding Method',
                            'cash-rounding-tooltip'   => 'Specifies the smallest cash-payable unit of the currency.',
                            'payment-method'          => 'Payment Method',
                            'auto-post'               => 'Auto Post',
                            'checked'                 => 'Checked',
                        ],
                    ],
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
            'number'           => 'Number',
            'state'            => '狀態',
            'created-by'       => '建立者',
            'customer'         => '客戶',
            'invoice-date'     => 'Invoice Date',
            'checked'          => 'Checked',
            'accounting-date'  => '會計',
            'due-date'         => '到期日',
            'source-document'  => 'Source Document',
            'reference'        => '參考',
            'sales-person'     => 'Sales Person',
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
            'invoice-partner-display-name' => 'Invoice Partner Display Name',
            'invoice-date'                 => 'Invoice Date',
            'checked'                      => 'Checked',
            'date'                         => '日期',
            'invoice-due-date'             => 'Invoice Due Date',
            'invoice-origin'               => 'Invoice Origin',
            'sales-person'                 => 'Sales Person',
            'currency'                     => '幣別',
            'created-at'                   => '建立時間',
            'updated-at'                   => '更新時間',
        ],

        'filters' => [
            'number'                       => 'Number',
            'invoice-partner-display-name' => 'Invoice Partner Display Name',
            'invoice-date'                 => 'Invoice Date',
            'invoice-due-date'             => 'Invoice Due Date',
            'invoice-origin'               => 'Invoice Origin',
            'reference'                    => '參考',
            'payment-reference'            => 'Payment Reference',
            'narration'                    => 'Narration',
            'partner'                      => '夥伴',
            'journal'                      => '日記帳',
            'fiscal-position'              => '財務立場',
            'currency'                     => '幣別',
            'company'                      => '公司',
            'date'                         => 'Accounting Date',
            'delivery-date'                => 'Delivery Date',
            'amount-untaxed'               => 'Untaxed Amount',
            'amount-tax'                   => 'Tax Amount',
            'amount-total'                 => 'Total Amount',
            'amount-residual'              => 'Amount Due',
            'checked'                      => 'Checked',
            'posted-before'                => 'Posted Before',
            'is-move-sent'                 => '已寄出',
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
                    'customer-invoice' => 'Customer Invoice',
                    'customer'         => '客戶',
                    'invoice-date'     => 'Invoice Date',
                    'due-date'         => '到期日',
                    'payment-term'     => 'Payment Term',
                    'journal'          => '日記帳',
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
                            'discount-percentage' => 'Discount Percentage',
                            'unit-price'          => '單價',
                            'sub-total'           => 'Sub Total',
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
                            'sales-person'       => 'Sales Person',
                            'payment-reference'  => 'Payment Reference',
                            'recipient-bank'     => 'Recipient Bank',
                            'delivery-date'      => 'Delivery Date',
                        ],
                    ],

                    'accounting' => [
                        'title' => '會計',

                        'entries' => [
                            'company'           => '公司',
                            'incoterm'          => 'Incoterm',
                            'incoterm-location' => 'Incoterm Location',
                            'payment-method'    => 'Payment Method',
                            'cash-rounding'     => 'Cash Rounding Method',
                            'fiscal-position'   => '財務立場',
                            'auto-post'         => 'Auto Post',
                            'checked'           => 'Checked',
                        ],
                    ],
                ],
            ],

            'term-and-conditions' => [
                'title' => 'Term & Conditions',
            ],

            'journal-items' => [
                'title' => '分錄項目',

                'repeater' => [
                    'entries' => [
                        'account'  => '科目',
                        'partner'  => '夥伴',
                        'label'    => 'Label',
                        'currency' => '幣別',
                        'due-date' => '到期日',
                        'taxes'    => '稅',
                        'debit'    => 'Debit',
                        'credit'   => 'Credit',
                    ],
                ],
            ],
        ],
    ],

];
