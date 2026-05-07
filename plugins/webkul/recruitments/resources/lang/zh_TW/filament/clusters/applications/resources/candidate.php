<?php

return [
    'title' => '應徵者',

    'navigation' => [
        'title' => '應徵者',
    ],

    'global-search' => [
        'email-from' => 'Email From',
        'phone'      => '電話',
        'company'    => '公司',
        'degree'     => '學位',
    ],

    'form' => [
        'sections' => [
            'basic-information' => [
                'title' => 'Basic資料',

                'fields' => [
                    'full-name' => '姓名',
                    'email'     => '電子郵件',
                    'phone'     => '電話號碼',
                    'linkedin'  => 'LinkedIn 檔案',
                    'contact'   => '聯絡人',
                ],
            ],

            'additional-details' => [
                'title' => '額外詳情',

                'fields' => [
                    'company'           => '公司',
                    'degree'            => '學位',
                    'tags'              => '標籤',
                    'manager'           => '主管',
                    'availability-date' => 'Availability日期',

                    'priority-options' => [
                        'low'    => '低',
                        'medium' => '中',
                        'high'   => '高',
                    ],
                ],
            ],

            'status-and-evaluation' => [
                'title' => '狀態',

                'fields' => [
                    'active'     => '啟用',
                    'evaluation' => '評估',
                ],
            ],

            'communication' => [
                'title' => '溝通',

                'fields' => [
                    'cc-email'      => 'CC Email',
                    'email-bounced' => 'Email Bounced',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => '姓名',
            'tags'       => '標籤',
            'evaluation' => '評估',
        ],

        'filters' => [
            'company'      => '公司',
            'partner-name' => '聯絡人',
            'degree'       => '學位',
            'manager-name' => '主管',
        ],

        'groups' => [
            'manager-name' => '主管',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Candidate Deleted',
                    'body'  => 'The candidates has been已刪除成功.',
                ],
            ],

            'empty-state-actions' => [
                'create' => [
                    'notification' => [
                        'title' => 'Candidate Created',
                        'body'  => 'The candidates has been已建立成功.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Candidates Deleted',
                    'body'  => 'The candidates has been已刪除成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'basic-information' => [
                'title' => 'Basic資料',

                'entries' => [
                    'full-name' => '姓名',
                    'email'     => '電子郵件',
                    'phone'     => '電話號碼',
                    'linkedin'  => 'LinkedIn 檔案',
                    'contact'   => '聯絡人',
                ],
            ],

            'additional-details' => [
                'title' => '額外詳情',

                'entries' => [
                    'company'           => '公司',
                    'degree'            => '學位',
                    'tags'              => '標籤',
                    'manager'           => '主管',
                    'availability-date' => 'Availability日期',

                    'priority-options' => [
                        'low'    => '低',
                        'medium' => '中',
                        'high'   => '高',
                    ],
                ],
            ],

            'status-and-evaluation' => [
                'title' => '狀態',

                'entries' => [
                    'active'     => '啟用',
                    'evaluation' => '評估',
                ],
            ],

            'communication' => [
                'title' => '溝通',

                'entries' => [
                    'cc-email'      => 'CC Email',
                    'email-bounced' => 'Email Bounced',
                ],
            ],
        ],
    ],
];
