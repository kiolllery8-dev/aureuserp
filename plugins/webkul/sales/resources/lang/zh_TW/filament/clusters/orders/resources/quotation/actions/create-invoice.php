<?php

return [
    'title' => '新增發票',

    'modal' => [
        'heading' => '新增發票',
    ],

    'notification' => [
        'invoice-created' => [
            'title' => '發票已建立',
            'body'  => '發票 has been已建立成功.',
        ],

        'no-invoiceable-lines' => [
            'title' => 'No invoiceable lines',
            'body'  => 'There is no invoiceable line, please make sure that a quantity has been received.',
        ],
    ],

    'form' => [
        'fields' => [
            'create-invoice' => '新增發票',
        ],
    ],
];
