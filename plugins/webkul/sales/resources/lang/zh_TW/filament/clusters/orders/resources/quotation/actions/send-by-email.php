<?php

return [
    'title'        => '以電子郵件寄送',
    'resend-title' => '重新以電子郵件寄送',
    'quotation'    => '報價單',
    'quotations'   => '報價單',

    'modal' => [
        'heading' => '以電子郵件寄送報價',
    ],

    'form' => [
        'fields' => [
            'partners'    => '夥伴',
            'subject'     => '主旨',
            'description' => '說明',
            'attachment'  => '附件',
        ],
    ],

    'actions' => [
        'notification' => [
            'email' => [
                'no_recipients' => [
                    'title' => '未選收件人',
                    'body'  => '請至少選擇一位夥伴寄送報價。',
                ],

                'all_success' => [
                    'title' => '報價已寄出！',
                    'body'  => 'Your :plural have been成功 delivered to: :recipients',
                ],

                'all_failed' => [
                    'title' => '無法寄送報價',
                    'body'  => '寄送報價時發生問題：:failures',
                ],

                'partial_success' => [
                    'title'       => '部分報價已寄出',
                    'sent_part'   => '已成功寄送給：:recipients',
                    'failed_part' => '無法寄送至：:failures',
                ],

                'failure_item' => ':partner (:reason)',
            ],
        ],
    ],

];
