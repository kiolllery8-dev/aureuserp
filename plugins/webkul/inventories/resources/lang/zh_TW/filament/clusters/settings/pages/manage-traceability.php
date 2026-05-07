<?php

return [
    'title' => '管理Traceability',

    'form' => [
        'enable-lots-serial-numbers'                             => '批號 & Serial 編號',
        'enable-lots-serial-numbers-helper-text'                 => 'Get a full traceability from vendors to customers',
        'configure-lots'                                         => 'Configure 批號',
        'enable-expiration-dates'                                => 'Expiration日期s',
        'enable-expiration-dates-helper-text'                    => 'Set expiration dates on lots & serial numbers',
        'display-on-delivery-slips'                              => 'Display on 出貨 Slips',
        'display-on-delivery-slips-helper-text'                  => '批號 & Serial numbers will appear on the delivery slips',
        'display-expiration-dates-on-delivery-slips'             => 'Display Expiration日期s on 出貨 Slips',
        'display-expiration-dates-on-delivery-slips-helper-text' => 'Expiration dates will appear on the delivery slip',
        'enable-consignments'                                    => 'Consignments',
        'enable-consignments-helper-text'                        => 'Set owner on stored products',
    ],

    'before-save' => [
        'notification' => [
            'warning' => [
                'title' => 'You have products in stock that have lot/serial number tracking enabled. ',
                'body'  => 'First switch off tracking on all the products before switching off this setting.',
            ],
        ],
    ],
];
