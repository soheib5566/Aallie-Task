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
        Schema::create('sales_data', function (Blueprint $table) {
            $table->id();
            $table->string('product');
            $table->decimal('q1_sales', 10, 2);
            $table->decimal('q2_sales', 10, 2);
            $table->decimal('q3_sales', 10, 2);
            $table->decimal('q4_sales', 10, 2);
            $table->decimal('target', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales_data');
    }
};
