<?php

return [
    'form' => [
        'fieldsets' => [
            'account-properties' => [
                'label' => '帳戶 Properties',

                'fields' => [
                    'income-account'                    => 'Income 帳戶',
                    'income-account-hint-tooltip'       => 'This account will be used when validating a customer invoice.',
                    'expense-account'                   => 'Expense 帳戶',
                    'expense-account-hint-tooltip'      => 'The expense is記錄ed when a vendor bill is validated, except under Anglo-Saxon accounting with perpetual inventory valuation, where it is instead recognized as the 成本 of 商品 Sold when the customer invoice is validated.',
                    'down-payment-account'              => 'Down 付款 帳戶',
                    'down-payment-account-hint-tooltip' => 'Select the account to which down payments from this category will be記錄ed.',
                ],
            ],
        ],
    ],
];
