<?php

return [
    'columns' => [
        'invoice-date' => '開立日期',
        'date'         => '日期',
        'number'       => '編號',
        'partner'      => '夥伴',
        'reference'    => '參考編號',
        'journal'      => '帳本',
        'company'      => '公司',
        'total'        => '總計',
        'state'        => '狀態',
        'checked'      => '已核對',
    ],

    'values' => [
        'yes' => '是',
        'no'  => '否',
    ],

    'notification' => [
        'completed' => 'Your journal entry export has completed and :count row(s) exported.',
        'failed'    => ':count row(s) failed to export.',
    ],
];
