<?php

return [
    'form' => [
        'tabs' => [
            'general-information' => [
                'title' => '一般資料',

                'sections' => [
                    'branch-information' => [
                        'title' => 'Branch資料',

                        'fields' => [
                            'company-name'                => '公司名稱',
                            'registration-number'         => 'Registration Number',
                            'tax-id'                      => '統一編號',
                            'tax-id-tooltip'              => 'The Tax ID is a unique identifier for your company.',
                            'color'                       => '顏色',
                            'company-id'                  => 'Company ID',
                            'company-id-tooltip'          => 'The Company ID is a unique identifier for your company.',
                        ],
                    ],

                    'branding' => [
                        'title'  => 'Branding',
                        'fields' => [
                            'branch-logo' => 'Branch Logo',
                        ],
                    ],
                ],
            ],

            'address-information' => [
                'title' => '地址資料',

                'sections' => [
                    'address-information' => [
                        'title' => '地址資料',

                        'fields' => [
                            'street1'                => '地址 1',
                            'street2'                => '地址 2',
                            'city'                   => '城市',
                            'zip'                    => '郵遞區號',
                            'country'                => '國家',
                            'country-currency-name'  => '幣別名稱',
                            'country-phone-code'     => '國碼',
                            'country-code'           => '代碼',
                            'country-name'           => '國家名稱',
                            'country-state-required' => '須填寫州/省',
                            'country-zip-required'   => 'Zip Required',
                            'country-create'         => '新增國家',
                            'state'                  => '狀態',
                            'state-name'             => '州/省名稱',
                            'state-code'             => 'State代碼',
                            'zip-code'               => '郵遞區號',
                            'state-create'           => '新增州/省',
                        ],
                    ],

                    'additional-information' => [
                        'title' => '其他資料',

                        'fields' => [
                            'default-currency'        => '預設幣別',
                            'currency-name'           => '幣別名稱',
                            'currency-full-name'      => 'Currency Full名稱',
                            'currency-symbol'         => '幣別符號',
                            'currency-iso-numeric'    => 'Currency ISO Numeric',
                            'currency-decimal-places' => 'Currency Decimal Places',
                            'currency-rounding'       => 'Currency Rounding',
                            'currency-status'         => 'Currency狀態',
                            'currency-create'         => '新增幣別',
                            'company-foundation-date' => 'Company Foundation日期',
                            'status'                  => '狀態',
                        ],
                    ],
                ],
            ],

            'contact-information' => [
                'title' => '聯絡資料',

                'sections' => [
                    'contact-information' => [
                        'title' => '聯絡資料',

                        'fields' => [
                            'email-address' => '電子郵件',
                            'phone-number'  => '電話號碼',
                            'mobile-number' => '電話號碼',
                        ],
                    ],
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'logo'                 => 'Logo',
            'company-name'         => 'Branch名稱',
            'branches'             => '分公司',
            'email'                => '電子郵件',
            'city'                 => '城市',
            'country'              => '國家',
            'currency'             => '幣別',
            'status'               => '狀態',
            'created-at'           => '建立時間',
            'updated-at'           => '更新時間',
        ],

        'groups' => [
            'company-name' => 'Branch名稱',
            'city'         => '城市',
            'country'      => '國家',
            'state'        => '狀態',
            'email'        => '電子郵件',
            'phone'        => '電話',
            'currency'     => '幣別',
            'created-at'   => '建立時間',
            'updated-at'   => '更新時間',
        ],

        'filters' => [
            'trashed' => 'Trashed',
            'status'  => '狀態',
            'country' => '國家',
        ],

        'header-actions' => [
            'create' => [
                'notification' => [
                    'title' => 'Branch已建立',
                    'body'  => 'The branch has been已建立成功.',
                ],
            ],
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Branch已更新',
                    'body'  => 'The branch has been已更新成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Branch已刪除',
                    'body'  => 'The branch has been已刪除成功.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Branch restored',
                    'body'  => 'The branch has been restored成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Branches restored',
                    'body'  => 'The branches has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Branches已刪除',
                    'body'  => 'The branches has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Branches force已刪除',
                    'body'  => 'The branches has been force已刪除成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'tabs' => [
            'general-information' => [
                'title' => '一般資料',

                'sections' => [
                    'branch-information' => [
                        'title' => 'Branch資料',

                        'entries' => [
                            'company-name'                => '公司名稱',
                            'registration-number'         => 'Registration Number',
                            'registration-number-tooltip' => 'The Tax ID is a unique identifier for your company.',
                            'color'                       => '顏色',
                        ],
                    ],

                    'branding' => [
                        'title'   => 'Branding',
                        'entries' => [
                            'branch-logo' => 'Branch Logo',
                        ],
                    ],
                ],
            ],

            'address-information' => [
                'title' => '地址資料',

                'sections' => [
                    'address-information' => [
                        'title' => '地址資料',

                        'entries' => [
                            'street1'                => '地址 1',
                            'street2'                => '地址 2',
                            'city'                   => '城市',
                            'zip'                    => '郵遞區號',
                            'country'                => '國家',
                            'country-currency-name'  => '幣別名稱',
                            'country-phone-code'     => '國碼',
                            'country-code'           => '代碼',
                            'country-name'           => '國家名稱',
                            'country-state-required' => '須填寫州/省',
                            'country-zip-required'   => 'Zip Required',
                            'country-create'         => '新增國家',
                            'state'                  => '狀態',
                            'state-name'             => '州/省名稱',
                            'state-code'             => 'State代碼',
                            'zip-code'               => '郵遞區號',
                            'state-create'           => '新增州/省',
                        ],
                    ],

                    'additional-information' => [
                        'title' => '其他資料',

                        'entries' => [
                            'default-currency'        => '預設幣別',
                            'currency-name'           => '幣別名稱',
                            'currency-full-name'      => 'Currency Full名稱',
                            'currency-symbol'         => '幣別符號',
                            'currency-iso-numeric'    => 'Currency ISO Numeric',
                            'currency-decimal-places' => 'Currency Decimal Places',
                            'currency-rounding'       => 'Currency Rounding',
                            'currency-status'         => 'Currency狀態',
                            'currency-create'         => '新增幣別',
                            'company-foundation-date' => 'Company Foundation日期',
                            'status'                  => '狀態',
                        ],
                    ],
                ],
            ],

            'contact-information' => [
                'title' => '聯絡資料',

                'sections' => [
                    'contact-information' => [
                        'title' => '聯絡資料',

                        'entries' => [
                            'email-address' => '電子郵件',
                            'phone-number'  => '電話號碼',
                            'mobile-number' => '電話號碼',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
