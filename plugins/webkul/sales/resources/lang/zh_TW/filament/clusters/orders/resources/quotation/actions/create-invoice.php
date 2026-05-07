<?php

return [
    'title' => '新增Invoice',

    'modal' => [
        'heading' => '新增Invoice',
    ],

    'notification' => [
        'invoice-created' => [
            'title' => 'Invoice已建立',
            'body'  => 'Invoice has been已建立成功.',
        ],

        'no-invoiceable-lines' => [
            'title' => '沒有可開立發票的項目',
            'body'  => '沒有可開立發票的項目，請確認已收貨數量。',
        ],
    ],

    'form' => [
        'fields' => [
            'create-invoice' => '新增Invoice',
        ],
    ],
];
