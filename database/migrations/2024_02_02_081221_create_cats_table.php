<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cats', function (Blueprint $table) {
            $table->id();
            $table->string('breed')->unique();
            $table->string('slug')->unique();
            $table->string('color');
            $table->string('age');
            $table->string('sex');
            $table->string('size');
            $table->text('description');
            $table->text('img');
            $table->integer('price');
            $table->integer('sale');
            $table->boolean('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cats');
    }
};
