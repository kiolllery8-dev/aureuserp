<?php

return [
    'navigation' => [
        'title' => '功能',
    ],

    'tabs' => [
        'apps'          => '應用',
        'extra'         => '額外',
        'installed'     => '已安裝',
        'not-installed' => '未安裝',
    ],

    'header-actions' => [
        'sync' => [
            'label'                     => '同步可用功能',
            'modal-heading'             => '同步功能',
            'modal-description'         => '將掃描並註冊找到的新功能。',
            'modal-submit-action-label' => '同步功能',

            'notification' => [
                'success' => [
                    'title' => '功能同步成功',
                    'body'  => '已找到並同步 :count 個新功能。',
                ],

                'error' => [
                    'title' => '功能同步失敗',
                    'body'  => '同步功能時發生錯誤（:error），請重試。',
                ],
            ],
        ],
    ],
];
