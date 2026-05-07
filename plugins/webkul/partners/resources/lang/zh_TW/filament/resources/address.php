<?php

return [
    'form' => [
        'partner' => '夥伴',
        'name'    => '名稱',
        'email'   => '電子郵件',
        'phone'   => '電話',
        'mobile'  => '行動電話',
        'type'    => '類型',
        'address' => '地址',
        'city'    => '城市',
        'street1' => '地址 1',
        'street2' => '地址 2',
        'state'   => '狀態',
        'zip'     => '郵遞區號',
        'code'    => '代碼',
        'country' => '國家',
    ],

    'table' => [
        'header-actions' => [
            'create' => [
                'label' => '新增Address',

                'notification' => [
                    'title' => 'Address已建立',
                    'body'  => 'The address has been已建立成功.',
                ],
            ],
        ],

        'columns' => [
            'type'    => '類型',
            'name'    => 'Contact名稱',
            'address' => '地址',
            'city'    => '城市',
            'street1' => '地址 1',
            'street2' => '地址 2',
            'state'   => '狀態',
            'zip'     => '郵遞區號',
            'country' => '國家',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Address已更新',
                    'body'  => 'The address has been已更新成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Address已刪除',
                    'body'  => 'The address has been已刪除成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Addresses已刪除',
                    'body'  => 'The addresses has been已刪除成功.',
                ],
            ],
        ],
    ],
];
