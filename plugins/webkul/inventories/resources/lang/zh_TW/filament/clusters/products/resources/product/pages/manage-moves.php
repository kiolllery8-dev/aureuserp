<?php

return [
    'title' => 'IN/OUT',

    'tabs' => [
        'todo'     => 'To Do',
        'done'     => '完成',
        'incoming' => 'Incoming',
        'outgoing' => 'Outgoing',
        'internal' => 'Internal',
    ],

    'table' => [
        'columns' => [
            'date'                 => '日期',
            'reference'            => '參考編號',
            'product'              => '商品',
            'package'              => '包裝',
            'lot'                  => '批號 / 序號',
            'source-location'      => '從哪裡',
            'destination-location' => '送到哪裡',
            'quantity'             => '數量',
            'unit'                 => '單位',
            'state'                => '狀態',
            'done-by'              => 'Done By',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Move已刪除',
                    'body'  => 'The move has been已刪除成功.',
                ],
            ],
        ],
    ],
];
