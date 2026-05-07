<?php

return [
    'navigation' => [
        'title' => '作業類型',
        'group' => 'Warehouse Management',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'fields' => [
                    'operator-type'             => 'Operator Type',
                    'operator-type-placeholder' => 'eg. Receptions',
                ],
            ],

            'applicable-on' => [
                'title'       => 'Applicable On',
                'description' => 'Select the places where this route can be selected.',

                'fields' => [
                ],
            ],
        ],

        'tabs' => [
            'general' => [
                'title'  => '一般',

                'fields' => [
                    'operator-type'                      => 'Operator Type',
                    'sequence-prefix'                    => 'Sequence Prefix',
                    'generate-shipping-labels'           => 'Generate Shipping Labels',
                    'warehouse'                          => '倉庫',
                    'show-reception-report'              => 'Show Reception Report at Validation',
                    'show-reception-report-hint-tooltip' => 'If selected, the system will automatically display the reception report upon validation, provided there are moves to allocate.',
                    'company'                            => '公司',
                    'return-type'                        => 'Return Type',
                    'create-backorder'                   => 'Create Backorder',
                    'move-type'                          => 'Move Type',
                    'move-type-hint-tooltip'             => 'Unless defined by the source document, this will serve as the default picking policy for this operation type.',
                ],

                'fieldsets' => [
                    'lots' => [
                        'title'  => 'Lots/Serial Numbers',

                        'fields' => [
                            'create-new'                => 'Create New',
                            'create-new-hint-tooltip'   => 'If selected, the system will assume you intend to create new Lots/Serial Numbers, allowing you to enter them in a text field.',
                            'use-existing'              => 'Use Existing',
                            'use-existing-hint-tooltip' => 'If selected, you can choose the Lots/Serial Numbers or opt not to assign any. This allows stock to be created without a lot or without restrictions on the lot used.',
                        ],
                    ],

                    'locations' => [
                        'title'  => '位置',

                        'fields' => [
                            'source-location'                   => 'Source Location',
                            'source-location-hint-tooltip'      => 'This serves as the default source location when manually creating this operation. However, it can be changed later, and routes may assign a different default location.',
                            'destination-location'              => 'Destination Location',
                            'destination-location-hint-tooltip' => 'This is the default destination location for manually created operations. However, it can be modified later, and routes may assign a different default location.',
                        ],
                    ],

                    'packages' => [
                        'title'  => 'Packages',

                        'fields' => [
                            'show-entire-package'              => 'Move Entire Package',
                            'show-entire-package-hint-tooltip' => 'If selected, you can move entire packages.',
                        ],
                    ],
                ],
            ],

            'hardware' => [
                'title'  => 'Hardware',

                'fieldsets' => [
                    'print-on-validation' => [
                        'title'  => 'Print on Validation',

                        'fields' => [
                            'delivery-slip'              => 'Delivery Slip',
                            'delivery-slip-hint-tooltip' => 'If selected, the system will automatically print the delivery slip when the picking is validated.',

                            'return-slip'              => 'Return Slip',
                            'return-slip-hint-tooltip' => 'If selected, the system will automatically print the return slip when the picking is validated.',

                            'product-labels'              => 'Product Labels',
                            'product-labels-hint-tooltip' => 'If selected, the system will automatically print the product labels when the picking is validated.',

                            'lots-labels'              => 'Lot/SN Labels',
                            'lots-labels-hint-tooltip' => 'If selected, the system will automatically print the lot/serial number labels when the picking is validated.',

                            'reception-report'              => 'Reception Report',
                            'reception-report-hint-tooltip' => 'If selected, the system will automatically print the reception report when the picking is validated and contains assigned moves.',

                            'reception-report-labels'              => 'Reception Report Labels',
                            'reception-report-labels-hint-tooltip' => 'If selected, the system will automatically print the reception report labels when the picking is validated.',

                            'package-content'              => 'Package Content',
                            'package-content-hint-tooltip' => 'If selected, the system will automatically print the package details and their contents when the picking is validated.',
                        ],
                    ],

                    'print-on-pack' => [
                        'title'  => 'Print on "Put in Pack"',

                        'fields' => [
                            'package-label'              => 'Package Label',
                            'package-label-hint-tooltip' => 'If selected, the system will automatically print the package label when the "Put in Pack" button is used.',
                        ],
                    ],
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => '名稱',
            'warehouse'  => '倉庫',
            'company'    => '公司',
            'deleted-at' => 'Deleted At',
            'created-at' => '建立時間',
            'updated-at' => '更新時間',
        ],

        'groups' => [
            'type'       => '類型',
            'warehouse'  => '倉庫',
            'created-at' => '建立時間',
            'updated-at' => '更新時間',
        ],

        'filters' => [
            'type'      => '類型',
            'warehouse' => '倉庫',
            'company'   => '公司',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Operation Type restored',
                    'body'  => 'The operation type has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Operation Type deleted',
                    'body'  => 'The operation type has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Operation Type force deleted',
                        'body'  => 'The operation type has been force deleted成功.',
                    ],

                    'error' => [
                        'title' => 'Operation Type could not be deleted',
                        'body'  => 'The operation type cannot be deleted because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Operation Types restored',
                    'body'  => 'The operation types has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Operation Types deleted',
                    'body'  => 'The operation types has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Operations Types force deleted',
                        'body'  => 'The operation types has been force deleted成功.',
                    ],

                    'error' => [
                        'title' => 'Operations Types could not be deleted',
                        'body'  => 'The operation types cannot be deleted because they are currently in use.',
                    ],
                ],
            ],
        ],

        'empty-actions' => [
            'create' => [
                'label' => 'Create Operation Type',
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => '一般資料',

                'entries' => [
                    'name' => '名稱',
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

        'tabs' => [
            'general' => [
                'title' => '一般',

                'entries' => [
                    'type'                       => '作業類型',
                    'sequence_code'              => 'Sequence Code',
                    'print_label'                => 'Print Label',
                    'warehouse'                  => '倉庫',
                    'reservation_method'         => 'Reservation Method',
                    'auto_show_reception_report' => 'Auto Show Reception Report',
                    'company'                    => '公司',
                    'return_operation_type'      => 'Return Operation Type',
                    'create_backorder'           => 'Create Backorder',
                    'move_type'                  => 'Move Type',
                ],

                'fieldsets' => [
                    'lots' => [
                        'title' => '批號',

                        'entries' => [
                            'use_create_lots'   => 'Use Create Lots',
                            'use_existing_lots' => 'Use Existing Lots',
                        ],
                    ],

                    'locations' => [
                        'title' => '位置',

                        'entries' => [
                            'source_location'      => 'Source Location',
                            'destination_location' => 'Destination Location',
                        ],
                    ],
                ],
            ],
            'hardware' => [
                'title' => 'Hardware',

                'fieldsets' => [
                    'print_on_validation' => [
                        'title' => 'Print on Validation',

                        'entries' => [
                            'auto_print_delivery_slip'           => 'Auto Print Delivery Slip',
                            'auto_print_return_slip'             => 'Auto Print Return Slip',
                            'auto_print_product_labels'          => 'Auto Print Product Labels',
                            'auto_print_lot_labels'              => 'Auto Print Lot Labels',
                            'auto_print_reception_report'        => 'Auto Print Reception Report',
                            'auto_print_reception_report_labels' => 'Auto Print Reception Report Labels',
                            'auto_print_packages'                => 'Auto Print Packages',
                        ],
                    ],

                    'print_on_pack' => [
                        'title' => 'Print on Pack',

                        'entries' => [
                            'auto_print_package_label' => 'Auto Print Package Label',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
