<?php

return [
    'title' => 'Pay',

    'form' => [
        'fields' => [
            'journal'              => '帳本',
            'amount'               => '金額',
            'currency'             => '幣別',
            'payment-method-line'  => '付款 方式 Line',
            'payment-date'         => '付款日期',
            'partner-bank-account' => '夥伴 銀行 帳戶',
            'communication'        => 'Memo',
        ],
    ],

    'notifications' => [
        'payment-failed' => [
            'title' => '付款 Failed',
        ],
    ],
];
