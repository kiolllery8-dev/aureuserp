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
        'street1' => 'Street 1',
        'street2' => 'Street 2',
        'state'   => '狀態',
        'zip'     => '郵遞區號',
        'code'    => '代碼',
        'country' => '國家',
    ],

    'table' => [
        'header-actions' => [
            'create' => [
                'label' => 'Add Address',

                'notification' => [
                    'title' => 'Address created',
                    'body'  => 'The address has been created成功.',
                ],
            ],
        ],

        'columns' => [
            'type'    => '類型',
            'name'    => 'Contact Name',
            'address' => '地址',
            'city'    => '城市',
            'street1' => 'Street 1',
            'street2' => 'Street 2',
            'state'   => '狀態',
            'zip'     => '郵遞區號',
            'country' => '國家',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Address updated',
                    'body'  => 'The address has been updated成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Address deleted',
                    'body'  => 'The address has been deleted成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Addresses deleted',
                    'body'  => 'The addresses has been deleted成功.',
                ],
            ],
        ],
    ],
];
