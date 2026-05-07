<?php

return [
    'title' => '職位',

    'navigation' => [
        'title' => '職位',
        'group' => '招募',
    ],

    'form' => [
        'sections' => [
            'employment-information' => [
                'title' => 'Employment資料',

                'fields' => [
                    'job-position-title'         => 'Job Position 標題',
                    'job-position-title-tooltip' => 'Enter the official job position title',
                    'department'                 => '部門',
                    'department-modal-title'     => '新增部門',
                    'company-modal-title'        => '新增公司',
                    'job-location'               => 'Job 位置',
                    'industry'                   => '產業',
                    'company'                    => '公司',
                    'employment-type'            => '雇用類型',
                    'recruiter'                  => 'Recruiter',
                    'interviewer'                => 'Interviewer',
                ],
            ],

            'job-description' => [
                'title' => 'Job 描述',

                'fields' => [
                    'job-description'  => 'Job 描述',
                    'job-requirements' => 'Job Requirements',
                ],
            ],

            'workforce-planning' => [
                'title' => 'Workforce Planning',

                'fields' => [
                    'recruitment-target'         => 'Recruitment Target',
                    'date-from'                  => '開始日期',
                    'date-to'                    => '結束日期',
                    'expected-skills'            => 'Expected 技能',
                    'employment-type'            => '雇用類型',
                    'status'                     => '狀態',
                ],
            ],

            'position-status' => [
                'title' => 'Position狀態',

                'fields' => [
                    'status' => '狀態',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'id'                 => '編號',
            'name'               => '職位',
            'department'         => '部門',
            'job-position'       => '職位',
            'company'            => '公司',
            'expected-employees' => 'Expected 員工',
            'current-employees'  => 'Current 員工',
            'status'             => '狀態',
            'created-by'         => '建立者',
            'created-at'         => '建立時間',
            'updated-at'         => '更新時間',
        ],

        'filters' => [
            'department'      => '部門',
            'employment-type' => '雇用類型',
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
            'employment-type' => '雇用類型',
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
                    'title' => 'Job Position已刪除',
                    'body'  => 'The Job Position has been已刪除成功.',
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
                    'title' => 'Job Positions已刪除',
                    'body'  => 'The Job Positions has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Job Positions force已刪除',
                    'body'  => 'The Job Positions has been force已刪除成功.',
                ],
            ],
        ],

        'empty-state-actions' => [
            'create' => [
                'notification' => [
                    'title' => '職位',
                    'body'  => 'The Job Positions has been已建立成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'employment-information' => [
                'title' => 'Employment資料',

                'entries' => [
                    'job-position-title' => 'Job Position 標題',
                    'department'         => '部門',
                    'company'            => '公司',
                    'employment-type'    => '雇用類型',
                    'job-location'       => 'Job 位置',
                    'industry'           => '產業',
                ],
            ],
            'job-description' => [
                'title' => 'Job 描述',

                'entries' => [
                    'job-description'  => 'Job 描述',
                    'job-requirements' => 'Job Requirements',
                ],
            ],
            'work-planning' => [
                'title' => 'Workforce Planning',

                'entries' => [
                    'expected-employees' => 'Expected 員工',
                    'current-employees'  => 'Current 員工',
                    'date-from'          => '開始日期',
                    'date-to'            => '結束日期',
                    'recruitment-target' => 'Recruitment Target',
                ],
            ],
            'position-status' => [
                'title' => 'Position狀態',

                'entries' => [
                    'status' => '狀態',
                ],
            ],
        ],
    ],
];
