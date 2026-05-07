<?php

return [
    'title' => '付款',

    'form' => [
        'fields' => [
            'journal'              => '帳本',
            'amount'               => '金額',
            'currency'             => '幣別',
            'payment-method-line'  => '付款方式行',
            'payment-date'         => '付款日期',
            'partner-bank-account' => '夥伴銀行帳戶',
            'communication'        => '備註',
        ],
    ],

    'notifications' => [
        'payment-failed' => [
            'title' => '付款失敗',
        ],
    ],
];
