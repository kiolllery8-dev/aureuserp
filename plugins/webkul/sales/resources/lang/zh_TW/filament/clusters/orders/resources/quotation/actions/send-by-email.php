<?php

return [
    'title'        => 'Send By 電子郵件',
    'resend-title' => 'Re-Send By 電子郵件',
    'quotation'    => '報價單',
    'quotations'   => '報價單',

    'modal' => [
        'heading' => 'Send 報價單 By 電子郵件',
    ],

    'form' => [
        'fields' => [
            'partners'    => '夥伴',
            'subject'     => '主旨',
            'description' => '描述',
            'attachment'  => '附件',
        ],
    ],

    'actions' => [
        'notification' => [
            'email' => [
                'no_recipients' => [
                    'title' => 'No Recipients Selected',
                    'body'  => 'Please select at least one partner to send quotations to.',
                ],

                'all_success' => [
                    'title' => '報價單 已寄出!',
                    'body'  => 'Your :plural have been成功 delivered to: :recipients',
                ],

                'all_failed' => [
                    'title' => 'Unable to Send 報價單',
                    'body'  => 'We encountered issues sending your quotations: :failures',
                ],

                'partial_success' => [
                    'title'       => 'Some 報價單 已寄出',
                    'sent_part'   => 'Successfully delivered to: :recipients',
                    'failed_part' => 'Could not deliver to: :failures',
                ],

                'failure_item' => ':partner (:reason)',
            ],
        ],
    ],

];
