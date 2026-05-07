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
                    'label' => 'Accept',

                    'notification' => [
                        'title' => '報價單 Accepted',
                        'body'  => 'The RFQ has been acknowledged成功.',
                    ],

                    'message' => [
                        'body' => 'The RFQ has been acknowledged by vendor.',
                    ],
                ],

                'decline' => [
                    'label' => 'Decline',

                    'notification' => [
                        'title' => '報價單 Declined',
                        'body'  => 'The RFQ has been declined成功.',
                    ],

                    'message' => [
                        'body' => 'The RFQ has been declined by vendor.',
                    ],
                ],

                'print' => [
                    'label' => 'Download/Print',
                ],
            ],
        ],

        'general' => [
            'entries' => [
                'purchase-order'        => 'Purchase 訂單 #:id',
                'quotation'             => 'Request for 報價單 #:id',
                'order-date'            => '訂單日期',
                'from'                  => 'From',
                'confirmation-date'     => 'Confirmation日期',
                'receipt-date'          => 'Receipt日期',
                'products'              => '商品',
                'untaxed-amount'        => '未稅金額',
                'tax-amount'            => '稅額',
                'total'                 => '總計',
                'communication-history' => 'Communication History',
            ],
        ],
    ],
];
