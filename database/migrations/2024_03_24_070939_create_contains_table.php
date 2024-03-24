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
        Schema::create('contains', function (Blueprint $table) {
            $table->id('Contain_id');
            $table->bigInteger('Menu_id')->unsigned();
            $table->bigInteger('Orderitem_id')->unsigned();
            $table->foreign('Orderitem_id')->constrained()->unique()->references('Orderitem_id')->on('order_items');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contains');
    }
};