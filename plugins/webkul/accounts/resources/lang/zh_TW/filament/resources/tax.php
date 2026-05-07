<?php

return [
    'form' => [
        'sections' => [
            'fields' => [
                'name'            => '名稱',
                'tax-type'        => 'Tax類型',
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
                    'factor-percent' => '因子 %',
                    'account'        => '帳戶',
                ],
            ],

            'field-set' => [
                'advanced-options' => [
                    'title' => 'Advanced Options',

                    'fields' => [
                        'invoice-label'       => 'Invoice label',
                        'tax-group'           => '稅務群組',
                        'country'             => '國家',
                        'include-in-price'    => 'Included in價格',
                        'include-base-amount' => 'Affect Base of Subsequent Taxes',
                        'is-base-affected'    => 'Base Affected by Previous Taxes',
                    ],
                ],

                'fields' => [
                    'description' => '說明',
                    'legal-notes' => 'Legal Notes',
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
            'tax-scope'              => 'Tax Scope',
            'amount-type'            => 'Amount類型',
            'invoice-label'          => 'Invoice Label',
            'tax-exigibility'        => 'Tax Exigibility',
            'price-include-override' => 'Price Include Override',
            'amount'                 => '金額',
            'status'                 => '狀態',
            'include-base-amount'    => '含基準金額',
            'is-base-affected'       => '是否影響基準',
        ],

        'groups' => [
            'name'         => '名稱',
            'company'      => '公司',
            'tax-group'    => '稅務群組',
            'country'      => '國家',
            'created-by'   => '建立者',
            'type-tax-use' => 'Type Tax Use',
            'tax-scope'    => 'Tax Scope',
            'amount-type'  => 'Amount類型',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Tax已刪除',
                        'body'  => 'The Tax has been已刪除成功.',
                    ],

                    'error' => [
                        'title' => 'Tax could not be已刪除',
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
                        'title' => 'Taxes could not be已刪除',
                        'body'  => 'The taxes cannot be已刪除 because they are currently in use.',
                    ],
                ],
            ],
        ],

        'pages' => [
            'create' => [
                'notifications' => [
                    'invalid-repartition-lines' => [
                        'title' => '無效的分配行',
                    ],
                ],
            ],

            'edit' => [
                'notifications' => [
                    'invalid-repartition-lines' => [
                        'title' => '無效的分配行',
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
                        'include-in-price'    => '含於價格',
                        'include-base-amount' => '含基準金額',
                        'is-base-affected'    => '是否影響基準',
                    ],
                ],

                'description-and-legal-notes' => [
                    'title'   => 'Description & Invoice Legal Notes',
                    'entries' => [
                        'description' => '說明',
                        'legal-notes' => 'Legal Notes',
                    ],
                ],
            ],
        ],
    ],

];
