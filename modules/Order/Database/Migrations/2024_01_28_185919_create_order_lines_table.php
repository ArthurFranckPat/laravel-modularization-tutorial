<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('order_lines', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('product_price_in_cents');
            $table->unsignedInteger('quantity');
            $table->foreignId('order_id');
            $table->foreignId('product_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('order_lines');
    }
};
