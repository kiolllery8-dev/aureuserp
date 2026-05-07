<?php

return [
    'navigation' => [
        'title' => '規則',
        'group' => '倉庫管理',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => '一般',

                'fields' => [
                    'name'                        => '名稱',
                    'action'                      => '動作',
                    'operation-type'              => '作業類型',
                    'source-location'             => '從哪裡',
                    'destination-location'        => '送到哪裡',
                    'supply-method'               => 'Supply Method',
                    'supply-method-hint-tooltip'  => '從庫存取：直接從來源位置現有庫存取貨。<br/>觸發其他規則：系統忽略現有庫存，改尋找補貨規則。<br/>從庫存取，沒有時觸發其他規則：先從現有庫存取，沒有再套用補貨規則。',
                    'automatic-move'              => 'Automatic Move',
                    'automatic-move-hint-tooltip' => '手動作業：在目前移動後建立另一筆庫存移動。<br/>自動，未新增步驟：直接取代原有移動的位置而不另加步驟。',

                    'action-information' => [
                        'pull' => '當 <b>:sourceLocation</b> 需要商品時，從 <b>:destinationLocation</b> 產生 :operation 以滿足需求。',
                        'push' => '當商品到達 <b>:sourceLocation</b>，</br>產生 <b>:operation</b> 將其轉至 <b>:destinationLocation</b>。',
                        'buy'  => 'When products are needed in <b>:destinationLocation</b>, a request for quotation is已建立 to fulfill the need.',
                    ],
                ],
            ],

            'settings' => [
                'title'  => '設定',

                'fields' => [
                    'partner-address'              => '夥伴地址',
                    'partner-address-hint-tooltip' => '商品的送達地址（選填）。',
                    'lead-time'                    => 'Lead時間 (Days)',
                    'lead-time-hint-tooltip'       => '預計移轉日會用這個前置時間計算。',
                ],

                'fieldsets' => [
                    'applicability' => [
                        'title'  => '適用性',

                        'fields' => [
                            'route'   => '路徑',
                            'company' => '公司',
                        ],
                    ],

                    'propagation' => [
                        'title'  => '傳遞',

                        'fields' => [
                            'propagation-procurement-group'              => '採購群組傳遞',
                            'propagation-procurement-group-hint-tooltip' => 'If selected, canceling the move已建立 by this rule will also cancel the subsequent move.',
                            'cancel-next-move'                           => '取消下一步移動',
                            'warehouse-to-propagate'                     => '傳遞的倉庫',
                            'warehouse-to-propagate-hint-tooltip'        => 'The warehouse assigned to the已建立 move or procurement, which may differ from the warehouse this rule applies to (e.g., for resupply rules from another warehouse).',
                        ],
                    ],
                ],

            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'                 => '名稱',
            'action'               => '動作',
            'source-location'      => '從哪裡',
            'destination-location' => '送到哪裡',
            'route'                => '路徑',
            'deleted-at'           => '刪除時間',
            'created-at'           => '建立時間',
            'updated-at'           => '更新時間',
        ],

        'groups' => [
            'action'               => '動作',
            'source-location'      => '從哪裡',
            'destination-location' => '送到哪裡',
            'route'                => '路徑',
            'created-at'           => '建立時間',
            'updated-at'           => '更新時間',
        ],

        'filters' => [
            'action'               => '動作',
            'source-location'      => '從哪裡',
            'destination-location' => '送到哪裡',
            'route'                => '路徑',
            'company'              => '公司',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Rule已更新',
                    'body'  => 'The rule has been已更新成功.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => '規則已還原',
                    'body'  => 'The rule has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Rule已刪除',
                    'body'  => 'The rule has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Rule force已刪除',
                        'body'  => 'The rule has been force已刪除成功.',
                    ],

                    'error' => [
                        'title' => 'Rule could not be已刪除',
                        'body'  => 'The rule cannot be已刪除 because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => '規則已還原',
                    'body'  => 'The rules has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Rules已刪除',
                    'body'  => 'The rules has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Rules force已刪除',
                        'body'  => 'The rules has been force已刪除成功.',
                    ],

                    'error' => [
                        'title' => 'Rules could not be已刪除',
                        'body'  => 'The rules cannot be已刪除 because they are currently in use.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => '規則詳情',

                'description' => [
                    'pull' => '當 <b>:sourceLocation</b> 需要商品時，從 <b>:destinationLocation</b> 產生 <b>:operation</b> 以滿足需求。',
                    'push' => '當商品到達 <b>:sourceLocation</b>，產生 <b>:operation</b> 將其轉至 <b>:destinationLocation</b>。',
                ],

                'entries' => [
                    'name'                 => 'Rule名稱',
                    'action'               => '動作',
                    'operation-type'       => '作業類型',
                    'source-location'      => '從哪裡',
                    'destination-location' => '送到哪裡',
                    'route'                => '路徑',
                    'company'              => '公司',
                    'partner-address'      => '夥伴地址',
                    'lead-time'            => 'Lead時間',
                    'action-information'   => 'Action資料',
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
    ],
];
