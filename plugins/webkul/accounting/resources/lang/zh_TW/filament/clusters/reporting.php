<?php

return [
    'navigation' => [
        'title' => '報表',
        'group' => '會計',
    ],
    'pages' => [
        'balance-sheet' => [
            'navigation' => [
                'title' => '資產負債表',
                'group' => '明細報表',
            ],
            'actions' => [
                'export-excel' => '匯出 Excel',
                'export-pdf'   => '匯出 PDF',
            ],
            'filters' => [
                'date-range' => '日期範圍',
                'journals'   => '帳本',
            ],
            'content' => [
                'sections' => [
                    'assets' => [
                        'title'       => '資產',
                        'total-label' => '總資產',
                        'subsections' => [
                            'current-assets' => [
                                'title'       => '流動資產',
                                'total-label' => '總流動資產',
                            ],
                            'fixed-assets' => [
                                'title'       => '固定資產',
                                'total-label' => '總固定資產',
                            ],
                            'non-current-assets' => [
                                'title'       => '非流動資產',
                                'total-label' => '總非流動資產',
                            ],
                        ],
                    ],
                    'liabilities' => [
                        'title'       => '負債',
                        'total-label' => '總負債',
                        'subsections' => [
                            'current-liabilities' => [
                                'title'       => '流動負債',
                                'total-label' => '總流動負債',
                            ],
                            'non-current-liabilities' => [
                                'title'       => '非流動負債',
                                'total-label' => '總非流動負債',
                            ],
                        ],
                    ],
                    'equity' => [
                        'title'       => '權益',
                        'total-label' => '總權益',
                        'subsections' => [
                            'unallocated-earnings' => [
                                'title'          => '未分配盈餘',
                                'current-year'   => '本年度未分配盈餘',
                                'previous-years' => '前年度未分配盈餘',
                                'total-label'    => '總未分配盈餘',
                            ],
                            'retained-earnings' => [
                                'title'       => '保留盈餘',
                                'total-label' => '總保留盈餘',
                            ],
                        ],
                    ],
                ],
                'grand-total-label' => '負債 + 權益',
            ],
        ],
        'profit-loss' => [
            'navigation' => [
                'title' => '損益表',
                'group' => '明細報表',
            ],
            'actions' => [
                'export-excel' => '匯出 Excel',
                'export-pdf'   => '匯出 PDF',
            ],
            'filters' => [
                'date-range' => '日期範圍',
                'journals'   => '帳本',
            ],
            'content' => [
                'sections' => [
                    'revenue' => [
                        'title'         => '收入',
                        'total-label'   => '總收入',
                        'empty-message' => 'No revenue accounts with transactions in this period',
                    ],
                    'expenses' => [
                        'title'         => '費用',
                        'total-label'   => '總費用',
                        'empty-message' => 'No expense accounts with transactions in this period',
                    ],
                ],
            ],
        ],
        'general-ledger' => [
            'navigation' => [
                'title' => '總分類帳',
                'group' => '稽核報表',
            ],
            'actions' => [
                'export-excel' => '匯出 Excel',
                'export-pdf'   => '匯出 PDF',
            ],
            'filters' => [
                'date-range' => '日期範圍',
                'journals'   => '帳本',
            ],
        ],
        'trial-balance' => [
            'navigation' => [
                'title' => '試算表',
                'group' => '稽核報表',
            ],
            'actions' => [
                'export-excel' => '匯出 Excel',
                'export-pdf'   => '匯出 PDF',
            ],
            'filters' => [
                'date-range' => '日期範圍',
                'journals'   => '帳本',
            ],
        ],
        'partner-ledger' => [
            'navigation' => [
                'title' => '夥伴帳冊',
                'group' => '夥伴報表',
            ],
            'actions' => [
                'export-excel' => '匯出 Excel',
                'export-pdf'   => '匯出 PDF',
            ],
            'filters' => [
                'date-range' => '日期範圍',
                'partners'   => '夥伴',
                'journals'   => '帳本',
            ],
        ],
        'aged-receivable' => [
            'navigation' => [
                'title' => '應收帳款帳齡',
                'group' => '夥伴報表',
            ],
            'actions' => [
                'export-excel' => '匯出 Excel',
                'export-pdf'   => '匯出 PDF',
            ],
            'filters' => [
                'as-of'         => '截至',
                'based-on'      => '依據',
                'period-length' => '期間長度（天）',
                'journals'      => '帳本',
                'partners'      => '夥伴',
                'entries'       => '分錄',
                'options'       => [
                    'due-date'       => '到期日',
                    'invoice-date'   => '開立日期',
                    'days-30'        => '30 天',
                    'days-60'        => '60 天',
                    'days-90'        => '90 天',
                    'posted-entries' => '已過帳分錄',
                    'all-entries'    => '所有分錄',
                ],
            ],
        ],
        'aged-payable' => [
            'navigation' => [
                'title' => '應付帳款帳齡',
                'group' => '夥伴報表',
            ],
            'actions' => [
                'export-excel' => '匯出 Excel',
                'export-pdf'   => '匯出 PDF',
            ],
            'filters' => [
                'as-of'         => '截至',
                'based-on'      => '依據',
                'period-length' => '期間長度（天）',
                'journals'      => '帳本',
                'partners'      => '夥伴',
                'entries'       => '分錄',
                'options'       => [
                    'due-date'       => '到期日',
                    'invoice-date'   => '開立日期',
                    'days-30'        => '30 天',
                    'days-60'        => '60 天',
                    'days-90'        => '90 天',
                    'posted-entries' => '已過帳分錄',
                    'all-entries'    => '所有分錄',
                ],
            ],
        ],
    ],
];
