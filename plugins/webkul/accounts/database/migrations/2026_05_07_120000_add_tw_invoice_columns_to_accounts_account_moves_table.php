<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * 台灣發票欄位擴充：
 *   - tw_invoice_track    字軌號碼（如 AB-12345678）
 *   - tw_invoice_type     發票類型（二聯/三聯/電子發票）
 *   - tw_buyer_tax_id     買方統一編號（三聯式必填）
 *   - tw_invoice_date     開立日期
 */
return new class extends Migration {
    public function up(): void
    {
        Schema::table('accounts_account_moves', function (Blueprint $table) {
            $table->string('tw_invoice_track', 32)->nullable()->comment('台灣發票字軌號碼');
            $table->string('tw_invoice_type', 16)->nullable()->comment('台灣發票類型：duplicate(二聯)/triplicate(三聯)/electronic(電子發票)');
            $table->string('tw_buyer_tax_id', 16)->nullable()->comment('買方統一編號（三聯式必填）');
            $table->date('tw_invoice_date')->nullable()->comment('台灣發票開立日期');
        });
    }

    public function down(): void
    {
        Schema::table('accounts_account_moves', function (Blueprint $table) {
            $table->dropColumn(['tw_invoice_track', 'tw_invoice_type', 'tw_buyer_tax_id', 'tw_invoice_date']);
        });
    }
};
