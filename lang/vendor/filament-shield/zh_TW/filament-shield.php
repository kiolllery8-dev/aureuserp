<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Table Columns
    |--------------------------------------------------------------------------
    */

    'column.name' => '名稱',
    'column.guard_name' => 'Guard名稱',
    'column.roles' => '角色',
    'column.permissions' => '權限',
    'column.updated_at' => '更新時間',

    /*
    |--------------------------------------------------------------------------
    | Form Fields
    |--------------------------------------------------------------------------
    */

    'field.name' => '名稱',
    'field.guard_name' => 'Guard名稱',
    'field.permissions' => '權限',
    'field.select_all.name' => '全選',
    'field.select_all.message' => 'Enable all Permissions currently <span class="text-primary font-medium">Enabled</span> for this role',

    /*
    |--------------------------------------------------------------------------
    | Navigation & Resource
    |--------------------------------------------------------------------------
    */

    'nav.group' => '設定',
    'nav.role.label' => '角色',
    'nav.role.icon' => 'heroicon-o-shield-check',
    'resource.label.role' => '角色',
    'resource.label.roles' => '角色',

    /*
    |--------------------------------------------------------------------------
    | Section & Tabs
    |--------------------------------------------------------------------------
    */

    'section' => 'Entities',
    'resources' => 'Resources',
    'widgets' => 'Widgets',
    'pages' => '頁面',
    'custom' => 'Custom Permissions',

    /*
    |--------------------------------------------------------------------------
    | Messages
    |--------------------------------------------------------------------------
    */

    'forbidden' => 'You do not have permission to access',

    /*
    |--------------------------------------------------------------------------
    | Resource Permissions' Labels
    |--------------------------------------------------------------------------
    */

    'resource_permission_prefixes_labels' => [
        'view' => '檢視',
        'view_any' => '檢視Any',
        'create' => '新增',
        'update' => '更新',
        'delete' => '刪除',
        'delete_any' => '刪除Any',
        'force_delete' => 'Force Delete',
        'force_delete_any' => 'Force 刪除Any',
        'restore' => '還原',
        'reorder' => 'Reorder',
        'restore_any' => 'Restore Any',
        'replicate' => 'Replicate',
    ],
];
