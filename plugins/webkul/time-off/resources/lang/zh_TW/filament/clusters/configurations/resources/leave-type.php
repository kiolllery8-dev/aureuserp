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
                    'color' => 'Color',
                ],
            ],
            'configuration' => [
                'title' => '組態設定',

                'fields' => [
                    'notified-time-off-officers'          => 'Notified Time Off Officers',
                    'take-time-off-in'                    => 'Take Time Off In',
                    'public-holiday-included'             => 'Public Holiday Included',
                    'allow-to-attach-supporting-document' => 'Allow to Attach Supporting Document',
                    'show-on-dashboard'                   => 'Show on Dashboard',
                    'allow-negative-cap'                  => 'Allow Negative Cap',
                    'kind-off-time'                       => 'Kind of Time',
                    'max-negative-cap'                    => 'Max Negative Cap',
                    'kind-of-time'                        => 'Kind of Time Off',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'                      => '名稱',
            'company-name'              => '公司',
            'color'                     => 'Color',
            'notified-time-officers'    => 'Notified Time Officers',
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
            'time-type'           => 'Time Type',
            'request-unit'        => 'Request Unit',
            'created-by'          => '建立者',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Leave Type deleted',
                    'body'  => 'The Leave type has been deleted成功.',
                ],
            ],
            'restore' => [
                'notification' => [
                    'title' => 'Leave Type restored',
                    'body'  => 'The Leave type has been restored成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Leave Type restored',
                    'body'  => 'The Leave Type has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Leave Type deleted',
                    'body'  => 'The Leave Type has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Leave Type force deleted',
                        'body'  => 'The Leave Type has been force deleted成功.',
                    ],
                    'error' => [
                        'title' => 'Leave Type could not be deleted',
                        'body'  => 'The Leave Type cannot be deleted because it is currently in use.',
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
                    'color' => 'Color',
                ],
            ],
            'configuration' => [
                'title' => '組態設定',

                'entries' => [
                    'notified-time-off-officers'          => 'Notified Time Off Officers',
                    'take-time-off-in'                    => 'Take Time Off In',
                    'public-holiday-included'             => 'Public Holiday Included',
                    'allow-to-attach-supporting-document' => 'Allow to Attach Supporting Document',
                    'show-on-dashboard'                   => 'Show on Dashboard',
                    'kind-off-time'                       => 'Kind of Time',
                    'max-negative-cap'                    => 'Max Negative Cap',
                    'kind-of-time'                        => 'Kind of Time Off',
                ],
            ],
        ],
    ],
];
