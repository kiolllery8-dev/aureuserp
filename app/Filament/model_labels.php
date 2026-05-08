<?php
/**
 * Filament Resource model class basename → 繁體中文 label
 *
 * 用於 App\Providers\FilamentTranslateModelLabelsServiceProvider
 * 解決「新增 Customer」「新增 Partner」這類中英混搭問題。
 *
 * 中文不分單複數，所以 plural 用同一個字串。
 *
 * 維護：新增 Resource 時若 model class basename 不在此清單，
 * 會 fallback 到 Filament 預設行為（顯示英文）。
 */

return [
    // === 帳號 / 會計 ===
    'Account' => '科目',
    'Bank' => '銀行',
    'BankAccount' => '銀行帳戶',
    'Bill' => '進貨單',
    'CashRounding' => '現金進位',
    'CreditNote' => '退貨單',
    'Currency' => '貨幣',
    'FiscalPosition' => '財務立場',
    'Incoterm' => '國貿條款',
    'Invoice' => '發票',
    'Journal' => '日記帳',
    'JournalEntry' => '分錄',
    'JournalItem' => '分錄項目',
    'Payment' => '付款',
    'PaymentTerm' => '付款條件',
    'Receipt' => '收貨',
    'Refund' => '退款',
    'Tax' => '稅',
    'TaxGroup' => '稅務群組',

    // === 聯絡人 / 夥伴 ===
    'Address' => '地址',
    'Customer' => '客戶',
    'Industry' => '產業',
    'Partner' => '夥伴',
    'PriceList' => '價目表',
    'Tag' => '標籤',
    'Title' => '稱謂',
    'Vendor' => '供應商',

    // === 商品 ===
    'Attribute' => '屬性',
    'Category' => '分類',
    'Package' => '包裝',
    'PackageType' => '包裝類型',
    'Packaging' => '包裝',
    'Product' => '商品',
    'ProductQuantity' => '商品數量',
    'ProductSupplier' => '商品供應商',
    'UOMCategory' => '單位分類',

    // === 庫存 ===
    'Delivery' => '送貨',
    'Dropship' => '代發',
    'InternalTransfer' => '內部移轉',
    'Location' => '位置',
    'Lot' => '批次',
    'Move' => '庫存移動',
    'Operation' => '作業',
    'OperationType' => '作業類型',
    'OrderPoint' => '訂貨點',
    'Route' => '路線',
    'Rule' => '規則',
    'Scrap' => '報廢',
    'StorageCategory' => '儲位分類',
    'Warehouse' => '倉庫',
    'WorkLocation' => '工作地點',

    // === 銷售 / 採購 ===
    'Order' => '訂單',
    'PurchaseOrder' => '採購訂單',
    'Quotation' => '報價',
    'Requisition' => '採購合約',

    // === 員工 / HR ===
    'Calendar' => '行事曆',
    'CalendarLeave' => '休假行事曆',
    'Department' => '部門',
    'DepartureReason' => '離職原因',
    'Employee' => '員工',
    'EmployeeCategory' => '員工分類',
    'EmployeeJobPosition' => '員工職位',
    'EmployeeSkill' => '員工技能',
    'EmploymentType' => '雇用類型',
    'JobByPosition' => '職位工作',
    'JobPosition' => '職位',
    'SkillType' => '技能類型',

    // === 招募 ===
    'Applicant' => '應徵者',
    'ApplicantCategory' => '應徵者分類',
    'Candidate' => '候選人',
    'Degree' => '學位',
    'RefuseReason' => '拒絕原因',
    'Stage' => '階段',
    'UTMMedium' => 'UTM 媒介',
    'UTMSource' => 'UTM 來源',

    // === 假勤 ===
    'Leave' => '請假',
    'LeaveAccrualPlan' => '假勤累計計畫',
    'LeaveAllocation' => '假勤分配',
    'LeaveMandatoryDay' => '強制假日',
    'LeaveType' => '假勤類型',

    // === 專案 / 工時 ===
    'Milestone' => '里程碑',
    'Project' => '專案',
    'ProjectStage' => '專案階段',
    'Task' => '任務',
    'TaskStage' => '任務階段',
    'Timesheet' => '工時表',

    // === 活動 / 任務 ===
    'ActivityPlan' => '活動計畫',
    'ActivityType' => '活動類型',

    // === 部落格 / 網站 / 頁面 ===
    'Page' => '頁面',
    'PageModel' => '頁面',
    'Post' => '文章',

    // === 系統 ===
    'Company' => '公司',
    'Country' => '國家',
    'Field' => '欄位',
    'Plugin' => '外掛',
    'State' => '縣市',
    'Team' => '團隊',
    'User' => '使用者',
];
