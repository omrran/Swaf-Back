<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();

            $table->foreignId('OrderId');
            $table->foreign('OrderId')->references('id')->on('orders')->onDelete('cascade');

            $table->foreignId('ProductId');
            $table->foreign('ProductId')->references('id')->on('products')->onDelete('cascade');

            $table->decimal('UnitPrice', $precision = 12, $scale = 2);

            $table->integer('Quantiy');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_items');
    }
};
