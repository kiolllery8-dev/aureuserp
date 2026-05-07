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
                    'contact'              => 'Contact',
                    'delivery-address'     => 'Delivery Address',
                    'operation-type'       => '作業類型',
                    'source-location'      => 'Source Location',
                    'destination-location' => 'Destination Location',
                ],
            ],
        ],

        'tabs' => [
            'operations' => [
                'title' => '作業',

                'columns' => [
                    'product'        => '商品',
                    'final-location' => 'Final Location',
                    'description'    => '描述',
                    'scheduled-at'   => 'Scheduled At',
                    'deadline'       => '截止日',
                    'packaging'      => 'Packaging',
                    'demand'         => 'Demand',
                    'quantity'       => '數量',
                    'unit'           => 'Unit',
                    'picked'         => 'Picked',
                ],

                'fields' => [
                    'product'        => '商品',
                    'final-location' => 'Final Location',
                    'description'    => '描述',
                    'scheduled-at'   => 'Scheduled At',
                    'deadline'       => '截止日',
                    'packaging'      => 'Packaging',
                    'demand'         => 'Demand',
                    'quantity'       => '數量',
                    'unit'           => 'Unit',
                    'picked'         => 'Picked',

                    'lines' => [
                        'modal-heading' => '管理Stock Moves',
                        'add-line'      => 'Add Line',

                        'fields' => [
                            'lot'       => 'Lot/Serial Number',
                            'pick-from' => 'Pick From',
                            'location'  => 'Store To',
                            'package'   => 'Destination Package',
                            'quantity'  => '數量',
                            'uom'       => '計量單位',
                        ],
                    ],
                ],
            ],

            'additional' => [
                'title' => 'Additional',

                'fields' => [
                    'responsible'                  => 'Responsible',
                    'shipping-policy'              => 'Shipping Policy',
                    'shipping-policy-hint-tooltip' => 'It defines whether goods should be delivered partially or all at once.',
                    'scheduled-at'                 => 'Scheduled At',
                    'scheduled-at-hint-tooltip'    => 'The scheduled time for processing the first part of the shipment. Manually setting a value here will apply it as the expected date for all stock moves.',
                    'source-document'              => 'Source Document',
                    'source-document-hint-tooltip' => 'Reference of the document',
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
            'favorite'        => 'Favorite',
            'reference'       => '參考',
            'from'            => 'From',
            'to'              => 'To',
            'contact'         => 'Contact',
            'responsible'     => 'Responsible',
            'scheduled-at'    => 'Scheduled At',
            'deadline'        => '截止日',
            'closed-at'       => 'Closed At',
            'source-document' => 'Source Document',
            'operation-type'  => '作業類型',
            'company'         => '公司',
            'state'           => '狀態',
            'deleted-at'      => 'Deleted At',
            'created-at'      => '建立時間',
            'updated-at'      => '更新時間',
        ],

        'groups' => [
            'state'           => '狀態',
            'source-document' => 'Source Document',
            'operation-type'  => '作業類型',
            'scheduled-at'    => 'Schedule At',
            'created-at'      => '建立時間',
        ],

        'filters' => [
            'name'                 => '名稱',
            'state'                => '狀態',
            'partner'              => '夥伴',
            'responsible'          => 'Responsible',
            'owner'                => 'Owner',
            'source-location'      => 'Source Location',
            'destination-location' => 'Destination Location',
            'deadline'             => '截止日',
            'scheduled-at'         => 'Scheduled At',
            'closed-at'            => 'Closed At',
            'created-at'           => '建立時間',
            'updated-at'           => '更新時間',
            'company'              => '公司',
            'creator'              => 'Creator',
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title'   => '一般資料',
                'entries' => [
                    'contact'              => 'Contact',
                    'operation-type'       => '作業類型',
                    'source-location'      => 'Source Location',
                    'destination-location' => 'Destination Location',
                ],
            ],
        ],

        'tabs' => [
            'operations' => [
                'title'   => '作業',
                'entries' => [
                    'product'        => '商品',
                    'final-location' => 'Final Location',
                    'description'    => '描述',
                    'scheduled-at'   => 'Scheduled At',
                    'deadline'       => '截止日',
                    'packaging'      => 'Packaging',
                    'demand'         => 'Demand',
                    'quantity'       => '數量',
                    'unit'           => 'Unit',
                    'picked'         => 'Picked',
                ],
            ],
            'additional' => [
                'title'   => 'Additional Information',
                'entries' => [
                    'responsible'     => 'Responsible',
                    'shipping-policy' => 'Shipping Policy',
                    'scheduled-at'    => 'Scheduled At',
                    'source-document' => 'Source Document',
                ],
            ],
            'note' => [
                'title' => '備註',
            ],
        ],
    ],

    'tabs' => [
        'todo'     => 'To Do',
        'my'       => 'My Transfers',
        'starred'  => 'Starred',
        'draft'    => '草稿',
        'waiting'  => 'Waiting',
        'ready'    => 'Ready',
        'done'     => '完成',
        'canceled' => 'Canceled',
    ],

    'notifications' => [
        'uom-precision-warning' => [
            'title' => 'Unit of Measure Precision Warning',
            'body'  => 'You are using a unit of measure smaller than the one used to stock this product. This can lead to rounding issues on reserved quantities. Consider using the smallest unit of measure for stock valuation, or reduce the rounding precision of your base unit.',
        ],
    ],
];
