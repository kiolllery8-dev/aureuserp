<?php

return [
    'label' => '新增Bill',

    'action' => [
        'notification' => [
            'warning' => [
                'title' => 'No invoiceable lines',
                'body'  => 'There is no invoiceable line, please make sure that a quantity has been received.',
            ],

            'success' => [
                'title' => 'Bill已建立',
                'body'  => 'The bill has been已建立成功.',
            ],
        ],
    ],
];
