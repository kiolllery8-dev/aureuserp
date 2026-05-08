<?php

namespace App\Filament\Resources\ChartOfAccountsResource\Pages;

use App\Filament\Resources\ChartOfAccountsResource;
use Webkul\Account\Filament\Resources\AccountResource\Pages\ManageAccounts as BaseManageAccounts;

/**
 * 會計科目獨立應用的 List/Manage page。
 * 完全繼承 base ManageAccounts 的功能（搜尋、篩選、批次操作、CRUD），
 * 只把 $resource 指向我們的獨立 Resource，URL 走 /admin/chart-of-accounts。
 */
class ManageChartOfAccounts extends BaseManageAccounts
{
    protected static string $resource = ChartOfAccountsResource::class;
}
