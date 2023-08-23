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
        Schema::create('salesorders', function (Blueprint $table) {
            $table->id();
            $table->string('place');
            $table->foreignId('supplier_id')->constrained('suppliers')->references('id')->cascadeOnDelete();
            $table->foreignId('product_id')->constrained('products')->references('id')->cascadeOnDelete();
            $table->decimal('final_total',8,2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salesorders');
    }
};
