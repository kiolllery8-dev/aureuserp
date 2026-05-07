<?php

return [
    'form' => [
        'fieldsets' => [
            'account-properties' => [
                'label' => '科目屬性',

                'fields' => [
                    'income-account'                    => '收入科目',
                    'income-account-hint-tooltip'       => '驗證客戶發票時會使用此科目。',
                    'expense-account'                   => '費用科目',
                    'expense-account-hint-tooltip'      => 'The expense is記錄ed when a vendor bill is validated, except under Anglo-Saxon accounting with perpetual inventory valuation, where it is instead recognized as the Cost of Goods Sold when the customer invoice is validated.',
                    'down-payment-account'              => '預付款科目',
                    'down-payment-account-hint-tooltip' => 'Select the account to which down payments from this category will be記錄ed.',
                ],
            ],
        ],
    ],
];
