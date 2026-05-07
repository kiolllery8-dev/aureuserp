<?php

return [
    'notification' => [
        'title' => 'Dropship已更新',
        'body'  => 'The dropship has been已更新成功.',
    ],

    'header-actions' => [
        'print' => [
            'label' => '列印',
        ],

        'delete' => [
            'notification' => [
                'success' => [
                    'title' => '代發已刪除',
                    'body'  => 'The dropship has been已刪除成功.',
                ],

                'error' => [
                    'title' => 'Dropship could not be已刪除',
                    'body'  => 'The dropship cannot be已刪除 because it is currently in use.',
                ],
            ],
        ],
    ],
];
