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
                    'stage-name'   => 'Stage Name',
                    'sort'         => 'Sequence Order',
                    'requirements' => 'Requirements',
                ],
            ],

            'tooltips' => [
                'title'       => 'Tooltips',
                'description' => 'Define the custom label for application status.',

                'fields' => [
                    'gray-label'          => 'Gray Label',
                    'gray-label-tooltip'  => 'The label for the gray status.',
                    'red-label'           => 'Red Label',
                    'red-label-tooltip'   => 'The label for the red status.',
                    'green-label'         => 'Green Label',
                    'green-label-tooltip' => 'The label for the green status.',
                ],
            ],

            'additional-information' => [
                'title' => 'Additional Information',

                'fields' => [
                    'job-positions' => '職位',
                    'folded'        => 'Folded',
                    'hired-stage'   => 'Hired Stage',
                    'default-stage' => 'Default Stage',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'id'                 => 'ID',
            'name'               => 'Stage Name',
            'hired-stage'        => 'Hired Stage',
            'default-stage'      => 'Default Stage',
            'folded'             => 'Folded',
            'job-positions'      => '職位',
            'created-by'         => '建立者',
            'created-at'         => '建立時間',
            'updated-at'         => '更新時間',
        ],

        'filters' => [
            'name'         => 'Stage Name',
            'job-position' => '職位',
            'folded'       => 'Folded',
            'gray-label'   => 'Gray Label',
            'red-label'    => 'Red Label',
            'green-label'  => 'Green Label',
            'created-by'   => '建立者',
            'created-at'   => '建立時間',
            'updated-at'   => '更新時間',
        ],

        'groups' => [
            'job-position' => '職位',
            'stage-name'   => 'Stage Name',
            'folded'       => 'Folded',
            'gray-label'   => 'Gray Label',
            'red-label'    => 'Red Label',
            'green-label'  => 'Green Label',
            'created-by'   => '建立者',
            'created-at'   => '建立時間',
            'updated-at'   => '更新時間',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Stages deleted',
                        'body'  => 'The Stages has been deleted成功.',
                    ],

                    'error' => [
                        'title' => 'Stages could not be deleted',
                        'body'  => 'The Stages cannot be deleted because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Stages deleted',
                    'body'  => 'The Stages has been deleted成功.',
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
                    'stage-name'   => 'Stage Name',
                    'sort'         => 'Sequence Order',
                    'requirements' => 'Requirements',
                ],
            ],

            'tooltips' => [
                'title'       => 'Tooltips',
                'description' => 'Define the custom label for application status.',

                'entries' => [
                    'gray-label'          => 'Gray Label',
                    'gray-label-tooltip'  => 'The label for the gray status.',
                    'red-label'           => 'Red Label',
                    'red-label-tooltip'   => 'The label for the red status.',
                    'green-label'         => 'Green Label',
                    'green-label-tooltip' => 'The label for the green status.',
                ],
            ],

            'additional-information' => [
                'title' => 'Additional Information',

                'entries' => [
                    'job-positions'      => '職位',
                    'folded'             => 'Folded',
                    'hired-stage'        => 'Hired Stage',
                    'default-stage'      => 'Default Stage',
                ],
            ],
        ],
    ],

];
