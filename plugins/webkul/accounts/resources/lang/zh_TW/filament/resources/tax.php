<?php

return [
    'form' => [
        'sections' => [
            'fields' => [
                'name'            => '名稱',
                'tax-type'        => 'Tax Type',
                'tax-computation' => 'Tax Computation',
                'tax-scope'       => 'Tax Scope',
                'status'          => '狀態',
                'amount'          => '金額',
            ],

            'repeater' => [
                'invoice-repartition-lines' => [
                    'label' => 'Invoice Repartition Lines',
                ],

                'refund-repartition-lines' => [
                    'label' => 'Refund Repartition Lines',
                ],

                'fields' => [
                    'type'           => '類型',
                    'factor-percent' => 'Factor %',
                    'account'        => '科目',
                ],
            ],

            'field-set' => [
                'advanced-options' => [
                    'title' => 'Advanced Options',

                    'fields' => [
                        'invoice-label'       => 'Invoice label',
                        'tax-group'           => '稅務群組',
                        'country'             => '國家',
                        'include-in-price'    => 'Included in Price',
                        'include-base-amount' => 'Affect Base of Subsequent Taxes',
                        'is-base-affected'    => 'Base Affected by Previous Taxes',
                    ],
                ],

                'fields' => [
                    'description' => '描述',
                    'legal-notes' => 'Legal Notes',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'                   => '名稱',
            'amount-type'            => 'Amount Type',
            'company'                => '公司',
            'tax-group'              => '稅務群組',
            'country'                => '國家',
            'tax-type'               => 'Tax Type',
            'tax-scope'              => 'Tax Scope',
            'amount-type'            => 'Amount Type',
            'invoice-label'          => 'Invoice Label',
            'tax-exigibility'        => 'Tax Exigibility',
            'price-include-override' => 'Price Include Override',
            'amount'                 => '金額',
            'status'                 => '狀態',
            'include-base-amount'    => 'Include Base Amount',
            'is-base-affected'       => 'Is Base Affected',
        ],

        'groups' => [
            'name'         => '名稱',
            'company'      => '公司',
            'tax-group'    => '稅務群組',
            'country'      => '國家',
            'created-by'   => '建立者',
            'type-tax-use' => 'Type Tax Use',
            'tax-scope'    => 'Tax Scope',
            'amount-type'  => 'Amount Type',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Tax deleted',
                        'body'  => 'The Tax has been deleted成功.',
                    ],

                    'error' => [
                        'title' => 'Tax could not be deleted',
                        'body'  => 'The tax cannot be deleted because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Taxes deleted',
                        'body'  => 'The taxes has been deleted成功.',
                    ],

                    'error' => [
                        'title' => 'Taxes could not be deleted',
                        'body'  => 'The taxes cannot be deleted because they are currently in use.',
                    ],
                ],
            ],
        ],

        'pages' => [
            'create' => [
                'notifications' => [
                    'invalid-repartition-lines' => [
                        'title' => 'Invalid Repartition Lines',
                    ],
                ],
            ],

            'edit' => [
                'notifications' => [
                    'invalid-repartition-lines' => [
                        'title' => 'Invalid Repartition Lines',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'entries' => [
                'name'            => '名稱',
                'tax-type'        => 'Tax Type',
                'tax-computation' => 'Tax Computation',
                'tax-scope'       => 'Tax Scope',
                'status'          => '狀態',
                'amount'          => '金額',
            ],

            'field-set' => [
                'advanced-options' => [
                    'title' => 'Advanced Options',

                    'entries' => [
                        'invoice-label'       => 'Invoice label',
                        'tax-group'           => '稅務群組',
                        'country'             => '國家',
                        'include-in-price'    => 'Include in price',
                        'include-base-amount' => 'Include base amount',
                        'is-base-affected'    => 'Is base affected',
                    ],
                ],

                'description-and-legal-notes' => [
                    'title'   => 'Description & Invoice Legal Notes',
                    'entries' => [
                        'description' => '描述',
                        'legal-notes' => 'Legal Notes',
                    ],
                ],
            ],
        ],
    ],

];
