<?php

return [
    'title' => '公開 Holidays',

    'model-label' => '公開 holiday',

    'navigation' => [
        'title' => '公開 Holidays',
    ],

    'form' => [
        'fields' => [
            'name'             => '名稱',
            'name-placeholder' => 'Enter the name of the public holiday',
            'date-from'        => '開始日期',
            'date-to'          => '結束日期',
            'color'            => '顏色',
            'calendar'         => 'Calendar',
        ],
    ],

    'table' => [
        'columns' => [
            'name'         => '名稱',
            'company-name' => '公司名稱',
            'calendar'     => 'Calendar',
            'created-by'   => '建立者',
            'date-from'    => '開始日期',
            'date-to'      => '結束日期',
        ],

        'filters' => [
            'name'         => '名稱',
            'company-name' => '公司名稱',
            'created-by'   => '建立者',
            'date-from'    => '開始日期',
            'date-to'      => '結束日期',
            'created-at'   => '建立時間',
            'updated-at'   => '更新時間',
        ],

        'groups' => [
            'name'         => '名稱',
            'company-name' => '公司名稱',
            'created-by'   => '建立者',
            'date-from'    => '開始日期',
            'date-to'      => '結束日期',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => '公開 holiday已更新',
                    'body'  => 'The public holiday has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => '公開 holiday已刪除',
                    'body'  => 'The public holiday has been已刪除成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => '公開 holidays已刪除',
                    'body'  => 'The public holidays has been已刪除成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name'      => '名稱',
            'date-from' => '開始日期',
            'date-to'   => '結束日期',
            'color'     => '顏色',
        ],
    ],
];
