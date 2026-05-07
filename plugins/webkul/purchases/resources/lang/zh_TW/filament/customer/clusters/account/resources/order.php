<?php

return [
    'table' => [
        'columns' => [
            'reference'         => '參考',
            'total-amount'      => 'Total Amount',
            'confirmation-date' => 'Confirmation Date',
            'status'            => '狀態',
        ],
    ],

    'infolist' => [
        'settings' => [
            'entries' => [
                'buyer' => 'Buyer',
            ],

            'actions' => [
                'accept' => [
                    'label' => 'Accept',

                    'notification' => [
                        'title' => 'Quotation Accepted',
                        'body'  => 'The RFQ has been acknowledged成功.',
                    ],

                    'message' => [
                        'body' => 'The RFQ has been acknowledged by vendor.',
                    ],
                ],

                'decline' => [
                    'label' => 'Decline',

                    'notification' => [
                        'title' => 'Quotation Declined',
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
                'purchase-order'        => 'Purchase Order #:id',
                'quotation'             => 'Request for Quotation #:id',
                'order-date'            => 'Order Date',
                'from'                  => 'From',
                'confirmation-date'     => 'Confirmation Date',
                'receipt-date'          => 'Receipt Date',
                'products'              => '商品',
                'untaxed-amount'        => 'Untaxed Amount',
                'tax-amount'            => 'Tax Amount',
                'total'                 => '總計',
                'communication-history' => 'Communication History',
            ],
        ],
    ],
];
