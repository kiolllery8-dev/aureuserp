<?php

return [
    'notification' => [
        'title' => '包裝已更新',
        'body'  => 'The package has been已更新成功.',
    ],

    'header-actions' => [
        'print' => [
            'label' => '列印',

            'actions' => [
                'without-content' => [
                    'label' => 'Print Barcode',
                ],

                'with-content' => [
                    'label' => 'Print Barcode With Content',
                ],
            ],
        ],

        'delete' => [
            'notification' => [
                'success' => [
                    'title' => '包裝已刪除',
                    'body'  => 'The package has been已刪除成功.',
                ],

                'error' => [
                    'title' => '包裝 could not be已刪除',
                    'body'  => 'The package cannot be已刪除 because it is currently in use.',
                ],
            ],
        ],
    ],
];
