<?php

return [
    'navigation' => [
        'title' => '職位',
        'group' => '職位',
    ],

    'global-search' => [
        'name'            => '職位',
        'department'      => '部門',
        'employment-type' => 'Employment Type',
        'company'         => '公司',
        'created-by'      => '建立者',
    ],

    'form' => [
        'sections' => [
            'employment-information' => [
                'title' => 'Employment Information',

                'fields' => [
                    'job-position-title'         => 'Job Position Title',
                    'job-position-title-tooltip' => 'Enter the official job position title',
                    'department'                 => '部門',
                    'department-modal-title'     => 'Department Create',
                    'job-location'               => 'Job Location',
                    'industry'                   => 'Industry',
                    'company'                    => '公司',
                    'employment-type'            => 'Employment Type',
                    'interviewers'               => 'Interviewers',
                    'recruiter'                  => 'Recruiter',
                    'manager'                    => 'Manager',
                ],
            ],

            'job-description' => [
                'title' => 'Job Description',

                'fields' => [
                    'job-description'  => 'Job Description',
                    'job-requirements' => 'Job Requirements',
                ],
            ],

            'workforce-planning' => [
                'title' => 'Workforce Planning',

                'fields' => [
                    'recruitment-target' => 'Recruitment Target',
                    'date-from'          => 'Date From',
                    'date-to'            => 'Date To',
                    'expected-skills'    => 'Expected Skills',
                    'employment-type'    => 'Employment Type',
                    'status'             => '狀態',
                ],
            ],

            'position-status' => [
                'title' => 'Position Status',

                'fields' => [
                    'status' => '狀態',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'id'                 => 'ID',
            'name'               => '職位',
            'department'         => '部門',
            'job-position'       => '職位',
            'company'            => '公司',
            'expected-employees' => 'Expected Employees',
            'current-employees'  => 'Current Employees',
            'status'             => '狀態',
            'created-by'         => '建立者',
            'created-at'         => '建立時間',
            'updated-at'         => '更新時間',
        ],

        'filters' => [
            'department'      => '部門',
            'employment-type' => 'Employment Type',
            'job-position'    => '職位',
            'company'         => '公司',
            'status'          => '狀態',
            'created-by'      => '建立者',
            'updated-at'      => '更新時間',
            'created-at'      => '建立時間',
        ],

        'groups' => [
            'job-position'    => '職位',
            'company'         => '公司',
            'department'      => '部門',
            'employment-type' => 'Employment Type',
            'created-by'      => '建立者',
            'created-at'      => '建立時間',
            'updated-at'      => '更新時間',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Job Position restored',
                    'body'  => 'The Job Position has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Job Position deleted',
                    'body'  => 'The Job Position has been deleted成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Job Positions restored',
                    'body'  => 'The Job Positions has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Job Positions deleted',
                    'body'  => 'The Job Positions has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Job Positions force deleted',
                    'body'  => 'The Job Positions has been force deleted成功.',
                ],
            ],
        ],

        'empty-state-actions' => [
            'create' => [
                'notification' => [
                    'title' => '職位',
                    'body'  => 'The Job Positions has been created成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'employment-information' => [
                'title' => 'Employment Information',

                'entries' => [
                    'job-position-title' => 'Job Position Title',
                    'department'         => '部門',
                    'company'            => '公司',
                    'employment-type'    => 'Employment Type',
                    'job-location'       => 'Job Location',
                    'industry'           => 'Industry',
                    'manager'            => 'Manager',
                    'recruiter'          => 'Recruiter',
                    'interviewers'       => 'Interviewers',
                ],
            ],
            'job-description' => [
                'title' => 'Job Description',

                'entries' => [
                    'job-description'  => 'Job Description',
                    'job-requirements' => 'Job Requirements',
                ],
            ],
            'work-planning' => [
                'title' => 'Workforce Planning',

                'entries' => [
                    'expected-employees' => 'Expected Employees',
                    'current-employees'  => 'Current Employees',
                    'date-from'          => 'Date From',
                    'date-to'            => 'Date To',
                    'recruitment-target' => 'Recruitment Target',
                ],
            ],
            'position-status' => [
                'title' => 'Position Status',

                'entries' => [
                    'status' => '狀態',
                ],
            ],
        ],
    ],
];
