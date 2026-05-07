<?php

return [
    'title' => '管理Traceability',

    'form' => [
        'enable-lots-serial-numbers'                             => '批次與序號',
        'enable-lots-serial-numbers-helper-text'                 => '提供從供應商到客戶的完整追溯',
        'configure-lots'                                         => '設定批次',
        'enable-expiration-dates'                                => 'Expiration日期s',
        'enable-expiration-dates-helper-text'                    => '為批次／序號設定到期日',
        'display-on-delivery-slips'                              => '顯示於出貨單',
        'display-on-delivery-slips-helper-text'                  => '批次與序號會顯示在出貨單上',
        'display-expiration-dates-on-delivery-slips'             => 'Display Expiration日期s on Delivery Slips',
        'display-expiration-dates-on-delivery-slips-helper-text' => '到期日會出現在出貨單上',
        'enable-consignments'                                    => '寄售',
        'enable-consignments-helper-text'                        => '為已存放商品設定擁有者',
    ],

    'before-save' => [
        'notification' => [
            'warning' => [
                'title' => '庫存中有商品已啟用批次／序號追蹤。',
                'body'  => '請先關閉所有商品的追蹤，再關閉此設定。',
            ],
        ],
    ],
];
