<?php

return [
    'form' => [
        'tabs' => [
            'general-information' => [
                'title' => '一般資料',

                'sections' => [
                    'branch-information' => [
                        'title' => 'Branch Information',

                        'fields' => [
                            'company-name'                => 'Company Name',
                            'registration-number'         => 'Registration Number',
                            'tax-id'                      => 'Tax ID',
                            'tax-id-tooltip'              => 'The Tax ID is a unique identifier for your company.',
                            'color'                       => 'Color',
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
                'title' => 'Address Information',

                'sections' => [
                    'address-information' => [
                        'title' => 'Address Information',

                        'fields' => [
                            'street1'                => 'Street 1',
                            'street2'                => 'Street 2',
                            'city'                   => '城市',
                            'zip'                    => '郵遞區號',
                            'country'                => '國家',
                            'country-currency-name'  => 'Currency Name',
                            'country-phone-code'     => 'Phone Code',
                            'country-code'           => '代碼',
                            'country-name'           => 'Country Name',
                            'country-state-required' => 'State Required',
                            'country-zip-required'   => 'Zip Required',
                            'country-create'         => 'Create Country',
                            'state'                  => '狀態',
                            'state-name'             => 'State Name',
                            'state-code'             => 'State Code',
                            'zip-code'               => '郵遞區號',
                            'state-create'           => 'Create State',
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
                            'currency-create'         => 'Create Currency',
                            'company-foundation-date' => 'Company Foundation Date',
                            'status'                  => '狀態',
                        ],
                    ],
                ],
            ],

            'contact-information' => [
                'title' => 'Contact Information',

                'sections' => [
                    'contact-information' => [
                        'title' => 'Contact Information',

                        'fields' => [
                            'email-address' => 'Email Address',
                            'phone-number'  => 'Phone Number',
                            'mobile-number' => 'Phone Number',
                        ],
                    ],
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'logo'                 => 'Logo',
            'company-name'         => 'Branch Name',
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
            'company-name' => 'Branch Name',
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
                    'title' => 'Branch created',
                    'body'  => 'The branch has been created成功.',
                ],
            ],
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Branch updated',
                    'body'  => 'The branch has been updated成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Branch deleted',
                    'body'  => 'The branch has been deleted成功.',
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
                    'title' => 'Branches deleted',
                    'body'  => 'The branches has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Branches force deleted',
                    'body'  => 'The branches has been force deleted成功.',
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
                        'title' => 'Branch Information',

                        'entries' => [
                            'company-name'                => 'Company Name',
                            'registration-number'         => 'Registration Number',
                            'registration-number-tooltip' => 'The Tax ID is a unique identifier for your company.',
                            'color'                       => 'Color',
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
                'title' => 'Address Information',

                'sections' => [
                    'address-information' => [
                        'title' => 'Address Information',

                        'entries' => [
                            'street1'                => 'Street 1',
                            'street2'                => 'Street 2',
                            'city'                   => '城市',
                            'zip'                    => '郵遞區號',
                            'country'                => '國家',
                            'country-currency-name'  => 'Currency Name',
                            'country-phone-code'     => 'Phone Code',
                            'country-code'           => '代碼',
                            'country-name'           => 'Country Name',
                            'country-state-required' => 'State Required',
                            'country-zip-required'   => 'Zip Required',
                            'country-create'         => 'Create Country',
                            'state'                  => '狀態',
                            'state-name'             => 'State Name',
                            'state-code'             => 'State Code',
                            'zip-code'               => '郵遞區號',
                            'state-create'           => 'Create State',
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
                            'currency-create'         => 'Create Currency',
                            'company-foundation-date' => 'Company Foundation Date',
                            'status'                  => '狀態',
                        ],
                    ],
                ],
            ],

            'contact-information' => [
                'title' => 'Contact Information',

                'sections' => [
                    'contact-information' => [
                        'title' => 'Contact Information',

                        'entries' => [
                            'email-address' => 'Email Address',
                            'phone-number'  => 'Phone Number',
                            'mobile-number' => 'Phone Number',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
