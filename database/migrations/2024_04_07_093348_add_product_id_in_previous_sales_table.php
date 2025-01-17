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
        Schema::table('previous_sales', function (Blueprint $table) {
            $table->unsignedBigInteger('product_id')->before('qty')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('previous_sales', function (Blueprint $table) {
            $table->dropColumn(['product_id']);
        });
    }
};
