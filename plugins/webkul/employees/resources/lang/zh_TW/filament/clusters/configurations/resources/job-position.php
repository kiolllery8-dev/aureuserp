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
                    'job-position-title'         => 'Job Position Title',
                    'job-position-title-tooltip' => '輸入官方職位名稱',
                    'department'                 => '部門',
                    'department-modal-title'     => '新增Department',
                    'company-modal-title'        => '新增Company',
                    'job-location'               => 'Job Location',
                    'industry'                   => '產業',
                    'company'                    => '公司',
                    'employment-type'            => '雇用類型',
                    'recruiter'                  => '招募人員',
                    'interviewer'                => '面試官',
                ],
            ],

            'job-description' => [
                'title' => 'Job Description',

                'fields' => [
                    'job-description'  => 'Job Description',
                    'job-requirements' => '職位需求',
                ],
            ],

            'workforce-planning' => [
                'title' => '人力規劃',

                'fields' => [
                    'recruitment-target'         => '招募目標',
                    'date-from'                  => '開始日期',
                    'date-to'                    => '結束日期',
                    'expected-skills'            => 'Expected Skills',
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
            'expected-employees' => 'Expected Employees',
            'current-employees'  => 'Current Employees',
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
                    'title' => '職位已還原',
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
                    'title' => '職位已還原',
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
                    'job-position-title' => 'Job Position Title',
                    'department'         => '部門',
                    'company'            => '公司',
                    'employment-type'    => '雇用類型',
                    'job-location'       => 'Job Location',
                    'industry'           => '產業',
                ],
            ],
            'job-description' => [
                'title' => 'Job Description',

                'entries' => [
                    'job-description'  => 'Job Description',
                    'job-requirements' => '職位需求',
                ],
            ],
            'work-planning' => [
                'title' => '人力規劃',

                'entries' => [
                    'expected-employees' => 'Expected Employees',
                    'current-employees'  => 'Current Employees',
                    'date-from'          => '開始日期',
                    'date-to'            => '結束日期',
                    'recruitment-target' => '招募目標',
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
