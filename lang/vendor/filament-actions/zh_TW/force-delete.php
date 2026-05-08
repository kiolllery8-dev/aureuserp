<?php

return [
  'single' => 
  [
    'label' => '強制刪除',
    'modal' => 
    [
      'heading' => '強制刪除 :label',
      'actions' => 
      [
        'delete' => 
        [
          'label' => '刪除',
        ],
      ],
    ],
    'notifications' => 
    [
      'deleted' => 
      [
        'title' => '已刪除資料',
      ],
    ],
  ],
  'multiple' => 
  [
    'label' => '強制刪除所選的項目',
    'modal' => 
    [
      'heading' => '強制刪除所選的 :label',
      'actions' => 
      [
        'delete' => 
        [
          'label' => '刪除',
        ],
      ],
    ],
    'notifications' => 
    [
      'deleted' => 
      [
        'title' => '已刪除資料',
      ],
      'deleted_partial' => 
      [
        'title' => '已強制刪除 :count 筆，共 :total 筆',
        'missing_authorization_failure_message' => '您沒有強制刪除其中 :count 筆的權限。',
        'missing_processing_failure_message' => '其中 :count 筆無法強制刪除。',
      ],
      'deleted_none' => 
      [
        'title' => '強制刪除失敗',
        'missing_authorization_failure_message' => '您沒有強制刪除這 :count 筆的權限。',
        'missing_processing_failure_message' => '這 :count 筆無法強制刪除。',
      ],
    ],
  ],
];
