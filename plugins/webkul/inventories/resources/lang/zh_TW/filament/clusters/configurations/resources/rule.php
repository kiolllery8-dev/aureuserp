<?php

return [
    'navigation' => [
        'title' => 'Rules',
        'group' => 'Warehouse Management',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => '一般',

                'fields' => [
                    'name'                        => '名稱',
                    'action'                      => 'Action',
                    'operation-type'              => '作業類型',
                    'source-location'             => 'Source Location',
                    'destination-location'        => 'Destination Location',
                    'supply-method'               => 'Supply Method',
                    'supply-method-hint-tooltip'  => 'Take From Stock: Products are sourced directly from the available stock in the source location.<br/>Trigger Another Rule: The system ignores available stock and searches for a stock rule to replenish the source location.<br/>Take From Stock, if Unavailable, Trigger Another Rule: Products are first taken from available stock. If none is available, the system applies a stock rule to bring products into the source location.',
                    'automatic-move'              => 'Automatic Move',
                    'automatic-move-hint-tooltip' => 'Manual Operation: Creates a separate stock move after the current one.<br/>Automatic No Step Added: Directly replaces the location in the original move without adding an extra step.',

                    'action-information' => [
                        'pull' => 'When products are required in <b>:sourceLocation</b>, :operation is generated from <b>:destinationLocation</b> to meet the demand.',
                        'push' => 'When products reach <b>:sourceLocation</b>,</br><b>:operation</b> is generated to transfer them to <b>:destinationLocation</b>.',
                        'buy'  => 'When products are needed in <b>:destinationLocation</b>, a request for quotation is created to fulfill the need.',
                    ],
                ],
            ],

            'settings' => [
                'title'  => '設定',

                'fields' => [
                    'partner-address'              => 'Partner Address',
                    'partner-address-hint-tooltip' => 'Address where goods should be delivered. Optional.',
                    'lead-time'                    => 'Lead Time (Days)',
                    'lead-time-hint-tooltip'       => 'The expected transfer date will be calculated using this lead time.',
                ],

                'fieldsets' => [
                    'applicability' => [
                        'title'  => 'Applicability',

                        'fields' => [
                            'route'   => '路徑',
                            'company' => '公司',
                        ],
                    ],

                    'propagation' => [
                        'title'  => 'Propagation',

                        'fields' => [
                            'propagation-procurement-group'              => 'Propagation of Procurement Group',
                            'propagation-procurement-group-hint-tooltip' => 'If selected, canceling the move created by this rule will also cancel the subsequent move.',
                            'cancel-next-move'                           => 'Cancel Next Move',
                            'warehouse-to-propagate'                     => 'Warehouse to Propagate',
                            'warehouse-to-propagate-hint-tooltip'        => 'The warehouse assigned to the created move or procurement, which may differ from the warehouse this rule applies to (e.g., for resupply rules from another warehouse).',
                        ],
                    ],
                ],

            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'                 => '名稱',
            'action'               => 'Action',
            'source-location'      => 'Source Location',
            'destination-location' => 'Destination Location',
            'route'                => '路徑',
            'deleted-at'           => 'Deleted At',
            'created-at'           => '建立時間',
            'updated-at'           => '更新時間',
        ],

        'groups' => [
            'action'               => 'Action',
            'source-location'      => 'Source Location',
            'destination-location' => 'Destination Location',
            'route'                => '路徑',
            'created-at'           => '建立時間',
            'updated-at'           => '更新時間',
        ],

        'filters' => [
            'action'               => 'Action',
            'source-location'      => 'Source Location',
            'destination-location' => 'Destination Location',
            'route'                => '路徑',
            'company'              => '公司',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Rule updated',
                    'body'  => 'The rule has been updated成功.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Rule restored',
                    'body'  => 'The rule has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Rule deleted',
                    'body'  => 'The rule has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Rule force deleted',
                        'body'  => 'The rule has been force deleted成功.',
                    ],

                    'error' => [
                        'title' => 'Rule could not be deleted',
                        'body'  => 'The rule cannot be deleted because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Rules restored',
                    'body'  => 'The rules has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Rules deleted',
                    'body'  => 'The rules has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Rules force deleted',
                        'body'  => 'The rules has been force deleted成功.',
                    ],

                    'error' => [
                        'title' => 'Rules could not be deleted',
                        'body'  => 'The rules cannot be deleted because they are currently in use.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Rule Details',

                'description' => [
                    'pull' => 'When products are required in <b>:sourceLocation</b>, <b>:operation</b> is generated from <b>:destinationLocation</b> to meet the demand.',
                    'push' => 'When products reach in <b>:sourceLocation</b>, <b>:operation</b> is generated to transfer them to <b>:destinationLocation</b>.',
                ],

                'entries' => [
                    'name'                 => 'Rule Name',
                    'action'               => 'Action',
                    'operation-type'       => '作業類型',
                    'source-location'      => 'Source Location',
                    'destination-location' => 'Destination Location',
                    'route'                => '路徑',
                    'company'              => '公司',
                    'partner-address'      => 'Partner Address',
                    'lead-time'            => 'Lead Time',
                    'action-information'   => 'Action Information',
                ],
            ],

            'record-information' => [
                'title' => 'Record Information',

                'entries' => [
                    'created-by'   => '建立者',
                    'created-at'   => '建立時間',
                    'last-updated' => 'Last Updated',
                ],
            ],
        ],
    ],
];
