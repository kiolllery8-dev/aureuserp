<?php

return [
    'title' => 'Pay',

    'form' => [
        'fields' => [
            'journal'              => '日記帳',
            'amount'               => '金額',
            'currency'             => '幣別',
            'payment-method-line'  => 'Payment Method Line',
            'payment-date'         => 'Payment Date',
            'partner-bank-account' => 'Partner Bank Account',
            'communication'        => 'Memo',
        ],
    ],

    'notifications' => [
        'payment-failed' => [
            'title' => 'Payment Failed',
        ],
    ],
];
