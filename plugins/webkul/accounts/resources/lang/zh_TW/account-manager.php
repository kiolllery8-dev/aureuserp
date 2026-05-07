<?php

return [
    'post-action-validate' => [
        'customer-required'    => 'Please provide a valid 客戶 to proceed with the 客戶 發票 validation.',
        'vendor-required'      => 'Please provide a valid 供應商 to proceed with the 供應商 進貨單 validation.',
        'bank-archived'        => 'The selected 夥伴 銀行 attached to this invoice is已封存.',
        'negative-amount'      => '發票 can not be confirmed with a negative total amount.',
        'date-required'        => 'Please provide a valid 進貨單/退款日期 to proceed with the 進貨單/退款 validation.',
        'currency-archived'    => 'You cannot confirm an invoice with an已封存 currency.',
        'account-deprecated'   => 'One or more lines in this invoice are using deprecated accounts.',
        'lines-required'       => 'Please add at least one line to the invoice.',
        'draft-state-required' => 'Only invoices in draft state can be confirmed.',
        'journal-archived'     => 'You cannot confirm an invoice with an已封存 journal.',
    ],
];
