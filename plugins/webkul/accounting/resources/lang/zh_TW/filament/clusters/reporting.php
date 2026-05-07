<?php

return [
    'navigation' => [
        'title' => 'Reporting',
        'group' => '會計',
    ],
    'pages' => [
        'balance-sheet' => [
            'navigation' => [
                'title' => 'Balance Sheet',
                'group' => 'Statement Reports',
            ],
            'actions' => [
                'export-excel' => 'Export to Excel',
                'export-pdf'   => 'Export to PDF',
            ],
            'filters' => [
                'date-range' => 'Date Range',
                'journals'   => '日記帳',
            ],
            'content' => [
                'sections' => [
                    'assets' => [
                        'title'       => '資產',
                        'total-label' => 'Total ASSETS',
                        'subsections' => [
                            'current-assets' => [
                                'title'       => 'Current Assets',
                                'total-label' => 'Total Current Assets',
                            ],
                            'fixed-assets' => [
                                'title'       => 'Fixed Assets',
                                'total-label' => 'Total Fixed Assets',
                            ],
                            'non-current-assets' => [
                                'title'       => 'Non-current Assets',
                                'total-label' => 'Total Non-current Assets',
                            ],
                        ],
                    ],
                    'liabilities' => [
                        'title'       => 'LIABILITIES',
                        'total-label' => 'Total LIABILITIES',
                        'subsections' => [
                            'current-liabilities' => [
                                'title'       => 'Current Liabilities',
                                'total-label' => 'Total Current Liabilities',
                            ],
                            'non-current-liabilities' => [
                                'title'       => 'Non-current Liabilities',
                                'total-label' => 'Total Non-current Liabilities',
                            ],
                        ],
                    ],
                    'equity' => [
                        'title'       => '權益',
                        'total-label' => 'Total EQUITY',
                        'subsections' => [
                            'unallocated-earnings' => [
                                'title'          => 'Unallocated Earnings',
                                'current-year'   => 'Current Year Unallocated Earnings',
                                'previous-years' => 'Previous Years Unallocated Earnings',
                                'total-label'    => 'Total Unallocated Earnings',
                            ],
                            'retained-earnings' => [
                                'title'       => 'Retained Earnings',
                                'total-label' => 'Total Retained Earnings',
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
                'group' => 'Statement Reports',
            ],
            'actions' => [
                'export-excel' => 'Export to Excel',
                'export-pdf'   => 'Export to PDF',
            ],
            'filters' => [
                'date-range' => 'Date Range',
                'journals'   => '日記帳',
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
                'title' => 'General Ledger',
                'group' => 'Audit Reports',
            ],
            'actions' => [
                'export-excel' => 'Export to Excel',
                'export-pdf'   => 'Export to PDF',
            ],
            'filters' => [
                'date-range' => 'Date Range',
                'journals'   => '日記帳',
            ],
        ],
        'trial-balance' => [
            'navigation' => [
                'title' => 'Trial Balance',
                'group' => 'Audit Reports',
            ],
            'actions' => [
                'export-excel' => 'Export to Excel',
                'export-pdf'   => 'Export to PDF',
            ],
            'filters' => [
                'date-range' => 'Date Range',
                'journals'   => '日記帳',
            ],
        ],
        'partner-ledger' => [
            'navigation' => [
                'title' => 'Partner Ledger',
                'group' => 'Partner Reports',
            ],
            'actions' => [
                'export-excel' => 'Export Excel',
                'export-pdf'   => 'Export PDF',
            ],
            'filters' => [
                'date-range' => 'Date Range',
                'partners'   => '夥伴',
                'journals'   => '日記帳',
            ],
        ],
        'aged-receivable' => [
            'navigation' => [
                'title' => 'Aged Receivable',
                'group' => 'Partner Reports',
            ],
            'actions' => [
                'export-excel' => 'Export Excel',
                'export-pdf'   => 'Export PDF',
            ],
            'filters' => [
                'as-of'         => 'As of',
                'based-on'      => 'Based on',
                'period-length' => 'Period Length (days)',
                'journals'      => '日記帳',
                'partners'      => '夥伴',
                'entries'       => 'Entries',
                'options'       => [
                    'due-date'       => '到期日',
                    'invoice-date'   => 'Invoice Date',
                    'days-30'        => '30 Days',
                    'days-60'        => '60 Days',
                    'days-90'        => '90 Days',
                    'posted-entries' => 'Posted Entries',
                    'all-entries'    => 'All Entries',
                ],
            ],
        ],
        'aged-payable' => [
            'navigation' => [
                'title' => 'Aged Payable',
                'group' => 'Partner Reports',
            ],
            'actions' => [
                'export-excel' => 'Export Excel',
                'export-pdf'   => 'Export PDF',
            ],
            'filters' => [
                'as-of'         => 'As of',
                'based-on'      => 'Based on',
                'period-length' => 'Period Length (days)',
                'journals'      => '日記帳',
                'partners'      => '夥伴',
                'entries'       => 'Entries',
                'options'       => [
                    'due-date'       => '到期日',
                    'invoice-date'   => 'Invoice Date',
                    'days-30'        => '30 Days',
                    'days-60'        => '60 Days',
                    'days-90'        => '90 Days',
                    'posted-entries' => 'Posted Entries',
                    'all-entries'    => 'All Entries',
                ],
            ],
        ],
    ],
];
