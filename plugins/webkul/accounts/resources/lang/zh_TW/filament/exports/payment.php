<?php

return [
    'columns' => [
        'date'            => '日期',
        'name'            => '名稱',
        'journal'         => '帳本',
        'payment-method'  => '付款方式',
        'partner'         => '夥伴',
        'amount-currency' => '金額幣別',
        'amount'          => '金額',
        'state'           => '狀態',
        'company'         => '公司',
    ],

    'notification' => [
        'completed' => '付款匯出完成，共 :count 列。',
        'failed'    => ':count row(s) failed to export.',
    ],
];
