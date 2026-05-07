<?php

return [
    'title' => 'Mandatory Days',

    'model-label' => 'Mandatory Day',

    'navigation' => [
        'title' => 'Mandatory Holidays',
    ],

    'form' => [
        'fields' => [
            'name'       => '名稱',
            'start-date' => '開始日期',
            'end-date'   => '結束日期',
            'color'      => 'Color',
        ],
    ],

    'table' => [
        'columns' => [
            'name'         => '名稱',
            'company-name' => 'Company Name',
            'created-by'   => '建立者',
            'start-date'   => '開始日期',
            'end-date'     => '結束日期',
        ],

        'filters' => [
            'name'         => '名稱',
            'company-name' => 'Company Name',
            'created-by'   => '建立者',
            'start-date'   => '開始日期',
            'end-date'     => '結束日期',
        ],

        'groups' => [
            'name'         => '名稱',
            'company-name' => 'Company Name',
            'created-by'   => '建立者',
            'start-date'   => '開始日期',
            'end-date'     => '結束日期',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Mandatory day updated',
                    'body'  => 'The mandatory day has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Mandatory day deleted',
                    'body'  => 'The mandatory day has been deleted成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Mandatory days deleted',
                    'body'  => 'The mandatory days has been deleted成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name'       => '名稱',
            'start-date' => '開始日期',
            'end-date'   => '結束日期',
            'color'      => 'Color',
        ],
    ],
];
