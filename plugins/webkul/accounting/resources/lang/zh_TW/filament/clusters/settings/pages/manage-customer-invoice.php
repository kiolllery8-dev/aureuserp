<?php

return [
    'title' => '管理Customer Invoice',

    'form' => [
        'cash-rounding' => [
            'label'       => '現金進位',
            'helper-text' => 'Specify the lowest denomination of the currency accepted for cash payments.',
        ],

        'incoterm' => [
            'label' => 'Default Incoterm',
        ],
    ],
];
