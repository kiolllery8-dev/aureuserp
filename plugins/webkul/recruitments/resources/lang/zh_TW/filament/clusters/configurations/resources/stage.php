<?php

return [
    'title' => '階段',

    'navigation' => [
        'title' => '階段',
        'group' => '職位',
    ],

    'form' => [
        'sections' => [
            'general-information' => [
                'title' => '一般資料',

                'fields' => [
                    'stage-name'   => 'Stage名稱',
                    'sort'         => '順序',
                    'requirements' => '需求',
                ],
            ],

            'tooltips' => [
                'title'       => '提示文字',
                'description' => '為申請狀態定義自訂標籤。',

                'fields' => [
                    'gray-label'          => '灰色標籤',
                    'gray-label-tooltip'  => '灰色狀態的標籤。',
                    'red-label'           => '紅色標籤',
                    'red-label-tooltip'   => '紅色狀態的標籤。',
                    'green-label'         => '綠色標籤',
                    'green-label-tooltip' => '綠色狀態的標籤。',
                ],
            ],

            'additional-information' => [
                'title' => '其他資料',

                'fields' => [
                    'job-positions' => '職位',
                    'folded'        => '已收合',
                    'hired-stage'   => '錄用階段',
                    'default-stage' => '預設階段',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'id'                 => '編號',
            'name'               => 'Stage名稱',
            'hired-stage'        => '錄用階段',
            'default-stage'      => '預設階段',
            'folded'             => '已收合',
            'job-positions'      => '職位',
            'created-by'         => '建立者',
            'created-at'         => '建立時間',
            'updated-at'         => '更新時間',
        ],

        'filters' => [
            'name'         => 'Stage名稱',
            'job-position' => '職位',
            'folded'       => '已收合',
            'gray-label'   => '灰色標籤',
            'red-label'    => '紅色標籤',
            'green-label'  => '綠色標籤',
            'created-by'   => '建立者',
            'created-at'   => '建立時間',
            'updated-at'   => '更新時間',
        ],

        'groups' => [
            'job-position' => '職位',
            'stage-name'   => 'Stage名稱',
            'folded'       => '已收合',
            'gray-label'   => '灰色標籤',
            'red-label'    => '紅色標籤',
            'green-label'  => '綠色標籤',
            'created-by'   => '建立者',
            'created-at'   => '建立時間',
            'updated-at'   => '更新時間',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Stages已刪除',
                        'body'  => 'The Stages has been已刪除成功.',
                    ],

                    'error' => [
                        'title' => 'Stages could not be已刪除',
                        'body'  => 'The Stages cannot be已刪除 because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Stages已刪除',
                    'body'  => 'The Stages has been已刪除成功.',
                ],
            ],
        ],

        'empty-state-actions' => [
            'create' => [
                'label' => '新增Stage',
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general-information' => [
                'title' => '一般資料',

                'entries' => [
                    'stage-name'   => 'Stage名稱',
                    'sort'         => '順序',
                    'requirements' => '需求',
                ],
            ],

            'tooltips' => [
                'title'       => '提示文字',
                'description' => '為申請狀態定義自訂標籤。',

                'entries' => [
                    'gray-label'          => '灰色標籤',
                    'gray-label-tooltip'  => '灰色狀態的標籤。',
                    'red-label'           => '紅色標籤',
                    'red-label-tooltip'   => '紅色狀態的標籤。',
                    'green-label'         => '綠色標籤',
                    'green-label-tooltip' => '綠色狀態的標籤。',
                ],
            ],

            'additional-information' => [
                'title' => '其他資料',

                'entries' => [
                    'job-positions'      => '職位',
                    'folded'             => '已收合',
                    'hired-stage'        => '錄用階段',
                    'default-stage'      => '預設階段',
                ],
            ],
        ],
    ],

];
