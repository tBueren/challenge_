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
        Schema::create('tastes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('key')->unique();
            $table->string('description');

            $table->index(['key', 'id']);
        });

        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->unsignedInteger('taste_id');
            $table->foreign('taste_id')->references('id')->on('tastes');
            $table->string('color');
            $table->integer('price');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
        Schema::dropIfExists('tastes');
    }
};
