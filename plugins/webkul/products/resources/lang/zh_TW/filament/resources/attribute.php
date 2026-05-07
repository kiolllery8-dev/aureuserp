<?php

return [
    'form' => [
        'sections' => [
            'general' => [
                'title'  => '一般',

                'fields' => [
                    'name' => '名稱',
                    'type' => '類型',
                ],
            ],

            'options' => [
                'title'  => '選項',

                'fields' => [
                    'name'        => '名稱',
                    'color'       => '顏色',
                    'extra-price' => 'Extra價格',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'        => '名稱',
            'type'        => '類型',
            'deleted-at'  => '刪除時間',
            'created-at'  => '建立時間',
            'updated-at'  => '更新時間',
        ],

        'groups' => [
            'type'       => '類型',
            'created-at' => '建立時間',
            'updated-at' => '更新時間',
        ],

        'filters' => [
            'type' => '類型',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => '屬性 restored',
                    'body'  => 'The attribute has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Attribute已刪除',
                    'body'  => 'The attribute has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => '屬性 force已刪除',
                        'body'  => 'The attribute has been force已刪除成功.',
                    ],

                    'error' => [
                        'title' => '屬性 could not be已刪除',
                        'body'  => 'The attribute cannot be已刪除 because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => '屬性 restored',
                    'body'  => 'The attributes has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Attributes已刪除',
                    'body'  => 'The attributes has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => '屬性 force已刪除',
                        'body'  => 'The attributes has been force已刪除成功.',
                    ],

                    'error' => [
                        'title' => '屬性 could not be已刪除',
                        'body'  => 'The attributes cannot be已刪除 because they are currently in use.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => '一般資料',

                'entries' => [
                    'name' => '名稱',
                    'type' => '類型',
                ],
            ],

            'record-information' => [
                'title' => '紀錄資料',

                'entries' => [
                    'creator'    => '建立者',
                    'created_at' => '建立時間',
                    'updated_at' => 'Last Updated At',
                ],
            ],
        ],
    ],
];
