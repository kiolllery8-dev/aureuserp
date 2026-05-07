<?php

return [
    'label'             => '驗證',
    'modal-heading'     => '新增Back Order?',
    'modal-description' => '新增a backorder if the remaining products will be processed later. If not, do not generate a backorder.',

    'extra-modal-footer-actions' => [
        'no-backorder' => [
            'label' => '不接受缺貨訂單',
        ],
    ],

    'notification' => [
        'warning' => [
            'lines-missing' => [
                'title' => '沒有保留數量',
                'body'  => '此移轉未預留任何數量。',
            ],

            'lot-missing' => [
                'title' => '供應批次／序號',
                'body'  => '需要為商品提供批次／序號',
            ],

            'serial-qty' => [
                'title' => '序號已被指派',
                'body'  => '此序號已指派給其他商品。',
            ],

            'partial-package' => [
                'title' => '無法重複移動同一包裝內容',
                'body'  => '同一移轉中不可重複移動同一包裝內容，也不可將包裝拆成兩個位置。',
            ],
        ],
    ],
];
