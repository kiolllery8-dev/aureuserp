<?php

return [
    'title' => 'Quotation Template',

    'navigation' => [
        'title'  => 'Quotation Template',
        'group'  => '銷貨訂單',
    ],

    'form' => [
        'tabs' => [
            'products' => [
                'title'  => '商品',
                'fields' => [
                    'products'     => '商品',
                    'name'         => '名稱',
                    'quantity'     => '數量',
                ],
            ],

            'terms-and-conditions' => [
                'title'  => 'Terms & Conditions',
                'fields' => [
                    'note-placeholder' => 'Write your terms and conditions for the quotations.',
                ],
            ],
        ],

        'sections' => [
            'general' => [
                'title' => '一般資料',

                'fields' => [
                    'name'               => '名稱',
                    'quotation-validity' => 'Quotation Validity',
                    'sale-journal'       => 'Sale Journal',
                ],
            ],

            'signature-and-payment' => [
                'title' => 'Signature & Payments',

                'fields' => [
                    'online-signature'      => 'Online Signature',
                    'online-payment'        => 'Online Payment',
                    'prepayment-percentage' => 'Prepayment Percentage',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'created-by'            => '建立者',
            'company'               => '公司',
            'name'                  => '名稱',
            'number-of-days'        => 'Number of days',
            'journal'               => 'Sale Journal',
            'signature-required'    => 'Signature Required',
            'payment-required'      => 'Payment Required',
            'prepayment-percentage' => 'Prepayment Percentage',
        ],
        'groups'  => [
            'company' => '公司',
            'name'    => '名稱',
            'journal' => '日記帳',
        ],
        'filters' => [
            'created-by' => '建立者',
            'company'    => '公司',
            'name'       => '名稱',
            'created-at' => '建立時間',
            'updated-at' => '更新時間',
        ],
        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Quotation template deleted',
                    'body'  => 'The quotation template has been deleted成功.',
                ],
            ],

        ],
        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Quotation template deleted',
                    'body'  => 'The quotation template has been deleted成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'tabs' => [
            'products' => [
                'title' => '商品',
            ],
            'terms-and-conditions' => [
                'title' => 'Terms & Conditions',
            ],
        ],
        'sections' => [
            'general' => [
                'title' => '一般資料',
            ],
            'signature_and_payment' => [
                'title' => 'Signature & Payment',
            ],
        ],
        'entries' => [
            'product'               => '商品',
            'description'           => '描述',
            'quantity'              => '數量',
            'unit-price'            => '單價',
            'section-name'          => 'Section Name',
            'note-title'            => 'Note Title',
            'name'                  => 'Template Name',
            'quotation-validity'    => 'Quotation Validity',
            'sale-journal'          => 'Sale Journal',
            'online-signature'      => 'Online Signature',
            'online-payment'        => 'Online Payment',
            'prepayment-percentage' => 'Prepayment Percentage',
        ],
    ],
];
