<?php

return [
    'navigation' => [
        'title' => 'Purchase Agreements',
        'group' => '採購',
    ],

    'global-search' => [
        'vendor' => '供應商',
        'type'   => '類型',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => '一般',

                'fields' => [
                    'vendor'                => '供應商',
                    'valid-from'            => 'Valid From',
                    'valid-to'              => 'Valid Until',
                    'buyer'                 => '買家',
                    'reference'             => '參考編號',
                    'reference-placeholder' => 'eg. PO/123',
                    'agreement-type'        => 'Agreement類型',
                    'company'               => '公司',
                    'currency'              => '幣別',
                ],
            ],
        ],

        'tabs' => [
            'products' => [
                'title' => '商品',

                'columns' => [
                    'product'    => '商品',
                    'quantity'   => '數量',
                    'ordered'    => 'Ordered',
                    'uom'        => '計量單位',
                    'unit-price' => '單價',
                ],

                'fields' => [
                    'product'    => '商品',
                    'quantity'   => '數量',
                    'ordered'    => 'Ordered',
                    'uom'        => '計量單位',
                    'unit-price' => '單價',
                ],
            ],

            'additional' => [
                'title' => '其他資料',
            ],

            'terms' => [
                'title' => '條款',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'agreement'      => 'Agreement',
            'vendor'         => '供應商',
            'agreement-type' => 'Agreement類型',
            'buyer'          => '買家',
            'company'        => '公司',
            'valid-from'     => 'Valid From',
            'valid-to'       => 'Valid Until',
            'reference'      => '參考編號',
            'status'         => '狀態',
        ],

        'groups' => [
            'agreement-type' => 'Agreement類型',
            'vendor'         => '供應商',
            'state'          => '狀態',
            'created-at'     => '建立時間',
            'updated-at'     => '更新時間',
        ],

        'filters' => [
            'agreement'      => 'Agreement',
            'vendor'         => '供應商',
            'agreement-type' => 'Agreement類型',
            'buyer'          => '買家',
            'company'        => '公司',
            'valid-from'     => 'Valid From',
            'valid-to'       => 'Valid Until',
            'reference'      => '參考編號',
            'status'         => '狀態',
            'created-at'     => '建立時間',
            'updated-at'     => '更新時間',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Purchase Agreement已刪除',
                    'body'  => 'The purchase agreement has been已刪除成功.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Purchase Agreement restored',
                    'body'  => 'The purchase agreement has been restored成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Purchase Agreement permanently已刪除',
                        'body'  => 'The purchase agreement has been permanently已刪除成功.',
                    ],

                    'error' => [
                        'title' => 'Purchase Agreement could not be已刪除',
                        'body'  => 'The The purchase agreement cannot be已刪除 because it is currently in use.',
                    ],

                    'warning' => [
                        'title' => 'Purchase Agreement cannot be已刪除',
                        'body'  => 'Only purchase agreements in Draft or Cancelled state can be已刪除.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Purchase Agreements已刪除',
                    'body'  => 'The purchase agreements has been已刪除成功.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Purchase Agreements restored',
                    'body'  => 'The purchase agreements has been restored成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Purchase Agreements permanently已刪除',
                        'body'  => 'The purchase agreements has been permanently已刪除成功.',
                    ],

                    'error' => [
                        'title' => 'Purchase Agreements could not be已刪除',
                        'body'  => 'The purchase agreements cannot be已刪除 because they are currently in use.',
                    ],

                    'warning' => [
                        'title' => 'Purchase Agreement cannot be已刪除',
                        'body'  => 'Only purchase agreements in Draft or Cancelled state can be已刪除.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => '一般',

                'entries' => [
                    'vendor'                => '供應商',
                    'valid-from'            => 'Valid From',
                    'valid-to'              => 'Valid Until',
                    'buyer'                 => '買家',
                    'reference'             => '參考編號',
                    'reference-placeholder' => 'eg. PO/123',
                    'agreement-type'        => 'Agreement類型',
                    'company'               => '公司',
                    'currency'              => '幣別',
                ],
            ],

            'metadata' => [
                'title' => 'Metadata',

                'entries' => [
                    'created-at' => '建立時間',
                    'created-by' => '建立者',
                    'updated-at' => '更新時間',
                ],
            ],
        ],

        'tabs' => [
            'products' => [
                'title' => '商品',

                'entries' => [
                    'product'    => '商品',
                    'quantity'   => '數量',
                    'ordered'    => 'Ordered',
                    'uom'        => '計量單位',
                    'unit-price' => '單價',
                ],
            ],

            'additional' => [
                'title' => '其他資料',
            ],

            'terms' => [
                'title' => '條款',
            ],
        ],
    ],
];
