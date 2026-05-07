<?php

return [
    'table' => [
        'columns' => [
            'reference'         => '參考編號',
            'total-amount'      => '總金額',
            'confirmation-date' => 'Confirmation日期',
            'status'            => '狀態',
        ],
    ],

    'infolist' => [
        'settings' => [
            'entries' => [
                'buyer' => '買家',
            ],

            'actions' => [
                'accept' => [
                    'label' => '接受',

                    'notification' => [
                        'title' => '報價已接受',
                        'body'  => 'The RFQ has been acknowledged成功.',
                    ],

                    'message' => [
                        'body' => 'The RFQ has been acknowledged by vendor.',
                    ],
                ],

                'decline' => [
                    'label' => '拒絕',

                    'notification' => [
                        'title' => '報價已拒絕',
                        'body'  => 'The RFQ has been declined成功.',
                    ],

                    'message' => [
                        'body' => 'The RFQ has been declined by vendor.',
                    ],
                ],

                'print' => [
                    'label' => '下載／列印',
                ],
            ],
        ],

        'general' => [
            'entries' => [
                'purchase-order'        => '採購訂單 #:id',
                'quotation'             => '報價邀請 #:id',
                'order-date'            => '訂單日期',
                'from'                  => '從',
                'confirmation-date'     => 'Confirmation日期',
                'receipt-date'          => 'Receipt日期',
                'products'              => '商品',
                'untaxed-amount'        => '未稅金額',
                'tax-amount'            => '稅額',
                'total'                 => '總計',
                'communication-history' => '溝通歷史',
            ],
        ],
    ],
];
