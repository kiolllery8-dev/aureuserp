<?php

return [
    'title' => '管理Traceability',

    'form' => [
        'enable-lots-serial-numbers'                             => 'Lots & Serial Numbers',
        'enable-lots-serial-numbers-helper-text'                 => '提供從供應商到客戶的完整追溯',
        'configure-lots'                                         => 'Configure Lots',
        'enable-expiration-dates'                                => 'Expiration日期s',
        'enable-expiration-dates-helper-text'                    => '為批次／序號設定到期日',
        'display-on-delivery-slips'                              => 'Display on Delivery Slips',
        'display-on-delivery-slips-helper-text'                  => 'Lots & Serial numbers will appear on the delivery slips',
        'display-expiration-dates-on-delivery-slips'             => 'Display Expiration日期s on Delivery Slips',
        'display-expiration-dates-on-delivery-slips-helper-text' => '到期日會出現在出貨單上',
        'enable-consignments'                                    => '寄售',
        'enable-consignments-helper-text'                        => '為已存放商品設定擁有者',
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
