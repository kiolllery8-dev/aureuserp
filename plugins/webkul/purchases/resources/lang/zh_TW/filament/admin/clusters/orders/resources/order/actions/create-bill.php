<?php

return [
    'label' => '新增Bill',

    'action' => [
        'notification' => [
            'warning' => [
                'title' => '沒有可開立發票的項目',
                'body'  => '沒有可開立發票的項目，請確認已收貨數量。',
            ],

            'success' => [
                'title' => 'Bill已建立',
                'body'  => 'The bill has been已建立成功.',
            ],
        ],
    ],
];
