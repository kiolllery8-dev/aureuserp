<?php

return [
    'title' => '報價單 Template',

    'navigation' => [
        'title'  => '報價單 Template',
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
                'title'  => '條款',
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
                    'quotation-validity' => '報價單 Validity',
                    'sale-journal'       => 'Sale 帳本',
                ],
            ],

            'signature-and-payment' => [
                'title' => 'Signature & 付款',

                'fields' => [
                    'online-signature'      => 'Online Signature',
                    'online-payment'        => 'Online 付款',
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
            'number-of-days'        => '編號 of days',
            'journal'               => 'Sale 帳本',
            'signature-required'    => 'Signature 必填',
            'payment-required'      => '付款 必填',
            'prepayment-percentage' => 'Prepayment Percentage',
        ],
        'groups'  => [
            'company' => '公司',
            'name'    => '名稱',
            'journal' => '帳本',
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
                    'title' => '報價單 template已刪除',
                    'body'  => 'The quotation template has been已刪除成功.',
                ],
            ],

        ],
        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => '報價單 template已刪除',
                    'body'  => 'The quotation template has been已刪除成功.',
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
                'title' => '條款',
            ],
        ],
        'sections' => [
            'general' => [
                'title' => '一般資料',
            ],
            'signature_and_payment' => [
                'title' => 'Signature & 付款',
            ],
        ],
        'entries' => [
            'product'               => '商品',
            'description'           => '描述',
            'quantity'              => '數量',
            'unit-price'            => '單價',
            'section-name'          => 'Section名稱',
            'note-title'            => '備註 標題',
            'name'                  => 'Template名稱',
            'quotation-validity'    => '報價單 Validity',
            'sale-journal'          => 'Sale 帳本',
            'online-signature'      => 'Online Signature',
            'online-payment'        => 'Online 付款',
            'prepayment-percentage' => 'Prepayment Percentage',
        ],
    ],
];
