<?php

return [
    'post-action-validate' => [
        'customer-required'    => '請提供有效的客戶以驗證客戶發票。',
        'vendor-required'      => '請提供有效的供應商以驗證供應商帳單。',
        'bank-archived'        => 'The selected Partner Bank attached to this invoice is已封存.',
        'negative-amount'      => '總金額為負時無法確認發票。',
        'date-required'        => 'Please provide a valid Bill/Refund日期 to proceed with the Bill/Refund validation.',
        'currency-archived'    => 'You cannot confirm an invoice with an已封存 currency.',
        'account-deprecated'   => '此發票有項目使用已停用科目。',
        'lines-required'       => '請至少新增一個發票項目。',
        'draft-state-required' => '只有草稿狀態的發票可以確認。',
        'journal-archived'     => 'You cannot confirm an invoice with an已封存 journal.',
    ],
];
