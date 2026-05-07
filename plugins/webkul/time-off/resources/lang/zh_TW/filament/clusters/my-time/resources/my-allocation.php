<?php

return [
    'title' => 'My Allocation',

    'model-label' => 'My Allocation',

    'navigation' => [
        'title' => 'My Allocation',
    ],

    'form' => [
        'fields' => [
            'name'                => '名稱',
            'name-placeholder'    => '請假類型 (From validity start to validity end/no limit)',
            'time-off-type'       => '假別',
            'allocation-type'     => '假期分配類型',
            'validity-period'     => 'Validity Period',
            'date-from'           => '開始日期',
            'date-to'             => '結束日期',
            'date-to-placeholder' => 'No Limit',
            'allocation'          => '假期額度',
            'allocation-suffix'   => '編號 of 天數',
            'reason'              => 'Reason',
        ],
    ],

    'table' => [
        'columns' => [
            'time-off-type'   => '假別',
            'amount'          => '金額',
            'allocation-type' => '假期分配類型',
            'status'          => '狀態',
        ],

        'groups' => [
            'time-off-type'   => '假別',
            'employee-name'   => '員工姓名',
            'allocation-type' => '假期分配類型',
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
                    'title' => 'Allocation已刪除',
                    'body'  => 'The allocation has been已刪除成功.',
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
                    'title' => 'Allocations已刪除',
                    'body'  => 'The allocations has been已刪除成功.',
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
                    'time-off-type'       => '假別',
                    'allocation-type'     => '假期分配類型',
                ],
            ],

            'validity-period' => [
                'title'   => 'Validity Period',
                'entries' => [
                    'date-from' => '開始日期',
                    'date-to'   => '結束日期',
                    'reason'    => 'Reason',
                ],
            ],
            'allocation-status' => [
                'title'   => 'Allocation狀態',
                'entries' => [
                    'date-to-placeholder' => 'No Limit',
                    'allocation'          => '編號 of Day(s)',
                    'allocation-value'    => ':days number of days',
                    'state'               => '狀態',
                ],
            ],
        ],
    ],
];
