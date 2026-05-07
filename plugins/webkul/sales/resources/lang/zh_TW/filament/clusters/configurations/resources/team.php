<?php

return [
    'title' => 'Sales Teams',

    'navigation' => [
        'title' => 'Sales Teams',
    ],

    'form' => [
        'sections' => [
            'fields' => [
                'name'     => 'Sales Team',
                'status'   => '狀態',
                'fieldset' => [
                    'team-details' => [
                        'title'  => 'Team Details',
                        'fields' => [
                            'team-leader'            => 'Team Leader',
                            'company'                => '公司',
                            'invoiced-target'        => 'Invoiced Target',
                            'invoiced-target-suffix' => '/ Month',
                            'color'                  => 'Color',
                            'members'                => 'Members',
                        ],
                    ],
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'id'              => 'ID',
            'company'         => '公司',
            'team-leader'     => 'Team Leader',
            'name'            => '名稱',
            'status'          => '狀態',
            'invoiced-target' => 'Invoiced Target',
            'color'           => 'Color',
            'created-by'      => '建立者',
            'created-at'      => '建立時間',
            'updated-at'      => '更新時間',
        ],

        'filters' => [
            'name'        => '名稱',
            'team-leader' => 'Team Leader',
            'company'     => '公司',
            'created-by'  => '建立者',
            'updated-at'  => '更新時間',
            'created-at'  => '建立時間',
        ],

        'groups' => [
            'name'        => '名稱',
            'company'     => ' Company',
            'team-leader' => 'Team Leader',
            'created-at'  => '建立時間',
            'updated-at'  => '更新時間',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Sales Team restored',
                    'body'  => 'The sales Team has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Sales Team deleted',
                    'body'  => 'The sales Team has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Sales Team force deleted',
                    'body'  => 'The sales Team has been force deleted成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Sales Teams restored',
                    'body'  => 'The sales Teams has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Sales Teams deleted',
                    'body'  => 'The sales Teams has been deleted成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Sales Teams force deleted',
                    'body'  => 'The sales Teams has been force deleted成功.',
                ],
            ],
        ],

        'empty-state-action' => [
            'create' => [
                'notification' => [
                    'title' => 'Sales Teams created',
                    'body'  => 'The sales Teams has been created成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'entries' => [
                'name'     => 'Sales Team',
                'status'   => '狀態',
                'fieldset' => [
                    'team-details' => [
                        'title'   => 'Team Details',
                        'entries' => [
                            'team-leader'            => 'Team Leader',
                            'company'                => '公司',
                            'invoiced-target'        => 'Invoiced Target',
                            'invoiced-target-suffix' => '/ Month',
                            'color'                  => 'Color',
                            'members'                => 'Members',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
