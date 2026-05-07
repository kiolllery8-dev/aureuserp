<?php

return [
    'navigation' => [
        'title' => 'Custom Fields',
        'group' => '設定',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'fields' => [
                    'name'              => '名稱',
                    'code'              => '代碼',
                    'code-helper-text'  => '代碼 must start with a letter or underscore, and can only contain letters, numbers, and underscores.',
                ],
            ],

            'options' => [
                'title' => '選項',

                'fields' => [
                    'add-option' => '新增Option',
                ],
            ],

            'form-settings' => [
                'title' => 'Form 設定',

                'field-sets' => [
                    'validations' => [
                        'title' => 'Validations',

                        'fields' => [
                            'validation'     => 'Validation',
                            'field'          => 'Field',
                            'value'          => '值',
                            'add-validation' => '新增Validation',
                        ],
                    ],

                    'additional-settings' => [
                        'title' => 'Additional 設定',

                        'fields' => [
                            'setting'     => '設定',
                            'value'       => '值',
                            'color'       => '顏色',
                            'add-setting' => '新增Setting',

                            'color-options' => [
                                'danger'    => 'Danger',
                                'info'      => 'Info',
                                'primary'   => 'Primary',
                                'secondary' => 'Secondary',
                                'warning'   => 'Warning',
                                'success'   => 'Success',
                            ],

                            'grid-options' => [
                                'row'    => 'Row',
                                'column' => 'Column',
                            ],

                            'input-modes' => [
                                'text'     => 'Text',
                                'email'    => '電子郵件',
                                'numeric'  => 'Numeric',
                                'integer'  => 'Integer',
                                'password' => 'Password',
                                'tel'      => 'Telephone',
                                'url'      => 'URL',
                                'color'    => '顏色',
                                'none'     => '無',
                                'decimal'  => 'Decimal',
                                'search'   => '搜尋',
                                'url'      => 'URL',
                            ],
                        ],
                    ],
                ],

                'validations' => [
                    'common' => [
                        'gt'                   => 'Greater Than',
                        'gte'                  => 'Greater Than or Equal',
                        'lt'                   => 'Less Than',
                        'lte'                  => 'Less Than or Equal',
                        'max-size'             => 'Max Size',
                        'min-size'             => 'Min Size',
                        'multiple-of'          => 'Multiple Of',
                        'nullable'             => 'Nullable',
                        'prohibited'           => 'Prohibited',
                        'prohibited-if'        => 'Prohibited If',
                        'prohibited-unless'    => 'Prohibited Unless',
                        'prohibits'            => 'Prohibits',
                        'required'             => '必填',
                        'required-if'          => '必填 If',
                        'required-if-accepted' => '必填 If Accepted',
                        'required-unless'      => '必填 Unless',
                        'required-with'        => '必填 With',
                        'required-with-all'    => '必填 With All',
                        'required-without'     => '必填 Without',
                        'required-without-all' => '必填 Without All',
                        'rules'                => 'Custom Rules',
                        'unique'               => 'Unique',
                    ],

                    'text' => [
                        'alpha-dash'        => 'Alpha Dash',
                        'alpha-num'         => 'Alpha Numeric',
                        'ascii'             => 'ASCII',
                        'doesnt-end-with'   => "Doesn't End With",
                        'doesnt-start-with' => "Doesn't Start With",
                        'ends-with'         => 'Ends With',
                        'filled'            => 'Filled',
                        'ip'                => 'IP',
                        'ipv4'              => 'IPv4',
                        'ipv6'              => 'IPv6',
                        'length'            => 'Length',
                        'mac-address'       => 'MAC 地址',
                        'max-length'        => 'Max Length',
                        'min-length'        => 'Min Length',
                        'regex'             => 'Regex',
                        'starts-with'       => 'Starts With',
                        'ulid'              => 'ULID',
                        'uuid'              => 'UUID',
                    ],

                    'textarea' => [
                        'filled'     => 'Filled',
                        'max-length' => 'Max Length',
                        'min-length' => 'Min Length',
                    ],

                    'select' => [
                        'different'  => 'Different',
                        'exists'     => 'Exists',
                        'in'         => 'In',
                        'not-in'     => 'Not In',
                        'same'       => 'Same',
                    ],

                    'radio' => [],

                    'checkbox' => [
                        'accepted' => 'Accepted',
                        'declined' => 'Declined',
                    ],

                    'toggle' => [
                        'accepted' => 'Accepted',
                        'declined' => 'Declined',
                    ],

                    'checkbox-list' => [
                        'in'        => 'In',
                        'max-items' => 'Max Items',
                        'min-items' => 'Min Items',
                    ],

                    'datetime' => [
                        'after'           => 'After',
                        'after-or-equal'  => 'After or Equal',
                        'before'          => 'Before',
                        'before-or-equal' => 'Before or Equal',
                    ],

                    'editor' => [
                        'filled'     => 'Filled',
                        'max-length' => 'Max Length',
                        'min-length' => 'Min Length',
                    ],

                    'markdown' => [
                        'filled'     => 'Filled',
                        'max-length' => 'Max Length',
                        'min-length' => 'Min Length',
                    ],

                    'color' => [
                        'hex-color' => 'Hex 顏色',
                    ],
                ],

                'settings' => [
                    'text' => [
                        'autocapitalize'    => 'Autocapitalize',
                        'autocomplete'      => 'Autocomplete',
                        'autofocus'         => 'Autofocus',
                        'default'           => '預設值',
                        'disabled'          => '已停用',
                        'helper-text'       => '提示文字',
                        'hint'              => '提示',
                        'hint-color'        => '提示顏色',
                        'hint-icon'         => '提示圖示',
                        'id'                => '編號',
                        'input-mode'        => 'Input Mode',
                        'mask'              => 'Mask',
                        'placeholder'       => 'Placeholder',
                        'prefix'            => 'Prefix',
                        'prefix-icon'       => 'Prefix Icon',
                        'prefix-icon-color' => 'Prefix Icon 顏色',
                        'read-only'         => 'Read Only',
                        'step'              => 'Step',
                        'suffix'            => 'Suffix',
                        'suffix-icon'       => 'Suffix Icon',
                        'suffix-icon-color' => 'Suffix Icon 顏色',
                    ],

                    'textarea' => [
                        'autofocus'    => 'Autofocus',
                        'autosize'     => 'Autosize',
                        'cols'         => 'Columns',
                        'default'      => '預設值',
                        'disabled'     => '已停用',
                        'helperText'   => '提示文字',
                        'hint'         => '提示',
                        'hintColor'    => '提示顏色',
                        'hintIcon'     => '提示圖示',
                        'id'           => '編號',
                        'placeholder'  => 'Placeholder',
                        'read-only'    => 'Read Only',
                        'rows'         => 'Rows',
                    ],

                    'select' => [
                        'default'                   => '預設值',
                        'disabled'                  => '已停用',
                        'helper-text'               => '提示文字',
                        'hint'                      => '提示',
                        'hint-color'                => '提示顏色',
                        'hint-icon'                 => '提示圖示',
                        'id'                        => '編號',
                        'loading-message'           => 'Loading Message',
                        'no-search-results-message' => 'No Search Results Message',
                        'options-limit'             => '選項 Limit',
                        'preload'                   => 'Preload',
                        'searchable'                => 'Searchable',
                        'search-debounce'           => 'Search Debounce',
                        'searching-message'         => 'Searching Message',
                        'search-prompt'             => 'Search Prompt',
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
                        'inline'      => 'Inline',
                    ],

                    'toggle' => [
                        'default'     => '預設值',
                        'disabled'    => '已停用',
                        'helper-text' => '提示文字',
                        'hint'        => '提示',
                        'hint-color'  => '提示顏色',
                        'hint-icon'   => '提示圖示',
                        'id'          => '編號',
                        'off-color'   => 'Off 顏色',
                        'off-icon'    => 'Off Icon',
                        'on-color'    => 'On 顏色',
                        'on-icon'     => 'On Icon',
                    ],

                    'checkbox-list' => [
                        'bulk-toggleable'           => 'Bulk Toggleable',
                        'columns'                   => 'Columns',
                        'default'                   => '預設值',
                        'disabled'                  => '已停用',
                        'grid-direction'            => 'Grid Direction',
                        'helper-text'               => '提示文字',
                        'hint'                      => '提示',
                        'hint-color'                => '提示顏色',
                        'hint-icon'                 => '提示圖示',
                        'id'                        => '編號',
                        'max-items'                 => 'Max Items',
                        'min-items'                 => 'Min Items',
                        'no-search-results-message' => 'No Search Results Message',
                        'searchable'                => 'Searchable',
                    ],

                    'datetime' => [
                        'close-on-date-selection' => 'Close on日期 Selection',
                        'default'                 => '預設值',
                        'disabled'                => '已停用',
                        'disabled-dates'          => 'Disabled日期s',
                        'display-format'          => 'Display Format',
                        'first-fay-of-week'       => 'First Day of Week',
                        'format'                  => 'Format',
                        'helper-text'             => '提示文字',
                        'hint'                    => '提示',
                        'hint-color'              => '提示顏色',
                        'hint-icon'               => '提示圖示',
                        'hours-step'              => 'Hours Step',
                        'id'                      => '編號',
                        'locale'                  => 'Locale',
                        'minutes-step'            => 'Minutes Step',
                        'seconds'                 => 'Seconds',
                        'seconds-step'            => 'Seconds Step',
                        'timezone'                => '時區',
                        'week-starts-on-monday'   => 'Week Starts on Monday',
                        'week-starts-on-sunday'   => 'Week Starts on Sunday',
                    ],

                    'editor' => [
                        'default'      => '預設值',
                        'disabled'     => '已停用',
                        'helper-text'  => '提示文字',
                        'hint'         => '提示',
                        'hint-color'   => '提示顏色',
                        'hint-icon'    => '提示圖示',
                        'id'           => '編號',
                        'placeholder'  => 'Placeholder',
                        'read-only'    => 'Read Only',
                    ],

                    'markdown' => [
                        'default'      => '預設值',
                        'disabled'     => '已停用',
                        'helper-text'  => '提示文字',
                        'hint'         => '提示',
                        'hint-color'   => '提示顏色',
                        'hint-icon'    => '提示圖示',
                        'id'           => '編號',
                        'placeholder'  => 'Placeholder',
                        'read-only'    => 'Read Only',
                    ],

                    'color' => [
                        'default'     => '預設值',
                        'disabled'    => '已停用',
                        'helper-text' => '提示文字',
                        'hint'        => '提示',
                        'hint-color'  => '提示顏色',
                        'hint-icon'   => '提示圖示',
                        'hsl'         => 'HSL',
                        'id'          => '編號',
                        'rgb'         => 'RGB',
                        'rgba'        => 'RGBA',
                    ],

                    'file' => [
                        'accepted-file-types'                   => 'Accepted File類型s',
                        'append-files'                          => 'Append 檔案',
                        'deletable'                             => 'Deletable',
                        'directory'                             => 'Directory',
                        'downloadable'                          => 'Downloadable',
                        'fetch-file-information'                => 'Fetch File資料',
                        'file-attachments-directory'            => '檔案 Attachments Directory',
                        'file-attachments-visibility'           => '檔案 Attachments Visibility',
                        'image'                                 => '圖片',
                        'image-crop-aspect-ratio'               => '圖片 Crop Aspect Ratio',
                        'image-editor'                          => '圖片 Editor',
                        'image-editor-aspect-ratios'            => '圖片 Editor Aspect Ratios',
                        'image-editor-empty-fill-color'         => '圖片 Editor Empty Fill 顏色',
                        'image-editor-mode'                     => '圖片 Editor Mode',
                        'image-preview-height'                  => '圖片 Preview Height',
                        'image-resize-mode'                     => '圖片 Resize Mode',
                        'image-resize-target-height'            => '圖片 Resize Target Height',
                        'image-resize-target-width'             => '圖片 Resize Target Width',
                        'loading-indicator-position'            => 'Loading Indicator Position',
                        'move-files'                            => 'Move 檔案',
                        'openable'                              => 'Openable',
                        'orient-images-from-exif'               => 'Orient 圖片 from EXIF',
                        'panel-aspect-ratio'                    => 'Panel Aspect Ratio',
                        'panel-layout'                          => 'Panel Layout',
                        'previewable'                           => 'Previewable',
                        'remove-uploaded-file-button-position'  => '移除Uploaded 檔案 Button Position',
                        'reorderable'                           => 'Reorderable',
                        'store-files'                           => 'Store 檔案',
                        'upload-button-position'                => 'Upload Button Position',
                        'uploading-message'                     => 'Uploading Message',
                        'upload-progress-indicator-position'    => 'Upload Progress Indicator Position',
                        'visibility'                            => 'Visibility',
                    ],
                ],
            ],

            'table-settings' => [
                'title' => 'Table 設定',

                'fields' => [
                    'use-in-table'  => 'Use in Table',
                    'setting'       => '設定',
                    'value'         => '值',
                    'color'         => '顏色',
                    'alignment'     => 'Alignment',
                    'font-weight'   => 'Font 重量',
                    'icon-position' => 'Icon Position',
                    'size'          => 'Size',
                    'add-setting'   => '新增Setting',

                    'color-options' => [
                        'danger'    => 'Danger',
                        'info'      => 'Info',
                        'primary'   => 'Primary',
                        'secondary' => 'Secondary',
                        'warning'   => 'Warning',
                        'success'   => 'Success',
                    ],

                    'alignment-options' => [
                        'start'   => 'Start',
                        'left'    => 'Left',
                        'center'  => 'Center',
                        'end'     => 'End',
                        'right'   => 'Right',
                        'justify' => 'Justify',
                        'between' => 'Between',
                    ],

                    'font-weight-options' => [
                        'extra-light' => 'Extra Light',
                        'light'       => 'Light',
                        'normal'      => 'Normal',
                        'medium'      => '中',
                        'semi-bold'   => 'Semi Bold',
                        'bold'        => 'Bold',
                        'extra-bold'  => 'Extra Bold',
                    ],

                    'icon-position-options' => [
                        'before'  => 'Before',
                        'after'   => 'After',
                    ],

                    'size-options' => [
                        'extra-small' => 'Extra Small',
                        'small'       => 'Small',
                        'medium'      => '中',
                        'large'       => 'Large',
                    ],
                ],

                'settings' => [
                    'common' => [
                        'align-end'              => 'Align End',
                        'alignment'              => 'Alignment',
                        'align-start'            => 'Align Start',
                        'badge'                  => 'Badge',
                        'boolean'                => 'Boolean',
                        'color'                  => '顏色',
                        'copyable'               => 'Copyable',
                        'copy-message'           => 'Copy Message',
                        'copy-message-duration'  => 'Copy Message Duration',
                        'default'                => '預設',
                        'filterable'             => 'Filterable',
                        'groupable'              => 'Groupable',
                        'grow'                   => 'Grow',
                        'icon'                   => 'Icon',
                        'icon-color'             => 'Icon 顏色',
                        'icon-position'          => 'Icon Position',
                        'label'                  => '標籤',
                        'limit'                  => 'Limit',
                        'line-clamp'             => 'Line Clamp',
                        'money'                  => 'Money',
                        'placeholder'            => 'Placeholder',
                        'prefix'                 => 'Prefix',
                        'searchable'             => 'Searchable',
                        'size'                   => 'Size',
                        'sortable'               => 'Sortable',
                        'suffix'                 => 'Suffix',
                        'toggleable'             => 'Toggleable',
                        'tooltip'                => 'Tooltip',
                        'vertical-alignment'     => 'Vertical Alignment',
                        'vertically-align-start' => 'Vertically Align Start',
                        'weight'                 => '重量',
                        'width'                  => 'Width',
                        'words'                  => 'Words',
                        'wrap-header'            => 'Wrap Header',
                        'column-span'            => 'Column Span',
                        'helper-text'            => '提示文字',
                        'hint'                   => '提示',
                        'hint-color'             => '提示顏色',
                        'hint-icon'              => '提示圖示',
                    ],

                    'datetime' => [
                        'date'              => '日期',
                        'date-time'         => 'Date時間',
                        'date-time-tooltip' => 'Date時間 Tooltip',
                        'since'             => 'Since',
                    ],
                ],
            ],

            'infolist-settings' => [
                'title' => 'Infolist 設定',

                'fields' => [
                    'setting'       => '設定',
                    'value'         => '值',
                    'color'         => '顏色',
                    'font-weight'   => 'Font 重量',
                    'icon-position' => 'Icon Position',
                    'size'          => 'Size',
                    'add-setting'   => '新增Setting',

                    'color-options' => [
                        'danger'    => 'Danger',
                        'info'      => 'Info',
                        'primary'   => 'Primary',
                        'secondary' => 'Secondary',
                        'warning'   => 'Warning',
                        'success'   => 'Success',
                    ],

                    'font-weight-options' => [
                        'extra-light' => 'Extra Light',
                        'light'       => 'Light',
                        'normal'      => 'Normal',
                        'medium'      => '中',
                        'semi-bold'   => 'Semi Bold',
                        'bold'        => 'Bold',
                        'extra-bold'  => 'Extra Bold',
                    ],

                    'icon-position-options' => [
                        'before'  => 'Before',
                        'after'   => 'After',
                    ],

                    'size-options' => [
                        'extra-small' => 'Extra Small',
                        'small'       => 'Small',
                        'medium'      => '中',
                        'large'       => 'Large',
                    ],
                ],

                'settings' => [
                    'common' => [
                        'align-end'              => 'Align End',
                        'alignment'              => 'Alignment',
                        'align-start'            => 'Align Start',
                        'badge'                  => 'Badge',
                        'boolean'                => 'Boolean',
                        'color'                  => '顏色',
                        'copyable'               => 'Copyable',
                        'copy-message'           => 'Copy Message',
                        'copy-message-duration'  => 'Copy Message Duration',
                        'default'                => '預設',
                        'filterable'             => 'Filterable',
                        'groupable'              => 'Groupable',
                        'grow'                   => 'Grow',
                        'icon'                   => 'Icon',
                        'icon-color'             => 'Icon 顏色',
                        'icon-position'          => 'Icon Position',
                        'label'                  => '標籤',
                        'limit'                  => 'Limit',
                        'line-clamp'             => 'Line Clamp',
                        'money'                  => 'Money',
                        'placeholder'            => 'Placeholder',
                        'prefix'                 => 'Prefix',
                        'searchable'             => 'Searchable',
                        'size'                   => 'Size',
                        'sortable'               => 'Sortable',
                        'suffix'                 => 'Suffix',
                        'toggleable'             => 'Toggleable',
                        'tooltip'                => 'Tooltip',
                        'vertical-alignment'     => 'Vertical Alignment',
                        'vertically-align-start' => 'Vertically Align Start',
                        'weight'                 => '重量',
                        'width'                  => 'Width',
                        'words'                  => 'Words',
                        'wrap-header'            => 'Wrap Header',
                        'column-span'            => 'Column Span',
                        'helper-text'            => '提示文字',
                        'hint'                   => '提示',
                        'hint-color'             => '提示顏色',
                        'hint-icon'              => '提示圖示',
                    ],

                    'datetime' => [
                        'date'              => '日期',
                        'date-time'         => 'Date時間',
                        'date-time-tooltip' => 'Date時間 Tooltip',
                        'since'             => 'Since',
                    ],

                    'checkbox-list' => [
                        'separator'                => 'Separator',
                        'list-with-line-breaks'    => 'List with Line Breaks',
                        'bulleted'                 => 'Bulleted',
                        'limit-list'               => 'Limit列表',
                        'expandable-limited-list'  => 'Expandable Limited列表',
                    ],

                    'select' => [
                        'separator'                => 'Separator',
                        'list-with-line-breaks'    => 'List with Line Breaks',
                        'bulleted'                 => 'Bulleted',
                        'limit-list'               => 'Limit列表',
                        'expandable-limited-list'  => 'Expandable Limited列表',
                    ],

                    'checkbox' => [
                        'boolean'     => 'Boolean',
                        'false-icon'  => 'False Icon',
                        'true-icon'   => 'True Icon',
                        'true-color'  => 'True 顏色',
                        'false-color' => 'False 顏色',
                    ],

                    'toggle' => [
                        'boolean'     => 'Boolean',
                        'false-icon'  => 'False Icon',
                        'true-icon'   => 'True Icon',
                        'true-color'  => 'True 顏色',
                        'false-color' => 'False 顏色',
                    ],
                ],
            ],

            'settings' => [
                'title' => '設定',

                'fields' => [
                    'type'           => '類型',
                    'input-type'     => 'Input類型',
                    'is-multiselect' => 'Is Multiselect',
                    'sort-order'     => 'Sort 訂單',

                    'type-options' => [
                        'text'          => 'Text Input',
                        'textarea'      => 'Textarea',
                        'select'        => '選擇',
                        'checkbox'      => 'Checkbox',
                        'radio'         => 'Radio',
                        'toggle'        => '切換',
                        'checkbox-list' => 'Checkbox列表',
                        'datetime'      => 'Date時間 Picker',
                        'editor'        => 'Rich Text Editor',
                        'markdown'      => 'Markdown Editor',
                        'color'         => '顏色 Picker',
                    ],

                    'input-type-options' => [
                        'text'     => 'Text',
                        'email'    => '電子郵件',
                        'numeric'  => 'Numeric',
                        'integer'  => 'Integer',
                        'password' => 'Password',
                        'tel'      => 'Telephone',
                        'url'      => 'URL',
                        'color'    => '顏色',
                    ],
                ],
            ],

            'resource' => [
                'title' => 'Resource',

                'fields' => [
                    'resource' => 'Resource',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'code'       => '代碼',
            'name'       => '名稱',
            'type'       => '類型',
            'resource'   => 'Resource',
            'created-at' => '建立時間',
        ],

        'groups' => [
        ],

        'filters' => [
            'type'     => '類型',
            'resource' => 'Resource',

            'type-options' => [
                'text'          => 'Text Input',
                'textarea'      => 'Textarea',
                'select'        => '選擇',
                'checkbox'      => 'Checkbox',
                'radio'         => 'Radio',
                'toggle'        => '切換',
                'checkbox-list' => 'Checkbox列表',
                'datetime'      => 'Date時間 Picker',
                'editor'        => 'Rich Text Editor',
                'markdown'      => 'Markdown Editor',
                'color'         => '顏色 Picker',
            ],
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Field restored',
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
                    'title' => 'Fields restored',
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
