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
            'modal-description'         => '將掃描並註冊找到的新外掛。',
            'modal-submit-action-label' => '同步外掛',

            'notification' => [
                'success' => [
                    'title' => '外掛同步成功',
                    'body'  => '已找到並同步 :count 個新外掛。',
                ],

                'error' => [
                    'title' => '外掛同步失敗',
                    'body'  => '同步外掛時發生錯誤（:error），請重試。',
                ],
            ],
        ],
    ],
];
