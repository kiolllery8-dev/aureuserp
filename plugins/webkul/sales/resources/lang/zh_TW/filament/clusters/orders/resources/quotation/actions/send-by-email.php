<?php

return [
    'title'        => 'Send By Email',
    'resend-title' => 'Re-Send By Email',
    'quotation'    => '報價單',
    'quotations'   => '報價單',

    'modal' => [
        'heading' => 'Send Quotation By Email',
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
                    'body'  => 'Please select at least one partner to send quotations to.',
                ],

                'all_success' => [
                    'title' => 'Quotations Sent!',
                    'body'  => 'Your :plural have been成功 delivered to: :recipients',
                ],

                'all_failed' => [
                    'title' => 'Unable to Send Quotations',
                    'body'  => 'We encountered issues sending your quotations: :failures',
                ],

                'partial_success' => [
                    'title'       => 'Some Quotations Sent',
                    'sent_part'   => '已成功寄送給：:recipients',
                    'failed_part' => '無法寄送至：:failures',
                ],

                'failure_item' => ':partner (:reason)',
            ],
        ],
    ],

];
