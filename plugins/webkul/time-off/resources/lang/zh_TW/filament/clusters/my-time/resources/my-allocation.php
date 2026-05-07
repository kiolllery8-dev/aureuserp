<?php

return [
    'title' => '我的分配',

    'model-label' => '我的分配',

    'navigation' => [
        'title' => '我的分配',
    ],

    'form' => [
        'fields' => [
            'name'                => '名稱',
            'name-placeholder'    => 'Time Off類型 (From validity start to validity end/no limit)',
            'time-off-type'       => '假別',
            'allocation-type'     => '假期分配類型',
            'validity-period'     => '有效期間',
            'date-from'           => '開始日期',
            'date-to'             => '結束日期',
            'date-to-placeholder' => '無限制',
            'allocation'          => '假期額度',
            'allocation-suffix'   => '天數',
            'reason'              => '原因',
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
                    'validate' => '驗證',
                    'approve'  => '核准',
                ],
                'notification' => [
                    'title' => '分配已核准',
                    'body'  => 'The allocation approved has been approved成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => '分配已刪除',
                    'body'  => 'The allocation has been已刪除成功.',
                ],
            ],

            'refused' => [
                'title'        => '拒絕',
                'notification' => [
                    'title' => '分配已拒絕',
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
                'title'   => '分配詳情',
                'entries' => [
                    'name'                => '名稱',
                    'time-off-type'       => '假別',
                    'allocation-type'     => '假期分配類型',
                ],
            ],

            'validity-period' => [
                'title'   => '有效期間',
                'entries' => [
                    'date-from' => '開始日期',
                    'date-to'   => '結束日期',
                    'reason'    => '原因',
                ],
            ],
            'allocation-status' => [
                'title'   => 'Allocation狀態',
                'entries' => [
                    'date-to-placeholder' => '無限制',
                    'allocation'          => '天數',
                    'allocation-value'    => ':days number of days',
                    'state'               => '狀態',
                ],
            ],
        ],
    ],
];
