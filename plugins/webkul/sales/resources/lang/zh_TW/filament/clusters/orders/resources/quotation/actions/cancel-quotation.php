<?php

return [
    'title' => '取消',
    'modal' => [
        'heading'     => '取消報價',
        'description' => '確定要取消此報價嗎？',
    ],

    'footer-actions' => [
        'send-and-cancel' => [
            'title' => '寄送並取消',

            'notification' => [
                'cancelled' => [
                    'title' => '報價已取消',
                    'body'  => 'Quotation has been cancelled and email has been sent成功.',
                ],
            ],
        ],

        'cancel' => [
            'title' => '取消',

            'notification' => [
                'cancelled' => [
                    'title' => '報價已取消',
                    'body'  => 'Quotation has been cancelled成功.',
                ],
            ],
        ],

        'close' => [
            'title' => '關閉',
        ],
    ],

    'form' => [
        'fields' => [
            'partner'             => '夥伴',
            'subject'             => '主旨',
            'subject-placeholder' => '主旨',
            'subject-default'     => '銷售訂單 #:id 的報價 :name 已取消',
            'description'         => '說明',
            'description-default' => 'Dear <b>:partner_name</b>, <br/><br/>We would like to inform you that your Sales Order <b>:name</b> has been cancelled. As a result, no further charges will apply to this order. If a refund為必填, it will be processed at the earliest convenience.<br/><br/>Should you have any questions or require further assistance, please feel free to reach out to us.',
        ],
    ],
];
