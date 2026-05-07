<?php

return [
    'title' => 'Mandatory 天數',

    'model-label' => 'Mandatory Day',

    'navigation' => [
        'title' => 'Mandatory Holidays',
    ],

    'form' => [
        'fields' => [
            'name'       => '名稱',
            'start-date' => '開始日期',
            'end-date'   => '結束日期',
            'color'      => '顏色',
        ],
    ],

    'table' => [
        'columns' => [
            'name'         => '名稱',
            'company-name' => '公司名稱',
            'created-by'   => '建立者',
            'start-date'   => '開始日期',
            'end-date'     => '結束日期',
        ],

        'filters' => [
            'name'         => '名稱',
            'company-name' => '公司名稱',
            'created-by'   => '建立者',
            'start-date'   => '開始日期',
            'end-date'     => '結束日期',
        ],

        'groups' => [
            'name'         => '名稱',
            'company-name' => '公司名稱',
            'created-by'   => '建立者',
            'start-date'   => '開始日期',
            'end-date'     => '結束日期',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Mandatory day已更新',
                    'body'  => 'The mandatory day has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Mandatory day已刪除',
                    'body'  => 'The mandatory day has been已刪除成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Mandatory days已刪除',
                    'body'  => 'The mandatory days has been已刪除成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name'       => '名稱',
            'start-date' => '開始日期',
            'end-date'   => '結束日期',
            'color'      => '顏色',
        ],
    ],
];
