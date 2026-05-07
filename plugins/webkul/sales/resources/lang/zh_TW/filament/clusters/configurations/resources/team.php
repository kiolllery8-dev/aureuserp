<?php

return [
    'title' => '銷售團隊',

    'navigation' => [
        'title' => '銷售團隊',
    ],

    'form' => [
        'sections' => [
            'fields' => [
                'name'     => '業務團隊',
                'status'   => '狀態',
                'fieldset' => [
                    'team-details' => [
                        'title'  => '團隊詳情',
                        'fields' => [
                            'team-leader'            => '團隊主管',
                            'company'                => '公司',
                            'invoiced-target'        => '開立目標',
                            'invoiced-target-suffix' => '/ Month',
                            'color'                  => '顏色',
                            'members'                => '成員',
                        ],
                    ],
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'id'              => '編號',
            'company'         => '公司',
            'team-leader'     => '團隊主管',
            'name'            => '名稱',
            'status'          => '狀態',
            'invoiced-target' => '開立目標',
            'color'           => '顏色',
            'created-by'      => '建立者',
            'created-at'      => '建立時間',
            'updated-at'      => '更新時間',
        ],

        'filters' => [
            'name'        => '名稱',
            'team-leader' => '團隊主管',
            'company'     => '公司',
            'created-by'  => '建立者',
            'updated-at'  => '更新時間',
            'created-at'  => '建立時間',
        ],

        'groups' => [
            'name'        => '名稱',
            'company'     => ' Company',
            'team-leader' => '團隊主管',
            'created-at'  => '建立時間',
            'updated-at'  => '更新時間',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => '銷售團隊已還原',
                    'body'  => 'The sales Team has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Sales Team已刪除',
                    'body'  => 'The sales Team has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Sales Team force已刪除',
                    'body'  => 'The sales Team has been force已刪除成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => '銷售團隊已還原',
                    'body'  => 'The sales Teams has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Sales Teams已刪除',
                    'body'  => 'The sales Teams has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Sales Teams force已刪除',
                    'body'  => 'The sales Teams has been force已刪除成功.',
                ],
            ],
        ],

        'empty-state-action' => [
            'create' => [
                'notification' => [
                    'title' => 'Sales Teams已建立',
                    'body'  => 'The sales Teams has been已建立成功.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'entries' => [
                'name'     => '業務團隊',
                'status'   => '狀態',
                'fieldset' => [
                    'team-details' => [
                        'title'   => '團隊詳情',
                        'entries' => [
                            'team-leader'            => '團隊主管',
                            'company'                => '公司',
                            'invoiced-target'        => '開立目標',
                            'invoiced-target-suffix' => '/ Month',
                            'color'                  => '顏色',
                            'members'                => '成員',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
