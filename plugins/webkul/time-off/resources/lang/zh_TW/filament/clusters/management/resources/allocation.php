<?php

return [
    'title' => '假期額度',

    'model-label' => '假期額度',

    'navigation' => [
        'title' => '假期額度',
    ],

    'global-search' => [
        'employee'      => 'Employee',
        'time-off-type' => 'Time Off Type',
        'date-from'     => 'Date From',
        'date-to'       => 'Date To',
    ],

    'form' => [
        'fields' => [
            'name'                => '名稱',
            'name-placeholder'    => 'Time Off Type (From validity start to validity end/no limit)',
            'time-off-type'       => 'Time Off Type',
            'employee-name'       => 'Employee Name',
            'allocation-type'     => 'Allocation Type',
            'validity-period'     => 'Validity Period',
            'date-from'           => 'Date From',
            'date-to'             => 'Date To',
            'date-to-placeholder' => 'No Limit',
            'allocation'          => '假期額度',
            'allocation-suffix'   => 'Number of Days',
            'reason'              => 'Reason',
        ],
    ],

    'table' => [
        'columns' => [
            'employee-name'   => 'Employee',
            'time-off-type'   => 'Time Off Type',
            'amount'          => '金額',
            'allocation-type' => 'Allocation Type',
            'status'          => '狀態',
        ],

        'groups' => [
            'time-off-type'   => 'Time Off Type',
            'employee-name'   => 'Employee Name',
            'allocation-type' => 'Allocation Type',
            'status'          => '狀態',
            'start-date'      => '開始日期',
        ],

        'actions' => [
            'approve' => [
                'title' => [
                    'validate' => 'Validate',
                    'approve'  => '核准',
                ],
                'notification' => [
                    'title' => 'Allocation approved approved',
                    'body'  => 'The allocation approved has been approved成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Allocation deleted',
                    'body'  => 'The allocation has been deleted成功.',
                ],
            ],

            'refused' => [
                'title'        => 'Refuse',
                'notification' => [
                    'title' => 'Allocation refused',
                    'body'  => 'The allocation has been refused成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Allocations deleted',
                    'body'  => 'The allocations has been deleted成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'allocation-details' => [
                'title'   => 'Allocation Details',
                'entries' => [
                    'name'                => '名稱',
                    'time-off-type'       => 'Time Off Type',
                    'allocation-type'     => 'Allocation Type',
                ],
            ],

            'validity-period' => [
                'title'   => 'Validity Period',
                'entries' => [
                    'date-from' => 'Date From',
                    'date-to'   => 'Date To',
                    'reason'    => 'Reason',
                ],
            ],
            'allocation-status' => [
                'title'   => 'Allocation Status',
                'entries' => [
                    'date-to-placeholder' => 'No Limit',
                    'allocation'          => 'Number of Day(s)',
                    'allocation-value'    => ':days number of days',
                    'state'               => '狀態',
                ],
            ],
        ],
    ],
];
