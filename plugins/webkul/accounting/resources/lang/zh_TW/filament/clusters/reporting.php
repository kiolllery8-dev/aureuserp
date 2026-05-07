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
                'group' => 'Statement Reports',
            ],
            'actions' => [
                'export-excel' => '匯出 Excel',
                'export-pdf'   => '匯出 PDF',
            ],
            'filters' => [
                'date-range' => 'Date Range',
                'journals'   => '帳本',
            ],
            'content' => [
                'sections' => [
                    'assets' => [
                        'title'       => '資產',
                        'total-label' => 'Total ASSETS',
                        'subsections' => [
                            'current-assets' => [
                                'title'       => '流動資產',
                                'total-label' => 'Total Current Assets',
                            ],
                            'fixed-assets' => [
                                'title'       => '固定資產',
                                'total-label' => 'Total Fixed Assets',
                            ],
                            'non-current-assets' => [
                                'title'       => '非流動資產',
                                'total-label' => 'Total Non-current Assets',
                            ],
                        ],
                    ],
                    'liabilities' => [
                        'title'       => '負債',
                        'total-label' => 'Total LIABILITIES',
                        'subsections' => [
                            'current-liabilities' => [
                                'title'       => '流動負債',
                                'total-label' => 'Total Current Liabilities',
                            ],
                            'non-current-liabilities' => [
                                'title'       => '非流動負債',
                                'total-label' => 'Total Non-current Liabilities',
                            ],
                        ],
                    ],
                    'equity' => [
                        'title'       => '權益',
                        'total-label' => 'Total EQUITY',
                        'subsections' => [
                            'unallocated-earnings' => [
                                'title'          => '未分配盈餘',
                                'current-year'   => '本年度未分配盈餘',
                                'previous-years' => '前年度未分配盈餘',
                                'total-label'    => 'Total Unallocated Earnings',
                            ],
                            'retained-earnings' => [
                                'title'       => '保留盈餘',
                                'total-label' => 'Total Retained Earnings',
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
                'group' => 'Statement Reports',
            ],
            'actions' => [
                'export-excel' => '匯出 Excel',
                'export-pdf'   => '匯出 PDF',
            ],
            'filters' => [
                'date-range' => 'Date Range',
                'journals'   => '帳本',
            ],
            'content' => [
                'sections' => [
                    'revenue' => [
                        'title'         => '收入',
                        'total-label'   => 'Total Revenue',
                        'empty-message' => 'No revenue accounts with transactions in this period',
                    ],
                    'expenses' => [
                        'title'         => '費用',
                        'total-label'   => 'Total Expenses',
                        'empty-message' => 'No expense accounts with transactions in this period',
                    ],
                ],
            ],
        ],
        'general-ledger' => [
            'navigation' => [
                'title' => '總分類帳',
                'group' => 'Audit Reports',
            ],
            'actions' => [
                'export-excel' => '匯出 Excel',
                'export-pdf'   => '匯出 PDF',
            ],
            'filters' => [
                'date-range' => 'Date Range',
                'journals'   => '帳本',
            ],
        ],
        'trial-balance' => [
            'navigation' => [
                'title' => '試算表',
                'group' => 'Audit Reports',
            ],
            'actions' => [
                'export-excel' => '匯出 Excel',
                'export-pdf'   => '匯出 PDF',
            ],
            'filters' => [
                'date-range' => 'Date Range',
                'journals'   => '帳本',
            ],
        ],
        'partner-ledger' => [
            'navigation' => [
                'title' => 'Partner Ledger',
                'group' => 'Partner Reports',
            ],
            'actions' => [
                'export-excel' => '匯出 Excel',
                'export-pdf'   => '匯出 PDF',
            ],
            'filters' => [
                'date-range' => 'Date Range',
                'partners'   => '夥伴',
                'journals'   => '帳本',
            ],
        ],
        'aged-receivable' => [
            'navigation' => [
                'title' => '應收帳款帳齡',
                'group' => 'Partner Reports',
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
                    'days-30'        => '30 Days',
                    'days-60'        => '60 Days',
                    'days-90'        => '90 Days',
                    'posted-entries' => 'Posted Entries',
                    'all-entries'    => '所有分錄',
                ],
            ],
        ],
        'aged-payable' => [
            'navigation' => [
                'title' => '應付帳款帳齡',
                'group' => 'Partner Reports',
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
                    'days-30'        => '30 Days',
                    'days-60'        => '60 Days',
                    'days-90'        => '90 Days',
                    'posted-entries' => 'Posted Entries',
                    'all-entries'    => '所有分錄',
                ],
            ],
        ],
    ],
];
