<?php

return [
    'navigation' => [
        'title' => '商品',
        'group' => '庫存',
    ],

    'global-search' => [
        'partner' => '夥伴',
        'origin'  => '來源',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => '一般',

                'fields' => [
                    'receive-from'         => '收貨自',
                    'contact'              => '聯絡人',
                    'delivery-address'     => '送貨地址',
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
                    'final-location' => '最終位置',
                    'description'    => '說明',
                    'scheduled-at'   => '排定時間',
                    'deadline'       => '截止日',
                    'packaging'      => '包裝',
                    'demand'         => '需求',
                    'quantity'       => '數量',
                    'unit'           => '單位',
                    'picked'         => '已揀貨',
                ],

                'fields' => [
                    'product'        => '商品',
                    'final-location' => '最終位置',
                    'description'    => '說明',
                    'scheduled-at'   => '排定時間',
                    'deadline'       => '截止日',
                    'packaging'      => '包裝',
                    'demand'         => '需求',
                    'quantity'       => '數量',
                    'unit'           => '單位',
                    'picked'         => '已揀貨',

                    'lines' => [
                        'modal-heading' => '管理Stock Moves',
                        'add-line'      => '新增明細',

                        'fields' => [
                            'lot'       => '批次／序號',
                            'pick-from' => '揀貨自',
                            'location'  => '存放至',
                            'package'   => '目的包裝',
                            'quantity'  => '數量',
                            'uom'       => '計量單位',
                        ],
                    ],
                ],
            ],

            'additional' => [
                'title' => '額外',

                'fields' => [
                    'responsible'                  => '負責人',
                    'shipping-policy'              => '運送政策',
                    'shipping-policy-hint-tooltip' => '定義商品要分批還是一次出齊。',
                    'scheduled-at'                 => '排定時間',
                    'scheduled-at-hint-tooltip'    => '處理出貨第一部分的排程時間。手動設定後會套用為所有庫存移動的預期日期。',
                    'source-document'              => '來源單據',
                    'source-document-hint-tooltip' => '文件參考',
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
            'favorite'        => '我的最愛',
            'reference'       => '參考編號',
            'from'            => '從',
            'to'              => '至',
            'contact'         => '聯絡人',
            'responsible'     => '負責人',
            'scheduled-at'    => '排定時間',
            'deadline'        => '截止日',
            'closed-at'       => '關閉時間',
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
            'scheduled-at'    => '排定時間',
            'created-at'      => '建立時間',
        ],

        'filters' => [
            'name'                 => '名稱',
            'state'                => '狀態',
            'partner'              => '夥伴',
            'responsible'          => '負責人',
            'owner'                => '擁有者',
            'source-location'      => '從哪裡',
            'destination-location' => '送到哪裡',
            'deadline'             => '截止日',
            'scheduled-at'         => '排定時間',
            'closed-at'            => '關閉時間',
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
                    'final-location' => '最終位置',
                    'description'    => '說明',
                    'scheduled-at'   => '排定時間',
                    'deadline'       => '截止日',
                    'packaging'      => '包裝',
                    'demand'         => '需求',
                    'quantity'       => '數量',
                    'unit'           => '單位',
                    'picked'         => '已揀貨',
                ],
            ],
            'additional' => [
                'title'   => '其他資料',
                'entries' => [
                    'responsible'     => '負責人',
                    'shipping-policy' => '運送政策',
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
        'todo'     => '待辦',
        'my'       => '我的移轉',
        'starred'  => '已加星標',
        'draft'    => '草稿',
        'waiting'  => '等候',
        'ready'    => '就緒',
        'done'     => '完成',
        'canceled' => '已取消',
    ],

    'notifications' => [
        'uom-precision-warning' => [
            'title' => '單位精度警告',
            'body'  => '您使用的單位比此商品的庫存單位還小，可能導致預留數量的進位問題。建議用最小單位進行庫存計價，或降低基礎單位的進位精度。',
        ],
    ],
];
