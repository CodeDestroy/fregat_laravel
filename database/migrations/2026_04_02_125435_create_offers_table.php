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
        Schema::create('offers', function (Blueprint $table) {

            $table->string('id', 64)->primary();

            $table->string('product_id', 64);

            $table->string('price_type_id', 64)->nullable();

            $table->decimal('price', 12, 2)->nullable();

            $table->string('currency', 10)->default('RUB');

            $table->string('unit', 20)->nullable();

            $table->decimal('quantity', 12, 3)->default(0);

            $table->foreign('product_id')
                ->references('id')
                ->on('products')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->foreign('price_type_id')
                ->references('id')
                ->on('price_types')
                ->nullOnDelete()
                ->cascadeOnUpdate();

            $table->index('product_id');

            $table->index('price_type_id');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
