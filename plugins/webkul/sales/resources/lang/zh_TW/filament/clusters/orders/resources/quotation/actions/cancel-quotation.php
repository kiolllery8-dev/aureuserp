<?php

return [
    'title' => '取消',
    'modal' => [
        'heading'     => 'Cancel 報價單',
        'description' => 'Are you sure you want to cancel this 報價單?',
    ],

    'footer-actions' => [
        'send-and-cancel' => [
            'title' => 'Send & Cancel',

            'notification' => [
                'cancelled' => [
                    'title' => '報價單 cancelled',
                    'body'  => '報價單 has been cancelled and email has been sent成功.',
                ],
            ],
        ],

        'cancel' => [
            'title' => '取消',

            'notification' => [
                'cancelled' => [
                    'title' => '報價單 cancelled',
                    'body'  => '報價單 has been cancelled成功.',
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
            'subject-default'     => '報價單 :name has been cancelled for Sales 訂單 #:id',
            'description'         => '描述',
            'description-default' => 'Dear <b>:partner_name</b>, <br/><br/>We would like to inform you that your Sales 訂單 <b>:name</b> has been cancelled. As a result, no further charges will apply to this order. If a refund為必填, it will be processed at the earliest convenience.<br/><br/>Should you have any questions or require further assistance, please feel free to reach out to us.',
        ],
    ],
];
