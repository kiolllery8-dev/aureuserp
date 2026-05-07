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
            'title' => 'No invoiceable lines',
            'body'  => 'There is no invoiceable line, please make sure that a quantity has been received.',
        ],
    ],

    'form' => [
        'fields' => [
            'create-invoice' => '新增Invoice',
        ],
    ],
];
