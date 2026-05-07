<?php

return [
    'navigation' => [
        'title' => '作業類型',
        'group' => '倉庫管理',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'fields' => [
                    'operator-type'             => 'Operator類型',
                    'operator-type-placeholder' => '例：收貨',
                ],
            ],

            'applicable-on' => [
                'title'       => '適用於',
                'description' => '選擇此路線可使用的地方。',

                'fields' => [
                ],
            ],
        ],

        'tabs' => [
            'general' => [
                'title'  => '一般',

                'fields' => [
                    'operator-type'                      => 'Operator類型',
                    'sequence-prefix'                    => '序號前綴',
                    'generate-shipping-labels'           => '產生出貨標籤',
                    'warehouse'                          => '倉庫',
                    'show-reception-report'              => '驗證時顯示收貨報告',
                    'show-reception-report-hint-tooltip' => '啟用後，驗證時若有可分配的移動，系統會自動顯示收貨報告。',
                    'company'                            => '公司',
                    'return-type'                        => 'Return類型',
                    'create-backorder'                   => '新增Backorder',
                    'move-type'                          => 'Move類型',
                    'move-type-hint-tooltip'             => '除非來源文件另有定義，否則此為此作業類型的預設揀貨政策。',
                ],

                'fieldsets' => [
                    'lots' => [
                        'title'  => '批次／序號',

                        'fields' => [
                            'create-new'                => '新增New',
                            'create-new-hint-tooltip'   => '啟用後，系統假設您想建立新批次／序號，可在文字欄位中輸入。',
                            'use-existing'              => '使用既有',
                            'use-existing-hint-tooltip' => 'If selected, you can choose the Lots/Serial Numbers or opt not to assign any. This allows stock to be已建立 without a lot or without restrictions on the lot used.',
                        ],
                    ],

                    'locations' => [
                        'title'  => '位置',

                        'fields' => [
                            'source-location'                   => '從哪裡',
                            'source-location-hint-tooltip'      => '手動建立此作業時，此處為預設來源位置；之後可變更，且路線可能指定其他預設位置。',
                            'destination-location'              => '送到哪裡',
                            'destination-location-hint-tooltip' => 'This is the default destination location for manually已建立 operations. However, it can be modified later, and routes may assign a different default location.',
                        ],
                    ],

                    'packages' => [
                        'title'  => '包裝',

                        'fields' => [
                            'show-entire-package'              => '移動整個包裝',
                            'show-entire-package-hint-tooltip' => '啟用後可移動整個包裝。',
                        ],
                    ],
                ],
            ],

            'hardware' => [
                'title'  => '硬體',

                'fieldsets' => [
                    'print-on-validation' => [
                        'title'  => '驗證時列印',

                        'fields' => [
                            'delivery-slip'              => '出貨單',
                            'delivery-slip-hint-tooltip' => '啟用後，揀貨驗證時會自動列印出貨單。',

                            'return-slip'              => '退貨單',
                            'return-slip-hint-tooltip' => '啟用後，揀貨驗證時會自動列印退貨單。',

                            'product-labels'              => '商品標籤',
                            'product-labels-hint-tooltip' => '啟用後，揀貨驗證時會自動列印商品標籤。',

                            'lots-labels'              => '批次／序號標籤',
                            'lots-labels-hint-tooltip' => '啟用後，揀貨驗證時會自動列印批次／序號標籤。',

                            'reception-report'              => '收貨報告',
                            'reception-report-hint-tooltip' => '啟用後，揀貨驗證且有指派移動時，自動列印收貨報告。',

                            'reception-report-labels'              => '收貨報告標籤',
                            'reception-report-labels-hint-tooltip' => '啟用後，揀貨驗證時自動列印收貨報告標籤。',

                            'package-content'              => '包裝內容',
                            'package-content-hint-tooltip' => '啟用後，揀貨驗證時自動列印包裝詳情與內容。',
                        ],
                    ],

                    'print-on-pack' => [
                        'title'  => '「裝箱」時列印',

                        'fields' => [
                            'package-label'              => '包裝標籤',
                            'package-label-hint-tooltip' => '啟用後，按「裝箱」鈕時自動列印包裝標籤。',
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
                    'print_label'                => '列印標籤',
                    'warehouse'                  => '倉庫',
                    'reservation_method'         => '預留方式',
                    'auto_show_reception_report' => '自動顯示收貨報告',
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
                            'use_existing_lots' => '使用既有批次',
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
                'title' => '硬體',

                'fieldsets' => [
                    'print_on_validation' => [
                        'title' => '驗證時列印',

                        'entries' => [
                            'auto_print_delivery_slip'           => '自動列印出貨單',
                            'auto_print_return_slip'             => '自動列印退貨單',
                            'auto_print_product_labels'          => '自動列印商品標籤',
                            'auto_print_lot_labels'              => '自動列印批次標籤',
                            'auto_print_reception_report'        => '自動列印收貨報告',
                            'auto_print_reception_report_labels' => '自動列印收貨報告標籤',
                            'auto_print_packages'                => '自動列印包裝',
                        ],
                    ],

                    'print_on_pack' => [
                        'title' => '包裝時列印',

                        'entries' => [
                            'auto_print_package_label' => '自動列印包裝標籤',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
