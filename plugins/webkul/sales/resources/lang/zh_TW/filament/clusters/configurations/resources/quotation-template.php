<?php

return [
    'title' => '報價範本',

    'navigation' => [
        'title'  => '報價範本',
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
                    'note-placeholder' => '撰寫報價的條款與條件。',
                ],
            ],
        ],

        'sections' => [
            'general' => [
                'title' => '一般資料',

                'fields' => [
                    'name'               => '名稱',
                    'quotation-validity' => '報價有效期',
                    'sale-journal'       => '銷售日記帳',
                ],
            ],

            'signature-and-payment' => [
                'title' => '簽名與付款',

                'fields' => [
                    'online-signature'      => '線上簽名',
                    'online-payment'        => '線上付款',
                    'prepayment-percentage' => '預付百分比',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'created-by'            => '建立者',
            'company'               => '公司',
            'name'                  => '名稱',
            'number-of-days'        => '天數',
            'journal'               => '銷售日記帳',
            'signature-required'    => '需要簽名',
            'payment-required'      => '需要付款',
            'prepayment-percentage' => '預付百分比',
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
                    'title' => 'Quotation template已刪除',
                    'body'  => 'The quotation template has been已刪除成功.',
                ],
            ],

        ],
        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Quotation template已刪除',
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
                'title' => '簽名與付款',
            ],
        ],
        'entries' => [
            'product'               => '商品',
            'description'           => '說明',
            'quantity'              => '數量',
            'unit-price'            => '單價',
            'section-name'          => 'Section名稱',
            'note-title'            => '備註標題',
            'name'                  => 'Template名稱',
            'quotation-validity'    => '報價有效期',
            'sale-journal'          => '銷售日記帳',
            'online-signature'      => '線上簽名',
            'online-payment'        => '線上付款',
            'prepayment-percentage' => '預付百分比',
        ],
    ],
];
