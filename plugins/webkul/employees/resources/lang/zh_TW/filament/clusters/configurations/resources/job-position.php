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
                    'job-position-title'         => '職位名稱',
                    'job-position-title-tooltip' => '輸入官方職位名稱',
                    'department'                 => '部門',
                    'department-modal-title'     => '新增Department',
                    'company-modal-title'        => '新增Company',
                    'job-location'               => '工作地點',
                    'industry'                   => '產業',
                    'company'                    => '公司',
                    'employment-type'            => '雇用類型',
                    'recruiter'                  => '招募人員',
                    'interviewer'                => '面試官',
                ],
            ],

            'job-description' => [
                'title' => '職位說明',

                'fields' => [
                    'job-description'  => '職位說明',
                    'job-requirements' => '職位需求',
                ],
            ],

            'workforce-planning' => [
                'title' => '人力規劃',

                'fields' => [
                    'recruitment-target'         => '招募目標',
                    'date-from'                  => '開始日期',
                    'date-to'                    => '結束日期',
                    'expected-skills'            => '預期技能',
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
            'expected-employees' => '預期員工數',
            'current-employees'  => '目前員工數',
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
                    'job-position-title' => '職位名稱',
                    'department'         => '部門',
                    'company'            => '公司',
                    'employment-type'    => '雇用類型',
                    'job-location'       => '工作地點',
                    'industry'           => '產業',
                ],
            ],
            'job-description' => [
                'title' => '職位說明',

                'entries' => [
                    'job-description'  => '職位說明',
                    'job-requirements' => '職位需求',
                ],
            ],
            'work-planning' => [
                'title' => '人力規劃',

                'entries' => [
                    'expected-employees' => '預期員工數',
                    'current-employees'  => '目前員工數',
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
