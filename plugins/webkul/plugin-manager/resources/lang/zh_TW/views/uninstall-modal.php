<?php

return [

    'uninstall' => [
        'title'   => '解除安裝確認',
        'message' => '確定要解除安裝功能 :name 嗎？',
        'warning' => '⚠️ 此動作無法復原，會永久刪除資料。',
    ],

    'dependents' => [
        'title'         => '相依功能',
        'description'   => '下列功能相依於此，會一併解除安裝。',
        'installed'     => '已安裝',
        'not_installed' => '未安裝',
    ],

    'data_impact' => [
        'title'       => '資料影響',
        'description' => 'The following database tables contain data that will be permanently已刪除.',
        'records'     => ':count records',
    ],

];
