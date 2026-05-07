<?php

return [
    'navigation' => [
        'title' => '報表',
        'group' => '會計',
    ],
    'pages' => [
        'balance-sheet' => [
            'navigation' => [
                'title' => 'Balance Sheet',
                'group' => 'Statement 報表',
            ],
            'actions' => [
                'export-excel' => 'Export to Excel',
                'export-pdf'   => 'Export to PDF',
            ],
            'filters' => [
                'date-range' => '日期 Range',
                'journals'   => '帳本',
            ],
            'content' => [
                'sections' => [
                    'assets' => [
                        'title'       => '資產',
                        'total-label' => '總計 ASSETS',
                        'subsections' => [
                            'current-assets' => [
                                'title'       => 'Current Assets',
                                'total-label' => '總計 Current Assets',
                            ],
                            'fixed-assets' => [
                                'title'       => 'Fixed Assets',
                                'total-label' => '總計 Fixed Assets',
                            ],
                            'non-current-assets' => [
                                'title'       => 'Non-current Assets',
                                'total-label' => '總計 Non-current Assets',
                            ],
                        ],
                    ],
                    'liabilities' => [
                        'title'       => 'LIABILITIES',
                        'total-label' => '總計 LIABILITIES',
                        'subsections' => [
                            'current-liabilities' => [
                                'title'       => 'Current Liabilities',
                                'total-label' => '總計 Current Liabilities',
                            ],
                            'non-current-liabilities' => [
                                'title'       => 'Non-current Liabilities',
                                'total-label' => '總計 Non-current Liabilities',
                            ],
                        ],
                    ],
                    'equity' => [
                        'title'       => '權益',
                        'total-label' => '總計 EQUITY',
                        'subsections' => [
                            'unallocated-earnings' => [
                                'title'          => 'Unallocated Earnings',
                                'current-year'   => 'Current Year Unallocated Earnings',
                                'previous-years' => 'Previous Years Unallocated Earnings',
                                'total-label'    => '總計 Unallocated Earnings',
                            ],
                            'retained-earnings' => [
                                'title'       => 'Retained Earnings',
                                'total-label' => '總計 Retained Earnings',
                            ],
                        ],
                    ],
                ],
                'grand-total-label' => 'LIABILITIES + EQUITY',
            ],
        ],
        'profit-loss' => [
            'navigation' => [
                'title' => 'Profit & Loss',
                'group' => 'Statement 報表',
            ],
            'actions' => [
                'export-excel' => 'Export to Excel',
                'export-pdf'   => 'Export to PDF',
            ],
            'filters' => [
                'date-range' => '日期 Range',
                'journals'   => '帳本',
            ],
            'content' => [
                'sections' => [
                    'revenue' => [
                        'title'         => '收入',
                        'total-label'   => '總計 Revenue',
                        'empty-message' => 'No revenue accounts with transactions in this period',
                    ],
                    'expenses' => [
                        'title'         => '費用',
                        'total-label'   => '總計 Expenses',
                        'empty-message' => 'No expense accounts with transactions in this period',
                    ],
                ],
            ],
        ],
        'general-ledger' => [
            'navigation' => [
                'title' => 'General Ledger',
                'group' => 'Audit 報表',
            ],
            'actions' => [
                'export-excel' => 'Export to Excel',
                'export-pdf'   => 'Export to PDF',
            ],
            'filters' => [
                'date-range' => '日期 Range',
                'journals'   => '帳本',
            ],
        ],
        'trial-balance' => [
            'navigation' => [
                'title' => 'Trial Balance',
                'group' => 'Audit 報表',
            ],
            'actions' => [
                'export-excel' => 'Export to Excel',
                'export-pdf'   => 'Export to PDF',
            ],
            'filters' => [
                'date-range' => '日期 Range',
                'journals'   => '帳本',
            ],
        ],
        'partner-ledger' => [
            'navigation' => [
                'title' => '夥伴 Ledger',
                'group' => '夥伴 報表',
            ],
            'actions' => [
                'export-excel' => 'Export Excel',
                'export-pdf'   => 'Export PDF',
            ],
            'filters' => [
                'date-range' => '日期 Range',
                'partners'   => '夥伴',
                'journals'   => '帳本',
            ],
        ],
        'aged-receivable' => [
            'navigation' => [
                'title' => 'Aged Receivable',
                'group' => '夥伴 報表',
            ],
            'actions' => [
                'export-excel' => 'Export Excel',
                'export-pdf'   => 'Export PDF',
            ],
            'filters' => [
                'as-of'         => 'As of',
                'based-on'      => 'Based on',
                'period-length' => 'Period Length (days)',
                'journals'      => '帳本',
                'partners'      => '夥伴',
                'entries'       => 'Entries',
                'options'       => [
                    'due-date'       => '到期日',
                    'invoice-date'   => '開立日期',
                    'days-30'        => '30 天數',
                    'days-60'        => '60 天數',
                    'days-90'        => '90 天數',
                    'posted-entries' => '已過帳 Entries',
                    'all-entries'    => 'All Entries',
                ],
            ],
        ],
        'aged-payable' => [
            'navigation' => [
                'title' => 'Aged Payable',
                'group' => '夥伴 報表',
            ],
            'actions' => [
                'export-excel' => 'Export Excel',
                'export-pdf'   => 'Export PDF',
            ],
            'filters' => [
                'as-of'         => 'As of',
                'based-on'      => 'Based on',
                'period-length' => 'Period Length (days)',
                'journals'      => '帳本',
                'partners'      => '夥伴',
                'entries'       => 'Entries',
                'options'       => [
                    'due-date'       => '到期日',
                    'invoice-date'   => '開立日期',
                    'days-30'        => '30 天數',
                    'days-60'        => '60 天數',
                    'days-90'        => '90 天數',
                    'posted-entries' => '已過帳 Entries',
                    'all-entries'    => 'All Entries',
                ],
            ],
        ],
    ],
];
