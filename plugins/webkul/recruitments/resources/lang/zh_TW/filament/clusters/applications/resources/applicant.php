<?php

return [
    'title' => '應徵者',

    'navigation' => [
        'title' => '應徵者',
    ],

    'global-search' => [
        'department' => '部門',
        'work-email' => 'Work Email',
        'work-phone' => 'Work Phone',
    ],

    'form' => [
        'sections' => [
            'general-information' => [
                'title' => '一般資料',

                'fields' => [
                    'evaluation-good'           => 'Evaluation: Good',
                    'evaluation-very-good'      => 'Evaluation: Very Good',
                    'evaluation-very-excellent' => 'Evaluation: Very Excellent',
                    'hired'                     => 'Hired',
                    'candidate-name'            => 'Candidate name',
                    'email'                     => 'Emails',
                    'phone'                     => '電話',
                    'linkedin-profile'          => 'Linkedin Profile',
                    'recruiter'                 => 'Recruiter',
                    'interviewer'               => 'Interviewer',
                    'tags'                      => '標籤',
                    'notes'                     => '備註',
                    'hired-date'                => 'Hired日期',
                    'job-position'              => '職位',
                ],
            ],

            'education-and-availability' => [
                'title' => 'Education & Availability',

                'fields' => [
                    'degree'            => 'Degree',
                    'availability-date' => 'Availability日期',
                ],
            ],

            'department' => [
                'title' => '部門',
            ],

            'salary' => [
                'title' => 'Expected & Proposed Salary',

                'fields' => [
                    'expected-salary'       => 'Expected Salary',
                    'salary-proposed-extra' => 'Other Benefit',
                    'proposed-salary'       => 'Proposed Salary',
                    'salary-expected-extra' => 'Other Benefit',
                ],
            ],

            'source-and-medium' => [
                'title' => 'Source & Medium',

                'fields' => [
                    'source' => '來源',
                    'medium' => '中',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'partner-name'       => 'Partner名稱',
            'applied-on'         => 'Applied On',
            'job-position'       => '職位',
            'stage'              => '階段',
            'candidate-name'     => 'Candidate名稱',
            'evaluation'         => 'Evaluation',
            'application-status' => 'Application狀態',
            'tags'               => '標籤',
            'refuse-reason'      => 'Refuse Reason',
            'email'              => '電子郵件',
            'recruiter'          => 'Recruiter',
            'interviewer'        => 'Interviewer',
            'candidate-phone'    => '電話',
            'medium'             => '中',
            'source'             => '來源',
            'salary-expected'    => 'Expected Salary',
            'availability-date'  => 'Availability日期',
        ],

        'filters' => [
            'source'                  => '來源',
            'medium'                  => '中',
            'candidate'               => '應徵者',
            'priority'                => '優先順序',
            'salary-proposed-extra'   => 'Salary Proposed Extra',
            'salary-expected-extra'   => 'Salary Expected Extra',
            'applicant-notes'         => 'Applicant Notes',
            'create-date'             => 'Applied On',
            'date-closed'             => 'Hired日期',
            'date-last-stage-updated' => 'Last Stage Updated',
            'stage'                   => '階段',
            'job-position'            => '職位',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Applicant Deleted',
                    'body'  => 'The applicant was成功已刪除.',
                ],
            ],
        ],

        'groups' => [
            'stage'          => '階段',
            'job-position'   => '職位',
            'candidate-name' => 'Candidate名稱',
            'responsible'    => '負責人',
            'creation-date'  => 'Creation日期',
            'hired-date'     => 'Hired日期',
            'last-stage'     => 'Last Stage',
            'refuse-reason'  => 'Refuse Reason',
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Employees已刪除',
                    'body'  => 'The employees has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Employees已刪除',
                    'body'  => 'The employees has been已刪除成功.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Employees restored',
                    'body'  => 'The employees has been restored成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general-information' => [
                'title' => '一般資料',

                'entries' => [
                    'evaluation-good'           => 'Evaluation: Good',
                    'evaluation-very-good'      => 'Evaluation: Very Good',
                    'evaluation-very-excellent' => 'Evaluation: Very Excellent',
                    'hired'                     => 'Hired',
                    'candidate-name'            => 'Candidate name',
                    'email'                     => 'Emails',
                    'phone'                     => '電話',
                    'linkedin-profile'          => 'Linkedin Profile',
                    'recruiter'                 => 'Recruiter',
                    'interviewer'               => 'Interviewer',
                    'tags'                      => '標籤',
                    'notes'                     => '備註',
                    'job-position'              => '職位',
                ],
            ],

            'education-and-availability' => [
                'title' => 'Education & Availability',

                'entries' => [
                    'degree'            => 'Degree',
                    'availability-date' => 'Availability日期',
                ],
            ],

            'department' => [
                'title' => '部門',
            ],

            'salary' => [
                'title' => 'Expected & Proposed Salary',

                'entries' => [
                    'expected-salary'       => 'Expected Salary',
                    'salary-proposed-extra' => 'Other Benefit',
                    'proposed-salary'       => 'Proposed Salary',
                    'salary-expected-extra' => 'Other Benefit',
                ],
            ],

            'source-and-medium' => [
                'title' => 'Source & Medium',

                'entries' => [
                    'source' => '來源',
                    'medium' => '中',
                ],
            ],
        ],
    ],
];
