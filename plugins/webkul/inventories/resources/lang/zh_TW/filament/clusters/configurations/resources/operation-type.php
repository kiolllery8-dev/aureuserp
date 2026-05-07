<?php

return [
    'navigation' => [
        'title' => '作業類型',
        'group' => '倉庫 Management',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'fields' => [
                    'operator-type'             => 'Operator類型',
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
                    'operator-type'                      => 'Operator類型',
                    'sequence-prefix'                    => 'Sequence Prefix',
                    'generate-shipping-labels'           => 'Generate Shipping Labels',
                    'warehouse'                          => '倉庫',
                    'show-reception-report'              => 'Show Reception 報表 at Validation',
                    'show-reception-report-hint-tooltip' => 'If selected, the system will automatically display the reception report upon validation, provided there are moves to allocate.',
                    'company'                            => '公司',
                    'return-type'                        => 'Return類型',
                    'create-backorder'                   => '新增Backorder',
                    'move-type'                          => 'Move類型',
                    'move-type-hint-tooltip'             => 'Unless defined by the source document, this will serve as the default picking policy for this operation type.',
                ],

                'fieldsets' => [
                    'lots' => [
                        'title'  => '批號/Serial 編號',

                        'fields' => [
                            'create-new'                => '新增New',
                            'create-new-hint-tooltip'   => 'If selected, the system will assume you intend to create new 批號/Serial 編號, allowing you to enter them in a text field.',
                            'use-existing'              => 'Use Existing',
                            'use-existing-hint-tooltip' => 'If selected, you can choose the 批號/Serial 編號 or opt not to assign any. This allows stock to be已建立 without a lot or without restrictions on the lot used.',
                        ],
                    ],

                    'locations' => [
                        'title'  => '位置',

                        'fields' => [
                            'source-location'                   => '從哪裡',
                            'source-location-hint-tooltip'      => 'This serves as the default source location when manually creating this operation. However, it can be changed later, and routes may assign a different default location.',
                            'destination-location'              => '送到哪裡',
                            'destination-location-hint-tooltip' => 'This is the default destination location for manually已建立 operations. However, it can be modified later, and routes may assign a different default location.',
                        ],
                    ],

                    'packages' => [
                        'title'  => '包裝',

                        'fields' => [
                            'show-entire-package'              => 'Move Entire 包裝',
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
                            'delivery-slip'              => '出貨 Slip',
                            'delivery-slip-hint-tooltip' => 'If selected, the system will automatically print the delivery slip when the picking is validated.',

                            'return-slip'              => 'Return Slip',
                            'return-slip-hint-tooltip' => 'If selected, the system will automatically print the return slip when the picking is validated.',

                            'product-labels'              => '商品 Labels',
                            'product-labels-hint-tooltip' => 'If selected, the system will automatically print the product labels when the picking is validated.',

                            'lots-labels'              => '批號/SN Labels',
                            'lots-labels-hint-tooltip' => 'If selected, the system will automatically print the lot/serial number labels when the picking is validated.',

                            'reception-report'              => 'Reception 報表',
                            'reception-report-hint-tooltip' => 'If selected, the system will automatically print the reception report when the picking is validated and contains assigned moves.',

                            'reception-report-labels'              => 'Reception 報表 Labels',
                            'reception-report-labels-hint-tooltip' => 'If selected, the system will automatically print the reception report labels when the picking is validated.',

                            'package-content'              => '包裝 Content',
                            'package-content-hint-tooltip' => 'If selected, the system will automatically print the package details and their contents when the picking is validated.',
                        ],
                    ],

                    'print-on-pack' => [
                        'title'  => 'Print on "Put in Pack"',

                        'fields' => [
                            'package-label'              => '包裝 Label',
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
            'deleted-at' => '刪除時間',
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
                    'title' => 'Operation類型 restored',
                    'body'  => 'The operation type has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Operation類型已刪除',
                    'body'  => 'The operation type has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Operation類型 force已刪除',
                        'body'  => 'The operation type has been force已刪除成功.',
                    ],

                    'error' => [
                        'title' => 'Operation類型 could not be已刪除',
                        'body'  => 'The operation type cannot be已刪除 because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Operation類型s restored',
                    'body'  => 'The operation types has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Operation類型s已刪除',
                    'body'  => 'The operation types has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Operations類型s force已刪除',
                        'body'  => 'The operation types has been force已刪除成功.',
                    ],

                    'error' => [
                        'title' => 'Operations類型s could not be已刪除',
                        'body'  => 'The operation types cannot be已刪除 because they are currently in use.',
                    ],
                ],
            ],
        ],

        'empty-actions' => [
            'create' => [
                'label' => '新增Operation類型',
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
                'title' => '紀錄資料',

                'entries' => [
                    'created-by'   => '建立者',
                    'created-at'   => '建立時間',
                    'last-updated' => '最後更新',
                ],
            ],
        ],

        'tabs' => [
            'general' => [
                'title' => '一般',

                'entries' => [
                    'type'                       => '作業類型',
                    'sequence_code'              => 'Sequence代碼',
                    'print_label'                => 'Print Label',
                    'warehouse'                  => '倉庫',
                    'reservation_method'         => 'Reservation 方式',
                    'auto_show_reception_report' => 'Auto Show Reception 報表',
                    'company'                    => '公司',
                    'return_operation_type'      => 'Return Operation類型',
                    'create_backorder'           => '新增Backorder',
                    'move_type'                  => 'Move類型',
                ],

                'fieldsets' => [
                    'lots' => [
                        'title' => '批號',

                        'entries' => [
                            'use_create_lots'   => 'Use 新增Lots',
                            'use_existing_lots' => 'Use Existing 批號',
                        ],
                    ],

                    'locations' => [
                        'title' => '位置',

                        'entries' => [
                            'source_location'      => '從哪裡',
                            'destination_location' => '送到哪裡',
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
                            'auto_print_delivery_slip'           => 'Auto Print 出貨 Slip',
                            'auto_print_return_slip'             => 'Auto Print Return Slip',
                            'auto_print_product_labels'          => 'Auto Print 商品 Labels',
                            'auto_print_lot_labels'              => 'Auto Print 批號 Labels',
                            'auto_print_reception_report'        => 'Auto Print Reception 報表',
                            'auto_print_reception_report_labels' => 'Auto Print Reception 報表 Labels',
                            'auto_print_packages'                => 'Auto Print 包裝',
                        ],
                    ],

                    'print_on_pack' => [
                        'title' => 'Print on Pack',

                        'entries' => [
                            'auto_print_package_label' => 'Auto Print 包裝 Label',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
