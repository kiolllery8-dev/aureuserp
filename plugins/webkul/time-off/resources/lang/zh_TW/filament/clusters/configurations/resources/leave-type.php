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
                    'approval'            => 'Approval',
                    'requires-allocation' => 'Requires Allocation',
                    'employee-requests'   => 'Employee Requests',
                    'display-option'      => 'Display Option',
                ],
            ],
            'display-option' => [
                'title'  => 'Display Option',
                'fields' => [
                    'color' => '顏色',
                ],
            ],
            'configuration' => [
                'title' => '組態設定',

                'fields' => [
                    'notified-time-off-officers'          => 'Notified時間 Off Officers',
                    'take-time-off-in'                    => 'Take時間 Off In',
                    'public-holiday-included'             => 'Public Holiday Included',
                    'allow-to-attach-supporting-document' => 'Allow to Attach Supporting Document',
                    'show-on-dashboard'                   => 'Show on Dashboard',
                    'allow-negative-cap'                  => 'Allow Negative Cap',
                    'kind-off-time'                       => 'Kind of時間',
                    'max-negative-cap'                    => 'Max Negative Cap',
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
            'time-off-approval'         => 'Time Off Approval',
            'requires-allocation'       => 'Requires Allocation',
            'allocation-approval'       => 'Allocation Approval',
            'employee-request'          => 'Employee Request',
        ],

        'filters' => [
            'name'                => '名稱',
            'company-name'        => '公司',
            'time-off-approval'   => 'Time Off Approval',
            'requires-allocation' => 'Requires Allocation',
            'time-type'           => 'Time類型',
            'request-unit'        => 'Request Unit',
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
                    'approval'            => 'Approval',
                    'requires-allocation' => 'Requires Allocation',
                    'employee-requests'   => 'Employee Requests',
                    'display-option'      => 'Display Option',
                ],
            ],
            'display-option' => [
                'title'   => 'Display Option',
                'entries' => [
                    'color' => '顏色',
                ],
            ],
            'configuration' => [
                'title' => '組態設定',

                'entries' => [
                    'notified-time-off-officers'          => 'Notified時間 Off Officers',
                    'take-time-off-in'                    => 'Take時間 Off In',
                    'public-holiday-included'             => 'Public Holiday Included',
                    'allow-to-attach-supporting-document' => 'Allow to Attach Supporting Document',
                    'show-on-dashboard'                   => 'Show on Dashboard',
                    'kind-off-time'                       => 'Kind of時間',
                    'max-negative-cap'                    => 'Max Negative Cap',
                    'kind-of-time'                        => 'Kind of時間 Off',
                ],
            ],
        ],
    ],
];
