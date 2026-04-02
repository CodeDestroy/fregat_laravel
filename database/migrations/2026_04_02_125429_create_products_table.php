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
        Schema::create('products', function (Blueprint $table) {

            $table->string('id', 64)->primary();

            $table->string('sku', 255)->nullable();

            $table->string('name', 1000);

            $table->string('full_name', 1000)->nullable();

            $table->string('unit', 20)->nullable();

            $table->string('unit_code', 10)->nullable();

            $table->decimal('vat_rate', 5, 2)->nullable();

            $table->decimal('weight', 10, 3)->nullable();

            $table->string('nomenclature_type', 50)->nullable();

            $table->string('category_id', 64)->nullable();

            $table->boolean('is_active')->default(true);

            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->nullOnDelete()
                ->cascadeOnUpdate();

            $table->index('sku');

            $table->index('category_id');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
