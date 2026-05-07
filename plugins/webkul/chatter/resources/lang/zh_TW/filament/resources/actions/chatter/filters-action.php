<?php

return [
    'tooltip' => '篩選',

    'fields'  => [
        'search'             => '搜尋',
        'search-placeholder' => 'Search messages...',
        'type'               => '類型',
        'date'               => '日期',
        'sort-by'            => 'Sort by',
        'pinned-only'        => 'Pinned only',
    ],
    'type-options' => [
        'all'          => 'All types',
        'note'         => '備註',
        'comment'      => '留言',
        'notification' => 'Notifications',
        'activity'     => '活動',
    ],
    'date-options' => [
        ''          => 'Any time',
        'today'     => 'Today',
        'yesterday' => 'Yesterday',
        'week'      => 'Last 7 days',
        'month'     => 'Last 30 days',
        'quarter'   => 'Last 3 months',
        'year'      => 'Last year',
    ],
    'sort-options' => [
        'created_at_desc' => 'Newest first',
        'created_at_asc'  => 'Oldest first',
        'updated_at_desc' => 'Recently已更新',
        'priority'        => '優先順序',
    ],
    'actions' => [
        'apply' => 'Apply filters',
    ],
];
