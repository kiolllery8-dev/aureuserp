<?php

return [
    'form' => [
        'sections' => [
            'fields' => [
                'name'            => '名稱',
                'tax-type'        => 'Tax類型',
                'tax-computation' => '稅 Computation',
                'tax-scope'       => '稅 Scope',
                'status'          => '狀態',
                'amount'          => '金額',
            ],

            'repeater' => [
                'invoice-repartition-lines' => [
                    'label' => '發票 Repartition Lines',
                ],

                'refund-repartition-lines' => [
                    'label' => '退款 Repartition Lines',
                ],

                'fields' => [
                    'type'           => '類型',
                    'factor-percent' => 'Factor %',
                    'account'        => '帳戶',
                ],
            ],

            'field-set' => [
                'advanced-options' => [
                    'title' => 'Advanced 選項',

                    'fields' => [
                        'invoice-label'       => '發票 label',
                        'tax-group'           => '稅務群組',
                        'country'             => '國家',
                        'include-in-price'    => 'Included in價格',
                        'include-base-amount' => 'Affect Base of Subsequent 稅',
                        'is-base-affected'    => 'Base Affected by Previous 稅',
                    ],
                ],

                'fields' => [
                    'description' => '描述',
                    'legal-notes' => 'Legal 備註',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'                   => '名稱',
            'amount-type'            => 'Amount類型',
            'company'                => '公司',
            'tax-group'              => '稅務群組',
            'country'                => '國家',
            'tax-type'               => 'Tax類型',
            'tax-scope'              => '稅 Scope',
            'amount-type'            => 'Amount類型',
            'invoice-label'          => '發票 Label',
            'tax-exigibility'        => '稅 Exigibility',
            'price-include-override' => '價格 Include Override',
            'amount'                 => '金額',
            'status'                 => '狀態',
            'include-base-amount'    => 'Include Base金額',
            'is-base-affected'       => 'Is Base Affected',
        ],

        'groups' => [
            'name'         => '名稱',
            'company'      => '公司',
            'tax-group'    => '稅務群組',
            'country'      => '國家',
            'created-by'   => '建立者',
            'type-tax-use' => '類型 稅 Use',
            'tax-scope'    => '稅 Scope',
            'amount-type'  => 'Amount類型',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Tax已刪除',
                        'body'  => 'The 稅 has been已刪除成功.',
                    ],

                    'error' => [
                        'title' => '稅 could not be已刪除',
                        'body'  => 'The tax cannot be已刪除 because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Taxes已刪除',
                        'body'  => 'The taxes has been已刪除成功.',
                    ],

                    'error' => [
                        'title' => '稅 could not be已刪除',
                        'body'  => 'The taxes cannot be已刪除 because they are currently in use.',
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
                'tax-type'        => 'Tax類型',
                'tax-computation' => '稅 Computation',
                'tax-scope'       => '稅 Scope',
                'status'          => '狀態',
                'amount'          => '金額',
            ],

            'field-set' => [
                'advanced-options' => [
                    'title' => 'Advanced 選項',

                    'entries' => [
                        'invoice-label'       => '發票 label',
                        'tax-group'           => '稅務群組',
                        'country'             => '國家',
                        'include-in-price'    => 'Include in price',
                        'include-base-amount' => 'Include base amount',
                        'is-base-affected'    => 'Is base affected',
                    ],
                ],

                'description-and-legal-notes' => [
                    'title'   => '描述 & 發票 Legal 備註',
                    'entries' => [
                        'description' => '描述',
                        'legal-notes' => 'Legal 備註',
                    ],
                ],
            ],
        ],
    ],

];
