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
                'body'  => 'No quantities are reserved for the transfer.',
            ],

            'lot-missing' => [
                'title' => '供應批次／序號',
                'body'  => '需要為商品提供批次／序號',
            ],

            'serial-qty' => [
                'title' => '序號已被指派',
                'body'  => 'The serial number has already been assigned to another product.',
            ],

            'partial-package' => [
                'title' => 'Can not move same package content',
                'body'  => 'You cannot move the same package contents more than once within a single transfer or split the package between two locations.',
            ],
        ],
    ],
];
