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
        Schema::create('order_items', function (Blueprint $table) {
            $table->id('Orderitem_id');
            $table->bigInteger('Menu_id')->unsigned();
            $table->bigInteger('order_id')->unsigned();
            $table->bigInteger('quantity')->unsigned();
            $table->double('discount');
            $table->foreign('order_id')->constrained()->unique()->references('order_id')->on('orders');
            $table->foreign('Menu_id')->constrained()->unique()->references('Menu_id')->on('menus');
        });

        // Schema::table('order_items', function (Blueprint $table) {
        //     $table->bigInteger('total')->after('quantity');
            
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};