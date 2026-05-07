<?php

return [
    'form' => [
        'value'                  => '值',
        'due'                    => '到期',
        'delay-due'              => '延遲到期',
        'delay-type'             => 'Delay類型',
        'days-on-the-next-month' => '次月日期',
        'days'                   => '日',
        'payment-term'           => '付款條件',
    ],

    'table' => [
        'columns' => [
            'due'          => '到期',
            'value'        => '值',
            'value-amount' => 'Value金額',
            'after'        => '之後',
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
