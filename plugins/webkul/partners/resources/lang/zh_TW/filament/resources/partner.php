<?php

return [
    'global-search' => [
        'email' => '電子郵件',
        'phone' => '電話',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => '一般',

                'fields' => [
                    'company'    => '公司',
                    'avatar'     => 'Avatar',
                    'tax-id'     => 'Tax ID',
                    'job-title'  => 'Job Title',
                    'phone'      => '電話',
                    'mobile'     => '行動電話',
                    'email'      => '電子郵件',
                    'website'    => '網址',
                    'title'      => '標題',
                    'name'       => '名稱',
                    'short-name' => 'Short Name',
                    'tags'       => '標籤',
                    'color'      => 'Color',
                ],

                'address' => [
                    'title' => '地址',

                    'fields' => [
                        'street1'  => 'Street 1',
                        'street2'  => 'Street 2',
                        'city'     => '城市',
                        'zip'      => '郵遞區號',
                        'state'    => '狀態',
                        'country'  => '國家',
                        'name'     => '名稱',
                        'code'     => '代碼',
                    ],
                ],
            ],
        ],

        'tabs' => [
            'sales-purchase' => [
                'title' => 'Sales and Purchases',

                'fields' => [
                    'responsible'           => 'Responsible',
                    'responsible-hint-text' => 'This is internal salesperson responsible for this customer',
                    'company-id'            => 'Company ID',
                    'company-id-hint-text'  => 'The company\'s registry number, used if different from the Tax ID. It must be unique among all partners within the same country.',
                    'reference'             => '參考',
                    'industry'              => 'Industry',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'parent'     => 'Parent',
        ],

        'groups' => [
            'account-type' => 'Account Type',
            'parent'       => 'Parent',
            'title'        => '標題',
            'job-title'    => 'Job Title',
            'industry'     => 'Industry',
        ],

        'filters' => [
            'account-type'     => 'Account Type',
            'name'             => '名稱',
            'email'            => '電子郵件',
            'parent'           => 'Parent',
            'title'            => '標題',
            'tax-id'           => 'Tax ID',
            'phone'            => '電話',
            'mobile'           => '行動電話',
            'job-title'        => 'Job Title',
            'website'          => '網址',
            'company-registry' => 'Company Registry',
            'responsible'      => 'Responsible',
            'reference'        => '參考',
            'parent'           => 'Parent',
            'creator'          => 'Creator',
            'company'          => '公司',
            'industry'         => 'Industry',
            'industry'         => 'Industry',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Contact updated',
                    'body'  => 'The contact has been updated成功.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Contact restored',
                    'body'  => 'The contact has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Contact deleted',
                    'body'  => 'The contact has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Contact force deleted',
                        'body'  => 'The contact has been force deleted成功.',
                    ],

                    'error' => [
                        'title' => 'Contact could not be deleted',
                        'body'  => 'The contact cannot be deleted because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Contacts restored',
                    'body'  => 'The contacts has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Contacts deleted',
                    'body'  => 'The contacts has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Contacts force deleted',
                        'body'  => 'The contacts has been force deleted成功.',
                    ],

                    'error' => [
                        'title' => 'Contacts could not be deleted',
                        'body'  => 'The contacts cannot be deleted because they are currently in use.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => '一般',

                'fields' => [
                    'company'    => '公司',
                    'avatar'     => 'Avatar',
                    'tax-id'     => 'Tax ID',
                    'job-title'  => 'Job Title',
                    'phone'      => '電話',
                    'mobile'     => '行動電話',
                    'email'      => '電子郵件',
                    'website'    => '網址',
                    'title'      => '標題',
                    'name'       => '名稱',
                    'short-name' => 'Short Name',
                    'tags'       => '標籤',
                ],

                'address' => [
                    'title' => '地址',

                    'fields' => [
                        'street1'  => 'Street 1',
                        'street2'  => 'Street 2',
                        'city'     => '城市',
                        'zip'      => '郵遞區號',
                        'state'    => '狀態',
                        'country'  => '國家',
                        'name'     => '名稱',
                        'code'     => '代碼',
                    ],
                ],
            ],
        ],

        'tabs' => [
            'sales-purchase' => [
                'title' => 'Sales and Purchases',

                'fields' => [
                    'responsible'           => 'Responsible',
                    'responsible-hint-text' => 'This is internal salesperson responsible for this customer',
                    'company-id'            => 'Company ID',
                    'company-id-hint-text'  => 'The registry number of the company. Use it if it is different from the Tax ID. It must be unique across all partners of a same country',
                    'reference'             => '參考',
                    'industry'              => 'Industry',
                ],
            ],
        ],
    ],
];
