<?php

return [
    'form' => [
        'value'                  => '值',
        'due'                    => 'Due',
        'delay-due'              => 'Delay Due',
        'delay-type'             => 'Delay類型',
        'days-on-the-next-month' => 'Days on the next month',
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
                    'title' => 'Payment Due Term已更新',
                    'body'  => 'The payment due term has been已更新成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Payment Due Term已刪除',
                    'body'  => 'The payment due term has been已刪除成功.',
                ],
            ],
        ],

        'header-actions' => [
            'create' => [
                'notification' => [
                    'title' => 'Payment Due Term已建立',
                    'body'  => 'The payment due term has been已建立成功.',
                ],
            ],
        ],
    ],
];
