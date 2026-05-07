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
        'degree'     => 'Degree',
    ],

    'form' => [
        'sections' => [
            'basic-information' => [
                'title' => 'Basic Information',

                'fields' => [
                    'full-name' => 'Full Name',
                    'email'     => 'Email Address',
                    'phone'     => 'Phone Number',
                    'linkedin'  => 'LinkedIn Profile',
                    'contact'   => 'Contact',
                ],
            ],

            'additional-details' => [
                'title' => 'Additional Details',

                'fields' => [
                    'company'           => '公司',
                    'degree'            => 'Degree',
                    'tags'              => '標籤',
                    'manager'           => 'Manager',
                    'availability-date' => 'Availability Date',

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
                    'active'     => '啟用中',
                    'evaluation' => 'Evaluation',
                ],
            ],

            'communication' => [
                'title' => 'Communication',

                'fields' => [
                    'cc-email'      => 'CC Email',
                    'email-bounced' => 'Email Bounced',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => 'Full Name',
            'tags'       => '標籤',
            'evaluation' => 'Evaluation',
        ],

        'filters' => [
            'company'      => '公司',
            'partner-name' => 'Contact',
            'degree'       => 'Degree',
            'manager-name' => 'Manager',
        ],

        'groups' => [
            'manager-name' => 'Manager',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Candidate Deleted',
                    'body'  => 'The candidates has been deleted成功.',
                ],
            ],

            'empty-state-actions' => [
                'create' => [
                    'notification' => [
                        'title' => 'Candidate Created',
                        'body'  => 'The candidates has been created成功.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Candidates Deleted',
                    'body'  => 'The candidates has been deleted成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'basic-information' => [
                'title' => 'Basic Information',

                'entries' => [
                    'full-name' => 'Full Name',
                    'email'     => 'Email Address',
                    'phone'     => 'Phone Number',
                    'linkedin'  => 'LinkedIn Profile',
                    'contact'   => 'Contact',
                ],
            ],

            'additional-details' => [
                'title' => 'Additional Details',

                'entries' => [
                    'company'           => '公司',
                    'degree'            => 'Degree',
                    'tags'              => '標籤',
                    'manager'           => 'Manager',
                    'availability-date' => 'Availability Date',

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
                    'active'     => '啟用中',
                    'evaluation' => 'Evaluation',
                ],
            ],

            'communication' => [
                'title' => 'Communication',

                'entries' => [
                    'cc-email'      => 'CC Email',
                    'email-bounced' => 'Email Bounced',
                ],
            ],
        ],
    ],
];
