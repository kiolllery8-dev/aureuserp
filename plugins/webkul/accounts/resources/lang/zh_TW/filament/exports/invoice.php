<?php

return [
    'columns' => [
        'number'           => '編號',
        'state'            => '狀態',
        'customer'         => '客戶',
        'invoice-date'     => '開立日期',
        'due-date'         => '到期日',
        'tax-excluded'     => '不含稅',
        'tax'              => '稅',
        'total'            => '總計',
        'amount-due'       => '到期金額',
        'payment-state'    => '付款狀態',
        'checked'          => '已核對',
        'accounting-date'  => '入帳日期',
        'source-document'  => '來源單據',
        'reference'        => '參考編號',
        'sales-person'     => '業務',
        'invoice-currency' => '發票幣別',
    ],

    'values' => [
        'yes' => '是',
        'no'  => '否',
    ],

    'notification' => [
        'completed' => '發票匯出完成，共 :count 列。',
        'failed'    => ':count row(s) failed to export.',
    ],
];
