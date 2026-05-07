<?php

return [
    'label' => '新增進貨單',

    'action' => [
        'notification' => [
            'warning' => [
                'title' => 'No invoiceable lines',
                'body'  => 'There is no invoiceable line, please make sure that a quantity has been received.',
            ],

            'success' => [
                'title' => '進貨單已建立',
                'body'  => 'The bill has been已建立成功.',
            ],
        ],
    ],
];
