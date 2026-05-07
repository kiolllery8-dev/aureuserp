<?php

return [

    'uninstall' => [
        'title'   => '解除安裝確認',
        'message' => 'Are you sure you want to uninstall the :name plugin?',
        'warning' => '⚠️ This action cannot be undone and will permanently delete data.',
    ],

    'dependents' => [
        'title'         => '相依外掛',
        'description'   => 'These plugins depend on this one and will also be uninstalled.',
        'installed'     => '已安裝',
        'not_installed' => '未安裝',
    ],

    'data_impact' => [
        'title'       => '資料影響',
        'description' => 'The following database tables contain data that will be permanently已刪除.',
        'records'     => ':count records',
    ],

];
