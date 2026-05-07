<?php

return [
    'navigation' => [
        'title' => '里程碑',
    ],

    'form' => [
        'name'         => '名稱',
        'deadline'     => '截止日',
        'is-completed' => 'Is 已完成',
        'project'      => '專案',
    ],

    'table' => [
        'columns' => [
            'name'         => '名稱',
            'deadline'     => '截止日',
            'is-completed' => 'Is 已完成',
            'completed-at' => '已完成 At',
            'project'      => '專案',
            'creator'      => '建立者',
            'created-at'   => '建立時間',
            'updated-at'   => '更新時間',
        ],

        'groups' => [
            'name'         => '名稱',
            'is-completed' => 'Is 已完成',
            'project'      => '專案',
            'created-at'   => '建立時間',
        ],

        'filters' => [
            'is-completed' => 'Is 已完成',
            'project'      => '專案',
            'creator'      => '建立者',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Milestone update',
                    'body'  => 'The milestone has been update成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Milestone已刪除',
                    'body'  => 'The milestone has been已刪除成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Milestones已刪除',
                    'body'  => 'The milestones has been已刪除成功.',
                ],
            ],
        ],
    ],
];
