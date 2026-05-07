<?php

return [
    'title' => '職位',

    'navigation' => [
        'title' => '職位',
    ],

    'table' => [
        'columns' => [
            'name'         => '名稱',
            'manager-name' => 'Manager',
            'company-name' => '公司',
        ],

        'actions' => [
            'applications' => [
                'new-applications' => ':count New Applications',
            ],

            'to-recruitment' => [
                'to-recruitment' => ':count To Recruitment',
            ],

            'total-application' => [
                'total-application' => ':count Applications',
            ],
        ],
    ],

];
