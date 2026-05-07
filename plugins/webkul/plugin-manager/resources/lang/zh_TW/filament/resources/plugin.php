<?php

return [

    'navigation' => [
        'group' => '外掛',
    ],

    'title' => '外掛',

    'table' => [
        'version'             => '版本',
        'dependencies'        => '相依套件',
        'dependencies_suffix' => ' 相依套件',
    ],

    'status' => [
        'installed'     => '已安裝',
        'not_installed' => '未安裝',
    ],

    'filters' => [
        'installation_status' => 'Installation狀態',
        'all_plugins'         => '所有外掛',
        'installed'           => '已安裝',
        'not_installed'       => '未安裝',
        'active_status'       => 'Active狀態',
        'author'              => '作者',
        'webkul'              => 'Webkul',
        'third_party'         => '第三方',
    ],

    'actions' => [
        'install' => [
            'title'       => '安裝',
            'heading'     => 'Install Plugin :name',
            'description' => "Are you sure you want to install the ':name' plugin? This will run migrations and seeders.",
            'submit'      => 'Install Plugin',
        ],
        'uninstall' => [
            'title'      => '解除安裝',
            'heading'    => '解除安裝外掛',
            'submit'     => '解除安裝外掛',
        ],
    ],

    'notifications' => [
        'installed' => [
            'title' => '外掛安裝成功',
            'body'  => "The ':name' plugin has been installed.",
        ],
        'installed-failed' => [
            'title' => '安裝失敗',
        ],
        'uninstalled' => [
            'title' => '外掛解除安裝成功',
            'body'  => "The ':name' plugin has been uninstalled.",
        ],
        'uninstalled-failed' => [
            'title' => '解除安裝失敗',
        ],
    ],

    'infolist' => [
        'section'  => [
            'plugin'       => ' Plugin資料',
            'dependencies' => '相依套件',
        ],
        'name'         => 'Plugin名稱',
        'version'      => '版本',
        'dependencies' => 'Required Plugins',
        'dependents'   => '相依此外掛的外掛',
        'is_installed' => 'Installation狀態',
        'license'      => '授權',
        'summary'      => '說明',

        'dependencies-repeater' => [
            'title'        => 'Required Plugins',
            'name'         => 'Plugin名稱',
            'is_installed' => '已安裝',
            'placeholder'  => '不需相依套件',
        ],

        'dependents-repeater' => [
            'title'        => '相依此外掛的外掛',
            'name'         => 'Plugin名稱',
            'is_installed' => '已安裝',
            'placeholder'  => '沒有相依者',
        ],

    ],

];
