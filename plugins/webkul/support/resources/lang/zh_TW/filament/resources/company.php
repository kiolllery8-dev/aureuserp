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
                'title'  => 'Company Information',
                'fields' => [
                    'name'                  => 'Company Name',
                    'registration-number'   => 'Registration Number',
                    'company-id'            => 'Company ID',
                    'tax-id'                => 'Tax ID',
                    'tax-id-tooltip'        => 'The Tax ID is a unique identifier for your company.',
                    'website'               => '網址',
                ],
            ],

            'address-information' => [
                'title'  => 'Address Information',

                'fields' => [
                    'street1'        => 'Street 1',
                    'street2'        => 'Street 2',
                    'city'           => '城市',
                    'zipcode'        => '郵遞區號',
                    'country'        => '國家',
                    'currency-name'  => 'Currency Name',
                    'phone-code'     => 'Phone Code',
                    'code'           => '代碼',
                    'country-name'   => 'Country Name',
                    'state-required' => 'State Required',
                    'zip-required'   => 'Zip Required',
                    'create-country' => 'Create Country',
                    'state'          => '狀態',
                    'state-name'     => 'State Name',
                    'state-code'     => 'State Code',
                    'create-state'   => 'Create State',
                ],
            ],

            'additional-information' => [
                'title' => 'Additional Information',

                'fields' => [
                    'default-currency'        => 'Default Currency',
                    'currency-name'           => 'Currency Name',
                    'currency-full-name'      => 'Currency Full Name',
                    'currency-symbol'         => 'Currency Symbol',
                    'currency-iso-numeric'    => 'Currency ISO Numeric',
                    'currency-decimal-places' => 'Currency Decimal Places',
                    'currency-rounding'       => 'Currency Rounding',
                    'currency-status'         => 'Currency Status',
                    'company-foundation-date' => 'Company Foundation Date',
                    'currency-create'         => 'Create Currency',
                    'status'                  => '狀態',
                ],
            ],

            'branding' => [
                'title'  => 'Branding',
                'fields' => [
                    'company-logo' => 'Company Logo',
                    'color'        => 'Color',
                ],
            ],

            'contact-information' => [
                'title'  => 'Contact Information',
                'fields' => [
                    'email'  => 'Email Address',
                    'phone'  => 'Phone Number',
                    'mobile' => 'Phone Number',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'logo'                 => 'Logo',
            'company-name'         => 'Company Name',
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
            'company-name' => 'Company Name',
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
                    'title' => 'Company edited',
                    'body'  => 'The company has been edited成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Company deleted',
                    'body'  => 'The company has been deleted成功.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Company restored',
                    'body'  => 'The company has been restored成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Companies restored',
                    'body'  => 'The companies has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Companies deleted',
                    'body'  => 'The companies has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Companies force deleted',
                    'body'  => 'The companies has been force deleted成功.',
                ],
            ],
        ],

        'empty-state-actions' => [
            'create' => [
                'notification' => [
                    'title' => 'Companies created',
                    'body'  => 'The companies has been created成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'company-information' => [
                'title'   => 'Company Information',
                'entries' => [
                    'name'                  => 'Company Name',
                    'registration-number'   => 'Registration Number',
                    'company-id'            => 'Company ID',
                    'tax-id'                => 'Tax ID',
                    'tax-id-tooltip'        => 'The Tax ID is a unique identifier for your company.',
                    'website'               => '網址',
                ],
            ],

            'address-information' => [
                'title'  => 'Address Information',

                'entries' => [
                    'street1'        => 'Street 1',
                    'street2'        => 'Street 2',
                    'city'           => '城市',
                    'zipcode'        => '郵遞區號',
                    'country'        => '國家',
                    'currency-name'  => 'Currency Name',
                    'phone-code'     => 'Phone Code',
                    'code'           => '代碼',
                    'country-name'   => 'Country Name',
                    'state-required' => 'State Required',
                    'zip-required'   => 'Zip Required',
                    'create-country' => 'Create Country',
                    'state'          => '狀態',
                    'state-name'     => 'State Name',
                    'state-code'     => 'State Code',
                    'create-state'   => 'Create State',
                ],
            ],

            'additional-information' => [
                'title' => 'Additional Information',

                'entries' => [
                    'default-currency'        => 'Default Currency',
                    'currency-name'           => 'Currency Name',
                    'currency-full-name'      => 'Currency Full Name',
                    'currency-symbol'         => 'Currency Symbol',
                    'currency-iso-numeric'    => 'Currency ISO Numeric',
                    'currency-decimal-places' => 'Currency Decimal Places',
                    'currency-rounding'       => 'Currency Rounding',
                    'currency-status'         => 'Currency Status',
                    'company-foundation-date' => 'Company Foundation Date',
                    'currency-create'         => 'Create Currency',
                    'status'                  => '狀態',
                ],
            ],

            'branding' => [
                'title'   => 'Branding',
                'entries' => [
                    'company-logo' => 'Company Logo',
                    'color'        => 'Color',
                ],
            ],

            'contact-information' => [
                'title'   => 'Contact Information',
                'entries' => [
                    'email'  => 'Email Address',
                    'phone'  => 'Phone Number',
                    'mobile' => 'Phone Number',
                ],
            ],
        ],
    ],
];
