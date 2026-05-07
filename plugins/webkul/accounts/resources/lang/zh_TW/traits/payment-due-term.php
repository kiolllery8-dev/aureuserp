<?php

return [
    'form' => [
        'value'                  => '值',
        'due'                    => 'Due',
        'delay-due'              => 'Delay Due',
        'delay-type'             => 'Delay類型',
        'days-on-the-next-month' => '天數 on the next month',
        'days'                   => '天數',
        'payment-term'           => '付款條件',
    ],

    'table' => [
        'columns' => [
            'due'          => 'Due',
            'value'        => '值',
            'value-amount' => 'Value金額',
            'after'        => 'After',
            'delay-type'   => 'Delay類型',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => '付款 Due 條件已更新',
                    'body'  => 'The payment due term has been已更新成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => '付款 Due 條件已刪除',
                    'body'  => 'The payment due term has been已刪除成功.',
                ],
            ],
        ],

        'header-actions' => [
            'create' => [
                'notification' => [
                    'title' => '付款 Due 條件已建立',
                    'body'  => 'The payment due term has been已建立成功.',
                ],
            ],
        ],
    ],
];
