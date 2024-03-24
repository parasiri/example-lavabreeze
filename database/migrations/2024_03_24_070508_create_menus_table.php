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
        Schema::create('menus', function (Blueprint $table) {
            $table->id('Menu_id');
            $table->bigInteger('Cat_id')->unsigned();
            $table->string('name');
            $table->string('discription');
            $table->double('price');
            $table->foreign('Cat_id')->constrained()->unique()->references('Cat_id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};