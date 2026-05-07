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
                    'color'       => 'Color',
                    'extra-price' => 'Extra Price',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'        => '名稱',
            'type'        => '類型',
            'deleted-at'  => 'Deleted At',
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
                    'title' => 'Attribute restored',
                    'body'  => 'The attribute has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Attribute deleted',
                    'body'  => 'The attribute has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Attribute force deleted',
                        'body'  => 'The attribute has been force deleted成功.',
                    ],

                    'error' => [
                        'title' => 'Attribute could not be deleted',
                        'body'  => 'The attribute cannot be deleted because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Attributes restored',
                    'body'  => 'The attributes has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Attributes deleted',
                    'body'  => 'The attributes has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Attributes force deleted',
                        'body'  => 'The attributes has been force deleted成功.',
                    ],

                    'error' => [
                        'title' => 'Attributes could not be deleted',
                        'body'  => 'The attributes cannot be deleted because they are currently in use.',
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
                'title' => 'Record Information',

                'entries' => [
                    'creator'    => '建立者',
                    'created_at' => '建立時間',
                    'updated_at' => 'Last Updated At',
                ],
            ],
        ],
    ],
];
