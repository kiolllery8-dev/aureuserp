<?php

return [
    'navigation' => [
        'title' => '外掛',
    ],

    'tabs' => [
        'apps'          => '應用',
        'extra'         => '額外',
        'installed'     => '已安裝',
        'not-installed' => '未安裝',
    ],

    'header-actions' => [
        'sync' => [
            'label'                     => '同步可用外掛',
            'modal-heading'             => '同步外掛',
            'modal-description'         => 'This will scan and register any new plugins found.',
            'modal-submit-action-label' => '同步外掛',

            'notification' => [
                'success' => [
                    'title' => '外掛同步成功',
                    'body'  => 'Found and synced :count new plugin(s).',
                ],

                'error' => [
                    'title' => '外掛同步失敗',
                    'body'  => 'An error (:error) occurred while syncing plugins. Please try again.',
                ],
            ],
        ],
    ],
];
