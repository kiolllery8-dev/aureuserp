<?php

return [
    'navigation' => [
        'title' => '自訂欄位',
        'group' => '設定',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'fields' => [
                    'name'              => '名稱',
                    'code'              => '代碼',
                    'code-helper-text'  => '代碼必須以字母或底線開頭，只能包含字母、數字、底線。',
                ],
            ],

            'options' => [
                'title' => '選項',

                'fields' => [
                    'add-option' => '新增Option',
                ],
            ],

            'form-settings' => [
                'title' => '表單設定',

                'field-sets' => [
                    'validations' => [
                        'title' => '驗證規則',

                        'fields' => [
                            'validation'     => '驗證',
                            'field'          => '欄位',
                            'value'          => '值',
                            'add-validation' => '新增Validation',
                        ],
                    ],

                    'additional-settings' => [
                        'title' => '其他設定',

                        'fields' => [
                            'setting'     => '設定',
                            'value'       => '值',
                            'color'       => '顏色',
                            'add-setting' => '新增Setting',

                            'color-options' => [
                                'danger'    => '危險',
                                'info'      => '資訊',
                                'primary'   => '主要',
                                'secondary' => '次要',
                                'warning'   => '警告',
                                'success'   => '成功',
                            ],

                            'grid-options' => [
                                'row'    => '列',
                                'column' => '欄',
                            ],

                            'input-modes' => [
                                'text'     => '文字',
                                'email'    => '電子郵件',
                                'numeric'  => '數字',
                                'integer'  => '整數',
                                'password' => '密碼',
                                'tel'      => '電話',
                                'url'      => '網址',
                                'color'    => '顏色',
                                'none'     => '無',
                                'decimal'  => '小數',
                                'search'   => '搜尋',
                                'url'      => '網址',
                            ],
                        ],
                    ],
                ],

                'validations' => [
                    'common' => [
                        'gt'                   => '大於',
                        'gte'                  => '大於等於',
                        'lt'                   => '小於',
                        'lte'                  => '小於等於',
                        'max-size'             => '最大大小',
                        'min-size'             => '最小大小',
                        'multiple-of'          => '倍數',
                        'nullable'             => '可為空',
                        'prohibited'           => '禁止',
                        'prohibited-if'        => '若…則禁止',
                        'prohibited-unless'    => '除非…否則禁止',
                        'prohibits'            => '禁止',
                        'required'             => '必填',
                        'required-if'          => '若…則必填',
                        'required-if-accepted' => '若接受則必填',
                        'required-unless'      => '除非…否則必填',
                        'required-with'        => '與…一起必填',
                        'required-with-all'    => '與所有…一起必填',
                        'required-without'     => '若無…則必填',
                        'required-without-all' => '若皆無…則必填',
                        'rules'                => '自訂規則',
                        'unique'               => '唯一',
                    ],

                    'text' => [
                        'alpha-dash'        => '字母與短橫',
                        'alpha-num'         => '字母與數字',
                        'ascii'             => 'ASCII 字元',
                        'doesnt-end-with'   => "不以…結尾",
                        'doesnt-start-with' => "不以…開頭",
                        'ends-with'         => '以…結尾',
                        'filled'            => '已填寫',
                        'ip'                => 'IP 位址',
                        'ipv4'              => 'IPv4 位址',
                        'ipv6'              => 'IPv6 位址',
                        'length'            => '長度',
                        'mac-address'       => 'MAC 位址',
                        'max-length'        => '最大長度',
                        'min-length'        => '最小長度',
                        'regex'             => '正規式',
                        'starts-with'       => '以…開頭',
                        'ulid'              => 'ULID 識別碼',
                        'uuid'              => 'UUID 識別碼',
                    ],

                    'textarea' => [
                        'filled'     => '已填寫',
                        'max-length' => '最大長度',
                        'min-length' => '最小長度',
                    ],

                    'select' => [
                        'different'  => '不同',
                        'exists'     => '存在',
                        'in'         => '進',
                        'not-in'     => '不在其中',
                        'same'       => '相同',
                    ],

                    'radio' => [],

                    'checkbox' => [
                        'accepted' => '已接受',
                        'declined' => '已拒絕',
                    ],

                    'toggle' => [
                        'accepted' => '已接受',
                        'declined' => '已拒絕',
                    ],

                    'checkbox-list' => [
                        'in'        => '進',
                        'max-items' => '最多項目',
                        'min-items' => '最少項目',
                    ],

                    'datetime' => [
                        'after'           => '之後',
                        'after-or-equal'  => '之後或等於',
                        'before'          => '之前',
                        'before-or-equal' => '之前或等於',
                    ],

                    'editor' => [
                        'filled'     => '已填寫',
                        'max-length' => '最大長度',
                        'min-length' => '最小長度',
                    ],

                    'markdown' => [
                        'filled'     => '已填寫',
                        'max-length' => '最大長度',
                        'min-length' => '最小長度',
                    ],

                    'color' => [
                        'hex-color' => 'Hex 顏色',
                    ],
                ],

                'settings' => [
                    'text' => [
                        'autocapitalize'    => '自動大寫',
                        'autocomplete'      => '自動完成',
                        'autofocus'         => '自動聚焦',
                        'default'           => '預設值',
                        'disabled'          => '已停用',
                        'helper-text'       => '提示文字',
                        'hint'              => '提示',
                        'hint-color'        => '提示顏色',
                        'hint-icon'         => '提示圖示',
                        'id'                => '編號',
                        'input-mode'        => '輸入模式',
                        'mask'              => '遮罩',
                        'placeholder'       => '預設提示',
                        'prefix'            => '前綴',
                        'prefix-icon'       => '前置圖示',
                        'prefix-icon-color' => '前置圖示顏色',
                        'read-only'         => '唯讀',
                        'step'              => '步進',
                        'suffix'            => '後綴',
                        'suffix-icon'       => '後置圖示',
                        'suffix-icon-color' => '後置圖示顏色',
                    ],

                    'textarea' => [
                        'autofocus'    => '自動聚焦',
                        'autosize'     => '自動調整大小',
                        'cols'         => '欄',
                        'default'      => '預設值',
                        'disabled'     => '已停用',
                        'helperText'   => '提示文字',
                        'hint'         => '提示',
                        'hintColor'    => '提示顏色',
                        'hintIcon'     => '提示圖示',
                        'id'           => '編號',
                        'placeholder'  => '預設提示',
                        'read-only'    => '唯讀',
                        'rows'         => '列',
                    ],

                    'select' => [
                        'default'                   => '預設值',
                        'disabled'                  => '已停用',
                        'helper-text'               => '提示文字',
                        'hint'                      => '提示',
                        'hint-color'                => '提示顏色',
                        'hint-icon'                 => '提示圖示',
                        'id'                        => '編號',
                        'loading-message'           => '載入訊息',
                        'no-search-results-message' => '無搜尋結果訊息',
                        'options-limit'             => '選項上限',
                        'preload'                   => '預先載入',
                        'searchable'                => '可搜尋',
                        'search-debounce'           => '搜尋延遲',
                        'searching-message'         => '搜尋訊息',
                        'search-prompt'             => '搜尋提示',
                    ],

                    'radio' => [
                        'default'     => '預設值',
                        'disabled'    => '已停用',
                        'helper-text' => '提示文字',
                        'hint'        => '提示',
                        'hint-color'  => '提示顏色',
                        'hint-icon'   => '提示圖示',
                        'id'          => '編號',
                    ],

                    'checkbox' => [
                        'default'     => '預設值',
                        'disabled'    => '已停用',
                        'helper-text' => '提示文字',
                        'hint'        => '提示',
                        'hint-color'  => '提示顏色',
                        'hint-icon'   => '提示圖示',
                        'id'          => '編號',
                        'inline'      => '內嵌',
                    ],

                    'toggle' => [
                        'default'     => '預設值',
                        'disabled'    => '已停用',
                        'helper-text' => '提示文字',
                        'hint'        => '提示',
                        'hint-color'  => '提示顏色',
                        'hint-icon'   => '提示圖示',
                        'id'          => '編號',
                        'off-color'   => '關閉顏色',
                        'off-icon'    => '關閉圖示',
                        'on-color'    => '開啟顏色',
                        'on-icon'     => '開啟圖示',
                    ],

                    'checkbox-list' => [
                        'bulk-toggleable'           => '批次切換',
                        'columns'                   => '欄',
                        'default'                   => '預設值',
                        'disabled'                  => '已停用',
                        'grid-direction'            => '網格方向',
                        'helper-text'               => '提示文字',
                        'hint'                      => '提示',
                        'hint-color'                => '提示顏色',
                        'hint-icon'                 => '提示圖示',
                        'id'                        => '編號',
                        'max-items'                 => '最多項目',
                        'min-items'                 => '最少項目',
                        'no-search-results-message' => '無搜尋結果訊息',
                        'searchable'                => '可搜尋',
                    ],

                    'datetime' => [
                        'close-on-date-selection' => 'Close on日期 Selection',
                        'default'                 => '預設值',
                        'disabled'                => '已停用',
                        'disabled-dates'          => 'Disabled日期s',
                        'display-format'          => '顯示格式',
                        'first-fay-of-week'       => '週的第一天',
                        'format'                  => '格式',
                        'helper-text'             => '提示文字',
                        'hint'                    => '提示',
                        'hint-color'              => '提示顏色',
                        'hint-icon'               => '提示圖示',
                        'hours-step'              => '小時步進',
                        'id'                      => '編號',
                        'locale'                  => '語系',
                        'minutes-step'            => '分鐘步進',
                        'seconds'                 => '秒',
                        'seconds-step'            => '秒數步進',
                        'timezone'                => '時區',
                        'week-starts-on-monday'   => '週一為一週開始',
                        'week-starts-on-sunday'   => '週日為一週開始',
                    ],

                    'editor' => [
                        'default'      => '預設值',
                        'disabled'     => '已停用',
                        'helper-text'  => '提示文字',
                        'hint'         => '提示',
                        'hint-color'   => '提示顏色',
                        'hint-icon'    => '提示圖示',
                        'id'           => '編號',
                        'placeholder'  => '預設提示',
                        'read-only'    => '唯讀',
                    ],

                    'markdown' => [
                        'default'      => '預設值',
                        'disabled'     => '已停用',
                        'helper-text'  => '提示文字',
                        'hint'         => '提示',
                        'hint-color'   => '提示顏色',
                        'hint-icon'    => '提示圖示',
                        'id'           => '編號',
                        'placeholder'  => '預設提示',
                        'read-only'    => '唯讀',
                    ],

                    'color' => [
                        'default'     => '預設值',
                        'disabled'    => '已停用',
                        'helper-text' => '提示文字',
                        'hint'        => '提示',
                        'hint-color'  => '提示顏色',
                        'hint-icon'   => '提示圖示',
                        'hsl'         => 'HSL 色彩',
                        'id'          => '編號',
                        'rgb'         => 'RGB 色彩',
                        'rgba'        => 'RGBA 色彩',
                    ],

                    'file' => [
                        'accepted-file-types'                   => 'Accepted File類型s',
                        'append-files'                          => '附加檔案',
                        'deletable'                             => '可刪除',
                        'directory'                             => '目錄',
                        'downloadable'                          => '可下載',
                        'fetch-file-information'                => 'Fetch File資料',
                        'file-attachments-directory'            => '附件目錄',
                        'file-attachments-visibility'           => '附件可見度',
                        'image'                                 => '圖片',
                        'image-crop-aspect-ratio'               => '影像裁切比例',
                        'image-editor'                          => '影像編輯器',
                        'image-editor-aspect-ratios'            => '影像編輯比例',
                        'image-editor-empty-fill-color'         => '影像編輯空白填色',
                        'image-editor-mode'                     => '影像編輯模式',
                        'image-preview-height'                  => '影像預覽高度',
                        'image-resize-mode'                     => '影像調整模式',
                        'image-resize-target-height'            => '影像調整目標高度',
                        'image-resize-target-width'             => '影像調整目標寬度',
                        'loading-indicator-position'            => '載入指示位置',
                        'move-files'                            => '移動檔案',
                        'openable'                              => '可開啟',
                        'orient-images-from-exif'               => '依 EXIF 調整影像方向',
                        'panel-aspect-ratio'                    => '面板長寬比',
                        'panel-layout'                          => '面板佈局',
                        'previewable'                           => '可預覽',
                        'remove-uploaded-file-button-position'  => '移除Uploaded File Button Position',
                        'reorderable'                           => '可重新排序',
                        'store-files'                           => '儲存檔案',
                        'upload-button-position'                => '上傳按鈕位置',
                        'uploading-message'                     => '上傳中訊息',
                        'upload-progress-indicator-position'    => '上傳進度位置',
                        'visibility'                            => '可見度',
                    ],
                ],
            ],

            'table-settings' => [
                'title' => '表格設定',

                'fields' => [
                    'use-in-table'  => '在表格中使用',
                    'setting'       => '設定',
                    'value'         => '值',
                    'color'         => '顏色',
                    'alignment'     => '對齊',
                    'font-weight'   => '字重',
                    'icon-position' => '圖示位置',
                    'size'          => '大小',
                    'add-setting'   => '新增Setting',

                    'color-options' => [
                        'danger'    => '危險',
                        'info'      => '資訊',
                        'primary'   => '主要',
                        'secondary' => '次要',
                        'warning'   => '警告',
                        'success'   => '成功',
                    ],

                    'alignment-options' => [
                        'start'   => '開始',
                        'left'    => '靠左',
                        'center'  => '置中',
                        'end'     => '結束',
                        'right'   => '靠右',
                        'justify' => '兩端對齊',
                        'between' => '之間',
                    ],

                    'font-weight-options' => [
                        'extra-light' => '特細',
                        'light'       => '細體',
                        'normal'      => '標準',
                        'medium'      => '中',
                        'semi-bold'   => '半粗',
                        'bold'        => '粗體',
                        'extra-bold'  => '特粗',
                    ],

                    'icon-position-options' => [
                        'before'  => '之前',
                        'after'   => '之後',
                    ],

                    'size-options' => [
                        'extra-small' => '特小',
                        'small'       => '小',
                        'medium'      => '中',
                        'large'       => '大',
                    ],
                ],

                'settings' => [
                    'common' => [
                        'align-end'              => '對齊終點',
                        'alignment'              => '對齊',
                        'align-start'            => '對齊起點',
                        'badge'                  => '徽章',
                        'boolean'                => '布林值',
                        'color'                  => '顏色',
                        'copyable'               => '可複製',
                        'copy-message'           => '複製訊息',
                        'copy-message-duration'  => '複製訊息持續時間',
                        'default'                => '預設',
                        'filterable'             => '可篩選',
                        'groupable'              => '可群組化',
                        'grow'                   => '延展',
                        'icon'                   => '圖示',
                        'icon-color'             => '圖示顏色',
                        'icon-position'          => '圖示位置',
                        'label'                  => '標籤',
                        'limit'                  => '限制',
                        'line-clamp'             => '行數限制',
                        'money'                  => '金額',
                        'placeholder'            => '預設提示',
                        'prefix'                 => '前綴',
                        'searchable'             => '可搜尋',
                        'size'                   => '大小',
                        'sortable'               => '可排序',
                        'suffix'                 => '後綴',
                        'toggleable'             => '可切換',
                        'tooltip'                => '提示文字',
                        'vertical-alignment'     => '垂直對齊',
                        'vertically-align-start' => '垂直對齊起點',
                        'weight'                 => '重量',
                        'width'                  => '寬度',
                        'words'                  => '字數',
                        'wrap-header'            => '標題換行',
                        'column-span'            => '跨欄數',
                        'helper-text'            => '提示文字',
                        'hint'                   => '提示',
                        'hint-color'             => '提示顏色',
                        'hint-icon'              => '提示圖示',
                    ],

                    'datetime' => [
                        'date'              => '日期',
                        'date-time'         => 'Date時間',
                        'date-time-tooltip' => 'Date時間 Tooltip',
                        'since'             => '自',
                    ],
                ],
            ],

            'infolist-settings' => [
                'title' => '資訊清單設定',

                'fields' => [
                    'setting'       => '設定',
                    'value'         => '值',
                    'color'         => '顏色',
                    'font-weight'   => '字重',
                    'icon-position' => '圖示位置',
                    'size'          => '大小',
                    'add-setting'   => '新增Setting',

                    'color-options' => [
                        'danger'    => '危險',
                        'info'      => '資訊',
                        'primary'   => '主要',
                        'secondary' => '次要',
                        'warning'   => '警告',
                        'success'   => '成功',
                    ],

                    'font-weight-options' => [
                        'extra-light' => '特細',
                        'light'       => '細體',
                        'normal'      => '標準',
                        'medium'      => '中',
                        'semi-bold'   => '半粗',
                        'bold'        => '粗體',
                        'extra-bold'  => '特粗',
                    ],

                    'icon-position-options' => [
                        'before'  => '之前',
                        'after'   => '之後',
                    ],

                    'size-options' => [
                        'extra-small' => '特小',
                        'small'       => '小',
                        'medium'      => '中',
                        'large'       => '大',
                    ],
                ],

                'settings' => [
                    'common' => [
                        'align-end'              => '對齊終點',
                        'alignment'              => '對齊',
                        'align-start'            => '對齊起點',
                        'badge'                  => '徽章',
                        'boolean'                => '布林值',
                        'color'                  => '顏色',
                        'copyable'               => '可複製',
                        'copy-message'           => '複製訊息',
                        'copy-message-duration'  => '複製訊息持續時間',
                        'default'                => '預設',
                        'filterable'             => '可篩選',
                        'groupable'              => '可群組化',
                        'grow'                   => '延展',
                        'icon'                   => '圖示',
                        'icon-color'             => '圖示顏色',
                        'icon-position'          => '圖示位置',
                        'label'                  => '標籤',
                        'limit'                  => '限制',
                        'line-clamp'             => '行數限制',
                        'money'                  => '金額',
                        'placeholder'            => '預設提示',
                        'prefix'                 => '前綴',
                        'searchable'             => '可搜尋',
                        'size'                   => '大小',
                        'sortable'               => '可排序',
                        'suffix'                 => '後綴',
                        'toggleable'             => '可切換',
                        'tooltip'                => '提示文字',
                        'vertical-alignment'     => '垂直對齊',
                        'vertically-align-start' => '垂直對齊起點',
                        'weight'                 => '重量',
                        'width'                  => '寬度',
                        'words'                  => '字數',
                        'wrap-header'            => '標題換行',
                        'column-span'            => '跨欄數',
                        'helper-text'            => '提示文字',
                        'hint'                   => '提示',
                        'hint-color'             => '提示顏色',
                        'hint-icon'              => '提示圖示',
                    ],

                    'datetime' => [
                        'date'              => '日期',
                        'date-time'         => 'Date時間',
                        'date-time-tooltip' => 'Date時間 Tooltip',
                        'since'             => '自',
                    ],

                    'checkbox-list' => [
                        'separator'                => '分隔線',
                        'list-with-line-breaks'    => '換行清單',
                        'bulleted'                 => '項目符號',
                        'limit-list'               => 'Limit列表',
                        'expandable-limited-list'  => 'Expandable Limited列表',
                    ],

                    'select' => [
                        'separator'                => '分隔線',
                        'list-with-line-breaks'    => '換行清單',
                        'bulleted'                 => '項目符號',
                        'limit-list'               => 'Limit列表',
                        'expandable-limited-list'  => 'Expandable Limited列表',
                    ],

                    'checkbox' => [
                        'boolean'     => '布林值',
                        'false-icon'  => '否的圖示',
                        'true-icon'   => '是的圖示',
                        'true-color'  => '為真顏色',
                        'false-color' => '為假顏色',
                    ],

                    'toggle' => [
                        'boolean'     => '布林值',
                        'false-icon'  => '否的圖示',
                        'true-icon'   => '是的圖示',
                        'true-color'  => '為真顏色',
                        'false-color' => '為假顏色',
                    ],
                ],
            ],

            'settings' => [
                'title' => '設定',

                'fields' => [
                    'type'           => '類型',
                    'input-type'     => 'Input類型',
                    'is-multiselect' => '可複選',
                    'sort-order'     => '排序',

                    'type-options' => [
                        'text'          => '文字輸入',
                        'textarea'      => '多行文字',
                        'select'        => '選擇',
                        'checkbox'      => '核取方塊',
                        'radio'         => '單選',
                        'toggle'        => '切換',
                        'checkbox-list' => 'Checkbox列表',
                        'datetime'      => 'Date時間 Picker',
                        'editor'        => '富文本編輯器',
                        'markdown'      => 'Markdown 編輯器',
                        'color'         => '顏色選擇器',
                    ],

                    'input-type-options' => [
                        'text'     => '文字',
                        'email'    => '電子郵件',
                        'numeric'  => '數字',
                        'integer'  => '整數',
                        'password' => '密碼',
                        'tel'      => '電話',
                        'url'      => '網址',
                        'color'    => '顏色',
                    ],
                ],
            ],

            'resource' => [
                'title' => '資源',

                'fields' => [
                    'resource' => '資源',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'code'       => '代碼',
            'name'       => '名稱',
            'type'       => '類型',
            'resource'   => '資源',
            'created-at' => '建立時間',
        ],

        'groups' => [
        ],

        'filters' => [
            'type'     => '類型',
            'resource' => '資源',

            'type-options' => [
                'text'          => '文字輸入',
                'textarea'      => '多行文字',
                'select'        => '選擇',
                'checkbox'      => '核取方塊',
                'radio'         => '單選',
                'toggle'        => '切換',
                'checkbox-list' => 'Checkbox列表',
                'datetime'      => 'Date時間 Picker',
                'editor'        => '富文本編輯器',
                'markdown'      => 'Markdown 編輯器',
                'color'         => '顏色選擇器',
            ],
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => '欄位已還原',
                    'body'  => 'The field has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Field已刪除',
                    'body'  => 'The field has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Field force已刪除',
                    'body'  => 'The field has been force已刪除成功.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => '欄位已還原',
                    'body'  => 'The fields has been restored成功.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Fields已刪除',
                    'body'  => 'The fields has been已刪除成功.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Fields force已刪除',
                    'body'  => 'The fields has been force已刪除成功.',
                ],
            ],
        ],
    ],
];
