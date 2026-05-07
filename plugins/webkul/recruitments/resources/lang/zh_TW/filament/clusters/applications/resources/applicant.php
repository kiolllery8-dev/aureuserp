<?php

return [
    'title' => '應徵者',

    'navigation' => [
        'title' => '應徵者',
    ],

    'global-search' => [
        'department' => '部門',
        'work-email' => '工作電子郵件',
        'work-phone' => '工作電話',
    ],

    'form' => [
        'sections' => [
            'general-information' => [
                'title' => '一般資料',

                'fields' => [
                    'evaluation-good'           => '評估：好',
                    'evaluation-very-good'      => '評估：很好',
                    'evaluation-very-excellent' => '評估：極優',
                    'hired'                     => '已錄用',
                    'candidate-name'            => '候選人姓名',
                    'email'                     => 'Emails',
                    'phone'                     => '電話',
                    'linkedin-profile'          => 'LinkedIn 檔案',
                    'recruiter'                 => '招募人員',
                    'interviewer'               => '面試官',
                    'tags'                      => '標籤',
                    'notes'                     => '備註',
                    'hired-date'                => 'Hired日期',
                    'job-position'              => '職位',
                ],
            ],

            'education-and-availability' => [
                'title' => '學歷與可工作狀態',

                'fields' => [
                    'degree'            => '學位',
                    'availability-date' => 'Availability日期',
                ],
            ],

            'department' => [
                'title' => '部門',
            ],

            'salary' => [
                'title' => '預期與提議薪資',

                'fields' => [
                    'expected-salary'       => '預期薪資',
                    'salary-proposed-extra' => '其他福利',
                    'proposed-salary'       => '提議薪資',
                    'salary-expected-extra' => '其他福利',
                ],
            ],

            'source-and-medium' => [
                'title' => '來源與媒介',

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
            'applied-on'         => '申請日期',
            'job-position'       => '職位',
            'stage'              => '階段',
            'candidate-name'     => '候選人姓名',
            'evaluation'         => '評估',
            'application-status' => 'Application狀態',
            'tags'               => '標籤',
            'refuse-reason'      => '拒絕原因',
            'email'              => '電子郵件',
            'recruiter'          => '招募人員',
            'interviewer'        => '面試官',
            'candidate-phone'    => '電話',
            'medium'             => '中',
            'source'             => '來源',
            'salary-expected'    => '預期薪資',
            'availability-date'  => 'Availability日期',
        ],

        'filters' => [
            'source'                  => '來源',
            'medium'                  => '中',
            'candidate'               => '應徵者',
            'priority'                => '優先順序',
            'salary-proposed-extra'   => '額外提議薪資',
            'salary-expected-extra'   => '額外預期薪資',
            'applicant-notes'         => '應徵者備註',
            'create-date'             => '申請日期',
            'date-closed'             => 'Hired日期',
            'date-last-stage-updated' => '最後階段更新',
            'stage'                   => '階段',
            'job-position'            => '職位',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => '應徵者已刪除',
                    'body'  => 'The applicant was成功已刪除.',
                ],
            ],
        ],

        'groups' => [
            'stage'          => '階段',
            'job-position'   => '職位',
            'candidate-name' => '候選人姓名',
            'responsible'    => '負責人',
            'creation-date'  => 'Creation日期',
            'hired-date'     => 'Hired日期',
            'last-stage'     => '最後階段',
            'refuse-reason'  => '拒絕原因',
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
                    'title' => '員工已還原',
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
                    'evaluation-good'           => '評估：好',
                    'evaluation-very-good'      => '評估：很好',
                    'evaluation-very-excellent' => '評估：極優',
                    'hired'                     => '已錄用',
                    'candidate-name'            => '候選人姓名',
                    'email'                     => 'Emails',
                    'phone'                     => '電話',
                    'linkedin-profile'          => 'LinkedIn 檔案',
                    'recruiter'                 => '招募人員',
                    'interviewer'               => '面試官',
                    'tags'                      => '標籤',
                    'notes'                     => '備註',
                    'job-position'              => '職位',
                ],
            ],

            'education-and-availability' => [
                'title' => '學歷與可工作狀態',

                'entries' => [
                    'degree'            => '學位',
                    'availability-date' => 'Availability日期',
                ],
            ],

            'department' => [
                'title' => '部門',
            ],

            'salary' => [
                'title' => '預期與提議薪資',

                'entries' => [
                    'expected-salary'       => '預期薪資',
                    'salary-proposed-extra' => '其他福利',
                    'proposed-salary'       => '提議薪資',
                    'salary-expected-extra' => '其他福利',
                ],
            ],

            'source-and-medium' => [
                'title' => '來源與媒介',

                'entries' => [
                    'source' => '來源',
                    'medium' => '中',
                ],
            ],
        ],
    ],
];
