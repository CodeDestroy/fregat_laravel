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
        Schema::create('categories', function (Blueprint $table) {

            $table->string('id', 64);

            $table->primary('id');

            $table->string('name', 500);

            $table->string('parent_id', 64)->nullable();

            $table->boolean('show_in_catalog')->default(true);

            $table->index('parent_id');

        });
        Schema::table('categories', function (Blueprint $table) {

            $table->foreign('parent_id')
                ->references('id')
                ->on('categories')
                ->nullOnDelete()
                ->cascadeOnUpdate();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
