<?php

return [
    'title' => 'Public Holidays',

    'model-label' => 'Public holiday',

    'navigation' => [
        'title' => 'Public Holidays',
    ],

    'form' => [
        'fields' => [
            'name'             => '名稱',
            'name-placeholder' => 'Enter the name of the public holiday',
            'date-from'        => '開始日期',
            'date-to'          => '結束日期',
            'color'            => 'Color',
            'calendar'         => 'Calendar',
        ],
    ],

    'table' => [
        'columns' => [
            'name'         => '名稱',
            'company-name' => 'Company Name',
            'calendar'     => 'Calendar',
            'created-by'   => '建立者',
            'date-from'    => '開始日期',
            'date-to'      => '結束日期',
        ],

        'filters' => [
            'name'         => '名稱',
            'company-name' => 'Company Name',
            'created-by'   => '建立者',
            'date-from'    => '開始日期',
            'date-to'      => '結束日期',
            'created-at'   => '建立時間',
            'updated-at'   => '更新時間',
        ],

        'groups' => [
            'name'         => '名稱',
            'company-name' => 'Company Name',
            'created-by'   => '建立者',
            'date-from'    => '開始日期',
            'date-to'      => '結束日期',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Public holiday updated',
                    'body'  => 'The public holiday has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Public holiday deleted',
                    'body'  => 'The public holiday has been deleted成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Public holidays deleted',
                    'body'  => 'The public holidays has been deleted成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name'      => '名稱',
            'date-from' => '開始日期',
            'date-to'   => '結束日期',
            'color'     => 'Color',
        ],
    ],
];
