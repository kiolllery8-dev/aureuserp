<?php

return [
    'model-label' => '聯絡人',
    'plural-model-label' => '聯絡人',

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
                    'tax-id'     => '統一編號',
                    'job-title'  => '職稱',
                    'phone'      => '電話',
                    'mobile'     => '行動電話',
                    'email'      => '電子郵件',
                    'website'    => '網址',
                    'title'      => '標題',
                    'name'       => '名稱',
                    'short-name' => 'Short名稱',
                    'tags'       => '標籤',
                    'color'      => '顏色',
                ],

                'address' => [
                    'title' => '地址',

                    'fields' => [
                        'street1'  => '地址 1',
                        'street2'  => '地址 2',
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
                    'responsible'           => '負責人',
                    'responsible-hint-text' => 'This is internal salesperson responsible for this customer',
                    'company-id'            => '公司 ID',
                    'company-id-hint-text'  => 'The company\'s registry number, used if different from the 稅 ID. It必須唯一 among all partners within the same country.',
                    'reference'             => '參考編號',
                    'industry'              => '產業',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'parent'     => '上層',
        ],

        'groups' => [
            'account-type' => '帳戶類型',
            'parent'       => '上層',
            'title'        => '標題',
            'job-title'    => '職稱',
            'industry'     => '產業',
        ],

        'filters' => [
            'account-type'     => '帳戶類型',
            'name'             => '名稱',
            'email'            => '電子郵件',
            'parent'           => '上層',
            'title'            => '標題',
            'tax-id'           => '統一編號',
            'phone'            => '電話',
            'mobile'           => '行動電話',
            'job-title'        => '職稱',
            'website'          => '網址',
            'company-registry' => '公司 Registry',
            'responsible'      => '負責人',
            'reference'        => '參考編號',
            'parent'           => '上層',
            'creator'          => '建立者',
            'company'          => '公司',
            'industry'         => '產業',
            'industry'         => '產業',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => '聯絡人已更新',
                    'body'  => 'The contact has been已更新成功.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => '聯絡人 restored',
                    'body'  => 'The contact has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => '聯絡人已刪除',
                    'body'  => 'The contact has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => '聯絡人 force已刪除',
                        'body'  => 'The contact has been force已刪除成功.',
                    ],

                    'error' => [
                        'title' => '聯絡人 could not be已刪除',
                        'body'  => 'The contact cannot be已刪除 because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => '聯絡人 restored',
                    'body'  => 'The contacts has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => '聯絡人已刪除',
                    'body'  => 'The contacts has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => '聯絡人 force已刪除',
                        'body'  => 'The contacts has been force已刪除成功.',
                    ],

                    'error' => [
                        'title' => '聯絡人 could not be已刪除',
                        'body'  => 'The contacts cannot be已刪除 because they are currently in use.',
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
                    'tax-id'     => '統一編號',
                    'job-title'  => '職稱',
                    'phone'      => '電話',
                    'mobile'     => '行動電話',
                    'email'      => '電子郵件',
                    'website'    => '網址',
                    'title'      => '標題',
                    'name'       => '名稱',
                    'short-name' => 'Short名稱',
                    'tags'       => '標籤',
                ],

                'address' => [
                    'title' => '地址',

                    'fields' => [
                        'street1'  => '地址 1',
                        'street2'  => '地址 2',
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
                    'responsible'           => '負責人',
                    'responsible-hint-text' => 'This is internal salesperson responsible for this customer',
                    'company-id'            => '公司 ID',
                    'company-id-hint-text'  => 'The registry number of the company. Use it if it is different from the 稅 ID. It必須唯一 across all partners of a same country',
                    'reference'             => '參考編號',
                    'industry'              => '產業',
                ],
            ],
        ],
    ],
];
