<?php

return [
    'navigation' => [
        'title' => '商品',
        'group' => '庫存',
    ],

    'global-search' => [
        'partner' => '夥伴',
        'origin'  => 'Origin',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => '一般',

                'fields' => [
                    'receive-from'         => 'Receive From',
                    'contact'              => '聯絡人',
                    'delivery-address'     => '出貨 地址',
                    'operation-type'       => '作業類型',
                    'source-location'      => '從哪裡',
                    'destination-location' => '送到哪裡',
                ],
            ],
        ],

        'tabs' => [
            'operations' => [
                'title' => '作業',

                'columns' => [
                    'product'        => '商品',
                    'final-location' => 'Final 位置',
                    'description'    => '描述',
                    'scheduled-at'   => '排定時間',
                    'deadline'       => '截止日',
                    'packaging'      => '包裝',
                    'demand'         => 'Demand',
                    'quantity'       => '數量',
                    'unit'           => '單位',
                    'picked'         => 'Picked',
                ],

                'fields' => [
                    'product'        => '商品',
                    'final-location' => 'Final 位置',
                    'description'    => '描述',
                    'scheduled-at'   => '排定時間',
                    'deadline'       => '截止日',
                    'packaging'      => '包裝',
                    'demand'         => 'Demand',
                    'quantity'       => '數量',
                    'unit'           => '單位',
                    'picked'         => 'Picked',

                    'lines' => [
                        'modal-heading' => '管理庫存異動s',
                        'add-line'      => '新增明細',

                        'fields' => [
                            'lot'       => '批號/Serial 編號',
                            'pick-from' => 'Pick From',
                            'location'  => 'Store To',
                            'package'   => 'Destination 包裝',
                            'quantity'  => '數量',
                            'uom'       => '計量單位',
                        ],
                    ],
                ],
            ],

            'additional' => [
                'title' => 'Additional',

                'fields' => [
                    'responsible'                  => '負責人',
                    'shipping-policy'              => 'Shipping Policy',
                    'shipping-policy-hint-tooltip' => 'It defines whether goods should be delivered partially or all at once.',
                    'scheduled-at'                 => '排定時間',
                    'scheduled-at-hint-tooltip'    => 'The scheduled time for processing the first part of the shipment. Manually setting a value here will apply it as the expected date for all stock moves.',
                    'source-document'              => '來源單據',
                    'source-document-hint-tooltip' => '參考編號 of the document',
                ],
            ],

            'note' => [
                'title' => '備註',

                'fields' => [

                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'favorite'        => '最愛',
            'reference'       => '參考編號',
            'from'            => 'From',
            'to'              => 'To',
            'contact'         => '聯絡人',
            'responsible'     => '負責人',
            'scheduled-at'    => '排定時間',
            'deadline'        => '截止日',
            'closed-at'       => '已關閉 At',
            'source-document' => '來源單據',
            'operation-type'  => '作業類型',
            'company'         => '公司',
            'state'           => '狀態',
            'deleted-at'      => '刪除時間',
            'created-at'      => '建立時間',
            'updated-at'      => '更新時間',
        ],

        'groups' => [
            'state'           => '狀態',
            'source-document' => '來源單據',
            'operation-type'  => '作業類型',
            'scheduled-at'    => 'Schedule At',
            'created-at'      => '建立時間',
        ],

        'filters' => [
            'name'                 => '名稱',
            'state'                => '狀態',
            'partner'              => '夥伴',
            'responsible'          => '負責人',
            'owner'                => 'Owner',
            'source-location'      => '從哪裡',
            'destination-location' => '送到哪裡',
            'deadline'             => '截止日',
            'scheduled-at'         => '排定時間',
            'closed-at'            => '已關閉 At',
            'created-at'           => '建立時間',
            'updated-at'           => '更新時間',
            'company'              => '公司',
            'creator'              => '建立者',
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title'   => '一般資料',
                'entries' => [
                    'contact'              => '聯絡人',
                    'operation-type'       => '作業類型',
                    'source-location'      => '從哪裡',
                    'destination-location' => '送到哪裡',
                ],
            ],
        ],

        'tabs' => [
            'operations' => [
                'title'   => '作業',
                'entries' => [
                    'product'        => '商品',
                    'final-location' => 'Final 位置',
                    'description'    => '描述',
                    'scheduled-at'   => '排定時間',
                    'deadline'       => '截止日',
                    'packaging'      => '包裝',
                    'demand'         => 'Demand',
                    'quantity'       => '數量',
                    'unit'           => '單位',
                    'picked'         => 'Picked',
                ],
            ],
            'additional' => [
                'title'   => '其他資料',
                'entries' => [
                    'responsible'     => '負責人',
                    'shipping-policy' => 'Shipping Policy',
                    'scheduled-at'    => '排定時間',
                    'source-document' => '來源單據',
                ],
            ],
            'note' => [
                'title' => '備註',
            ],
        ],
    ],

    'tabs' => [
        'todo'     => 'To Do',
        'my'       => 'My 調撥',
        'starred'  => 'Starred',
        'draft'    => '草稿',
        'waiting'  => 'Waiting',
        'ready'    => 'Ready',
        'done'     => '完成',
        'canceled' => 'Canceled',
    ],

    'notifications' => [
        'uom-precision-warning' => [
            'title' => '單位 of Measure Precision Warning',
            'body'  => 'You are using a unit of measure smaller than the one used to stock this product. This can lead to rounding issues on reserved quantities. Consider using the smallest unit of measure for stock valuation, or reduce the rounding precision of your base unit.',
        ],
    ],
];
