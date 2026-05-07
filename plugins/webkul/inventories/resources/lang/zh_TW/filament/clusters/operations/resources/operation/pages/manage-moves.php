<?php

return [
    'title' => 'Moves',

    'table' => [
        'columns' => [
            'date'                 => '日期',
            'reference'            => '參考',
            'product'              => '商品',
            'package'              => 'Package',
            'lot'                  => 'Lot / Serial Numbers',
            'source-location'      => 'Source Location',
            'destination-location' => 'Destination Location',
            'quantity'             => '數量',
            'unit'                 => 'Unit',
            'state'                => '狀態',
            'done-by'              => 'Done By',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Move deleted',
                    'body'  => 'The move has been deleted成功.',
                ],
            ],
        ],
    ],
];
