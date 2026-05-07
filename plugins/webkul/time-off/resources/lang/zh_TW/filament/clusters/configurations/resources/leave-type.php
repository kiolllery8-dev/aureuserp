<?php

return [
    'title'      => '請假類別',
    'navigation' => [
        'title' => '請假類別',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => '一般資料',
                'fields' => [
                    'name'                => '標題',
                    'approval'            => '核准',
                    'requires-allocation' => '需要分配',
                    'employee-requests'   => '員工請求',
                    'display-option'      => '顯示選項',
                ],
            ],
            'display-option' => [
                'title'  => '顯示選項',
                'fields' => [
                    'color' => '顏色',
                ],
            ],
            'configuration' => [
                'title' => '組態設定',

                'fields' => [
                    'notified-time-off-officers'          => 'Notified時間 Off Officers',
                    'take-time-off-in'                    => 'Take時間 Off In',
                    'public-holiday-included'             => '包含國定假日',
                    'allow-to-attach-supporting-document' => '允許附加證明文件',
                    'show-on-dashboard'                   => '顯示於儀表板',
                    'allow-negative-cap'                  => '允許負值',
                    'kind-off-time'                       => 'Kind of時間',
                    'max-negative-cap'                    => '最大負值上限',
                    'kind-of-time'                        => 'Kind of時間 Off',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'                      => '名稱',
            'company-name'              => '公司',
            'color'                     => '顏色',
            'notified-time-officers'    => 'Notified時間 Officers',
            'time-off-approval'         => '請假核准',
            'requires-allocation'       => '需要分配',
            'allocation-approval'       => '分配核准',
            'employee-request'          => '員工請求',
        ],

        'filters' => [
            'name'                => '名稱',
            'company-name'        => '公司',
            'time-off-approval'   => '請假核准',
            'requires-allocation' => '需要分配',
            'time-type'           => 'Time類型',
            'request-unit'        => '申請單位',
            'created-by'          => '建立者',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Leave類型已刪除',
                    'body'  => 'The Leave type has been已刪除成功.',
                ],
            ],
            'restore' => [
                'notification' => [
                    'title' => 'Leave類型 restored',
                    'body'  => 'The Leave type has been restored成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Leave類型 restored',
                    'body'  => 'The Leave類型 has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Leave類型已刪除',
                    'body'  => 'The Leave類型 has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Leave類型 force已刪除',
                        'body'  => 'The Leave類型 has been force已刪除成功.',
                    ],
                    'error' => [
                        'title' => 'Leave類型 could not be已刪除',
                        'body'  => 'The Leave類型 cannot be已刪除 because it is currently in use.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title'   => '一般資料',
                'entries' => [
                    'name'                => '標題',
                    'approval'            => '核准',
                    'requires-allocation' => '需要分配',
                    'employee-requests'   => '員工請求',
                    'display-option'      => '顯示選項',
                ],
            ],
            'display-option' => [
                'title'   => '顯示選項',
                'entries' => [
                    'color' => '顏色',
                ],
            ],
            'configuration' => [
                'title' => '組態設定',

                'entries' => [
                    'notified-time-off-officers'          => 'Notified時間 Off Officers',
                    'take-time-off-in'                    => 'Take時間 Off In',
                    'public-holiday-included'             => '包含國定假日',
                    'allow-to-attach-supporting-document' => '允許附加證明文件',
                    'show-on-dashboard'                   => '顯示於儀表板',
                    'kind-off-time'                       => 'Kind of時間',
                    'max-negative-cap'                    => '最大負值上限',
                    'kind-of-time'                        => 'Kind of時間 Off',
                ],
            ],
        ],
    ],
];
