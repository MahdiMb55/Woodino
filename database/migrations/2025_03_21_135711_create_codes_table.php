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

        Schema::create('codes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->string('price_type', 255)->comment('1- Meter\\\\r\\ 2- Branch\\\\r\\ 3- Percentage\\\\r\\ 4- Length\\\\r\\ 5- Unit');
            $table->bigInteger('price');
            $table->unsignedBigInteger('thickness_id')->nullable();
            $table->foreign('thickness_id')->references('id')->on('thicknesses');
            $table->string('pic', 255)->nullable();
            $table->json('sub_codes')->nullable();
            $table->bigInteger('min_height')->nullable();
            $table->bigInteger('max_height')->nullable();
            $table->bigInteger('min_width')->nullable();
            $table->bigInteger('max_width')->nullable();
            $table->bigInteger('fixed_width')->nullable();
            $table->bigInteger('fixed_height')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('codes');
    }
};
