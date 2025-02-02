<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('monthly_stock_histories', function (Blueprint $table) {
            $table->float('stok_awal_bulan')->change();
            $table->float('stok_akhir_bulan')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('monthly_stock_histories', function (Blueprint $table) {
            $table->integer('stok_awal_bulan')->change();
            $table->integer('stok_akhir_bulan')->change();
        });
    }
};
