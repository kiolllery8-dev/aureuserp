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
                    'registration-number'   => '登記號碼',
                    'company-id'            => '公司識別碼',
                    'tax-id'                => '統一編號',
                    'tax-id-tooltip'        => '稅號是貴公司的唯一識別碼。',
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
                    'zip-required'   => '需要郵遞區號',
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
                    'currency-full-name'      => 'Currency Full名稱',
                    'currency-symbol'         => '幣別符號',
                    'currency-iso-numeric'    => '貨幣 ISO 數字代碼',
                    'currency-decimal-places' => '貨幣小數位數',
                    'currency-rounding'       => '貨幣進位',
                    'currency-status'         => 'Currency狀態',
                    'company-foundation-date' => 'Company Foundation日期',
                    'currency-create'         => '新增幣別',
                    'status'                  => '狀態',
                ],
            ],

            'branding' => [
                'title'  => '品牌',
                'fields' => [
                    'company-logo' => '公司標誌',
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
            'logo'                 => '標誌',
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
                    'title' => '公司已編輯',
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
                    'title' => '公司已還原',
                    'body'  => 'The company has been restored成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => '公司已還原',
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
                    'title' => 'Companies force已刪除',
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
                    'registration-number'   => '登記號碼',
                    'company-id'            => '公司識別碼',
                    'tax-id'                => '統一編號',
                    'tax-id-tooltip'        => '稅號是貴公司的唯一識別碼。',
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
                    'zip-required'   => '需要郵遞區號',
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
                    'currency-full-name'      => 'Currency Full名稱',
                    'currency-symbol'         => '幣別符號',
                    'currency-iso-numeric'    => '貨幣 ISO 數字代碼',
                    'currency-decimal-places' => '貨幣小數位數',
                    'currency-rounding'       => '貨幣進位',
                    'currency-status'         => 'Currency狀態',
                    'company-foundation-date' => 'Company Foundation日期',
                    'currency-create'         => '新增幣別',
                    'status'                  => '狀態',
                ],
            ],

            'branding' => [
                'title'   => '品牌',
                'entries' => [
                    'company-logo' => '公司標誌',
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
