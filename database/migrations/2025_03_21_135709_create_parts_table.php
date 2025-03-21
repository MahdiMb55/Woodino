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
        Schema::disableForeignKeyConstraints();

        Schema::create('parts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('height');
            $table->bigInteger('width');
            $table->bigInteger('count');
            $table->unsignedBigInteger('thickness_id');
            $table->foreign('thickness_id')->references('id')->on('thicknesses');
            $table->string('description', 255)->nullable();
            $table->bigInteger('price_per_unit');
            $table->bigInteger('total_price');
            $table->bigInteger('square_meter');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->unsignedBigInteger('code_id');
            $table->foreign('code_id')->references('id')->on('codes');
            $table->string('uploaded_file', 255)->nullable();
            $table->string('pakh_type', 255)->nullable();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parts');
    }
};
