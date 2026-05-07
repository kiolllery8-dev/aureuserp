<?php

return [
    'navigation' => [
        'title' => '位置',
        'group' => '倉庫管理',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => '一般',

                'fields' => [
                    'location'                     => '位置',
                    'location-placeholder'         => '例：備品庫存',
                    'parent-location'              => '上層位置',
                    'parent-location-hint-tooltip' => '包含此位置的主位置。例如「派送區」是上層位置「Gate 1」的一部分。',
                    'external-notes'               => '外部備註',
                ],
            ],

            'settings' => [
                'title'  => '設定',

                'fields' => [
                    'location-type'                 => 'Location類型',
                    'company'                       => '公司',
                    'storage-category'              => '儲存分類',
                    'is-scrap'                      => '是否為報廢位置？',
                    'is-scrap-hint-tooltip'         => '勾選此項以指定此位置存放報廢或受損商品。',
                    'is-dock'                       => '是否為碼頭位置？',
                    'is-dock-hint-tooltip'          => '勾選此項以指定此位置存放待出貨商品。',
                    'is-replenish'                  => '是否為補貨位置？',
                    'is-replenish-hint-tooltip'     => '啟用此功能以取得此位置補貨所需的所有數量。',
                    'logistics'                     => '物流',
                    'removal-strategy'              => '移出策略',
                    'removal-strategy-hint-tooltip' => '指定揀貨時決定貨架、批次、位置的預設方式。可於商品分類層級強制套用，若此處未設定則回退至上層位置。',
                    'cyclic-counting'               => '循環盤點',
                    'inventory-frequency'           => '盤點頻率',
                    'last-inventory'                => '上次盤點',
                    'last-inventory-hint-tooltip'   => '此位置最後盤點日期。',
                    'next-expected'                 => '下次預期',
                    'next-expected-hint-tooltip'    => '依循環排程的下次預定盤點日。',
                ],
            ],

            'additional' => [
                'title'  => '其他資料',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'location'         => '位置',
            'type'             => '類型',
            'storage-category' => '儲存分類',
            'company'          => '公司',
            'deleted-at'       => '刪除時間',
            'created-at'       => '建立時間',
            'updated-at'       => '更新時間',
        ],

        'groups' => [
            'warehouse'       => '倉庫',
            'type'            => '類型',
            'created-at'      => '建立時間',
            'updated-at'      => '更新時間',
        ],

        'filters' => [
            'location' => '位置',
            'type'     => '類型',
            'company'  => '公司',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Location已更新',
                    'body'  => 'The location has been已更新成功.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => '位置已還原',
                    'body'  => 'The location has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Location已刪除',
                    'body'  => 'The location has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Location force已刪除',
                        'body'  => 'The location has been force已刪除成功.',
                    ],

                    'error' => [
                        'title' => 'Location could not be已刪除',
                        'body'  => 'The location cannot be已刪除 because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'print' => [
                'label' => '列印條碼',
            ],

            'restore' => [
                'notification' => [
                    'title' => '位置已還原',
                    'body'  => 'The locations has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Locations已刪除',
                    'body'  => 'The locations has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Locations force已刪除',
                        'body'  => 'The locations has been force已刪除成功.',
                    ],

                    'error' => [
                        'title' => 'Locations could not be已刪除',
                        'body'  => 'The locations cannot be已刪除 because they are currently in use.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title'  => '一般',

                'entries' => [
                    'location'                     => '位置',
                    'location-placeholder'         => '例：備品庫存',
                    'parent-location'              => '上層位置',
                    'parent-location-hint-tooltip' => '包含此位置的主位置。例如「派送區」是上層位置「Gate 1」的一部分。',
                    'external-notes'               => '外部備註',
                ],
            ],

            'settings' => [
                'title'  => '設定',

                'entries' => [
                    'location-type'                 => 'Location類型',
                    'company'                       => '公司',
                    'storage-category'              => '儲存分類',
                    'is-scrap'                      => '是否為報廢位置？',
                    'is-scrap-hint-tooltip'         => '勾選此項以指定此位置存放報廢或受損商品。',
                    'is-dock'                       => '是否為碼頭位置？',
                    'is-dock-hint-tooltip'          => '勾選此項以指定此位置存放待出貨商品。',
                    'is-replenish'                  => '是否為補貨位置？',
                    'is-replenish-hint-tooltip'     => '啟用此功能以取得此位置補貨所需的所有數量。',
                    'logistics'                     => '物流',
                    'removal-strategy'              => '移出策略',
                    'removal-strategy-hint-tooltip' => '指定揀貨時決定貨架、批次、位置的預設方式。可於商品分類層級強制套用，若此處未設定則回退至上層位置。',
                    'cyclic-counting'               => '循環盤點',
                    'inventory-frequency'           => '盤點頻率',
                    'last-inventory'                => '上次盤點',
                    'last-inventory-hint-tooltip'   => '此位置最後盤點日期。',
                    'next-expected'                 => '下次預期',
                    'next-expected-hint-tooltip'    => '依循環排程的下次預定盤點日。',
                ],
            ],

            'additional' => [
                'title'  => '其他資料',
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
    ],
];
