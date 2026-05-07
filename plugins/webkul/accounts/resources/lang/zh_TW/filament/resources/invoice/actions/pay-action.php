<?php

return [
    'title' => '付款',

    'form' => [
        'fields' => [
            'journal'              => '帳本',
            'amount'               => '金額',
            'currency'             => '幣別',
            'payment-method-line'  => 'Payment Method Line',
            'payment-date'         => '付款日期',
            'partner-bank-account' => 'Partner Bank Account',
            'communication'        => '備註',
        ],
    ],

    'notifications' => [
        'payment-failed' => [
            'title' => 'Payment Failed',
        ],
    ],
];
