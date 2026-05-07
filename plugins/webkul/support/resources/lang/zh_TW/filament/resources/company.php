<?php

return [
    'title' => '公司',

    'navigation' => [
        'title' => '公司',
        'group' => '設定',
    ],

    'global-search' => [
        'email' => '電子郵件',
    ],

    'form' => [
        'sections' => [
            'company-information' => [
                'title'  => 'Company資料',
                'fields' => [
                    'name'                  => '公司名稱',
                    'registration-number'   => 'Registration 編號',
                    'company-id'            => '公司 ID',
                    'tax-id'                => '統一編號',
                    'tax-id-tooltip'        => 'The 稅 ID is a unique identifier for your company.',
                    'website'               => '網址',
                ],
            ],

            'address-information' => [
                'title'  => '地址資料',

                'fields' => [
                    'street1'        => '地址 1',
                    'street2'        => '地址 2',
                    'city'           => '城市',
                    'zipcode'        => '郵遞區號',
                    'country'        => '國家',
                    'currency-name'  => '幣別名稱',
                    'phone-code'     => '國碼',
                    'code'           => '代碼',
                    'country-name'   => '國家名稱',
                    'state-required' => '須填寫州/省',
                    'zip-required'   => 'Zip 必填',
                    'create-country' => '新增國家',
                    'state'          => '狀態',
                    'state-name'     => '州/省名稱',
                    'state-code'     => 'State代碼',
                    'create-state'   => '新增州/省',
                ],
            ],

            'additional-information' => [
                'title' => '其他資料',

                'fields' => [
                    'default-currency'        => '預設幣別',
                    'currency-name'           => '幣別名稱',
                    'currency-full-name'      => '幣別 Full名稱',
                    'currency-symbol'         => '幣別符號',
                    'currency-iso-numeric'    => '幣別 ISO Numeric',
                    'currency-decimal-places' => '幣別 Decimal Places',
                    'currency-rounding'       => '幣別 Rounding',
                    'currency-status'         => 'Currency狀態',
                    'company-foundation-date' => '公司 Foundation日期',
                    'currency-create'         => '新增幣別',
                    'status'                  => '狀態',
                ],
            ],

            'branding' => [
                'title'  => 'Branding',
                'fields' => [
                    'company-logo' => '公司 Logo',
                    'color'        => '顏色',
                ],
            ],

            'contact-information' => [
                'title'  => '聯絡資料',
                'fields' => [
                    'email'  => '電子郵件',
                    'phone'  => '電話號碼',
                    'mobile' => '電話號碼',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'logo'                 => 'Logo',
            'company-name'         => '公司名稱',
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
            'company-name' => '公司名稱',
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
            'status'  => '狀態',
            'country' => '國家',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => '公司 edited',
                    'body'  => 'The company has been edited成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Company已刪除',
                    'body'  => 'The company has been已刪除成功.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => '公司 restored',
                    'body'  => 'The company has been restored成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => '公司 restored',
                    'body'  => 'The companies has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Companies已刪除',
                    'body'  => 'The companies has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => '公司 force已刪除',
                    'body'  => 'The companies has been force已刪除成功.',
                ],
            ],
        ],

        'empty-state-actions' => [
            'create' => [
                'notification' => [
                    'title' => 'Companies已建立',
                    'body'  => 'The companies has been已建立成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'company-information' => [
                'title'   => 'Company資料',
                'entries' => [
                    'name'                  => '公司名稱',
                    'registration-number'   => 'Registration 編號',
                    'company-id'            => '公司 ID',
                    'tax-id'                => '統一編號',
                    'tax-id-tooltip'        => 'The 稅 ID is a unique identifier for your company.',
                    'website'               => '網址',
                ],
            ],

            'address-information' => [
                'title'  => '地址資料',

                'entries' => [
                    'street1'        => '地址 1',
                    'street2'        => '地址 2',
                    'city'           => '城市',
                    'zipcode'        => '郵遞區號',
                    'country'        => '國家',
                    'currency-name'  => '幣別名稱',
                    'phone-code'     => '國碼',
                    'code'           => '代碼',
                    'country-name'   => '國家名稱',
                    'state-required' => '須填寫州/省',
                    'zip-required'   => 'Zip 必填',
                    'create-country' => '新增國家',
                    'state'          => '狀態',
                    'state-name'     => '州/省名稱',
                    'state-code'     => 'State代碼',
                    'create-state'   => '新增州/省',
                ],
            ],

            'additional-information' => [
                'title' => '其他資料',

                'entries' => [
                    'default-currency'        => '預設幣別',
                    'currency-name'           => '幣別名稱',
                    'currency-full-name'      => '幣別 Full名稱',
                    'currency-symbol'         => '幣別符號',
                    'currency-iso-numeric'    => '幣別 ISO Numeric',
                    'currency-decimal-places' => '幣別 Decimal Places',
                    'currency-rounding'       => '幣別 Rounding',
                    'currency-status'         => 'Currency狀態',
                    'company-foundation-date' => '公司 Foundation日期',
                    'currency-create'         => '新增幣別',
                    'status'                  => '狀態',
                ],
            ],

            'branding' => [
                'title'   => 'Branding',
                'entries' => [
                    'company-logo' => '公司 Logo',
                    'color'        => '顏色',
                ],
            ],

            'contact-information' => [
                'title'   => '聯絡資料',
                'entries' => [
                    'email'  => '電子郵件',
                    'phone'  => '電話號碼',
                    'mobile' => '電話號碼',
                ],
            ],
        ],
    ],
];
