<?php

return [
    'title' => '管理Quotation & Order',

    'breadcrumb' => '管理Quotation & Order',

    'navigation' => [
        'title' => '管理Quotation & Order',
    ],

    'form' => [
        'fields' => [
            'validity-suffix'         => 'days',
            'validity'                => 'Default Quotation Validity',
            'validity-help'           => 'The default number of days a quotation is valid for.',
            'lock-confirm-sales'      => 'Lock Confirm Sales',
            'lock-confirm-sales-help' => 'If enabled, the sales order will be locked after confirmation.',
        ],
    ],
];
