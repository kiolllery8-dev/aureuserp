<?php

return [
    'tooltip' => '篩選',

    'fields'  => [
        'search'             => '搜尋',
        'search-placeholder' => '搜尋訊息…',
        'type'               => '類型',
        'date'               => '日期',
        'sort-by'            => '排序方式',
        'pinned-only'        => '只看已釘選',
    ],
    'type-options' => [
        'all'          => '所有類型',
        'note'         => '備註',
        'comment'      => '留言',
        'notification' => '通知',
        'activity'     => '活動',
    ],
    'date-options' => [
        ''          => '任何時間',
        'today'     => '今天',
        'yesterday' => '昨天',
        'week'      => '最近 7 天',
        'month'     => '最近 30 天',
        'quarter'   => '最近 3 個月',
        'year'      => '去年',
    ],
    'sort-options' => [
        'created_at_desc' => '最新優先',
        'created_at_asc'  => '最舊優先',
        'updated_at_desc' => 'Recently已更新',
        'priority'        => '優先順序',
    ],
    'actions' => [
        'apply' => '套用篩選',
    ],
];
