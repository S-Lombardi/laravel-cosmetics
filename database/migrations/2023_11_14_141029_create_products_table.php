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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            
            $table->foreignId('category_id')->constrained('categories');
            $table->foreignId('user_id')->constrained('users');

            $table->string('name'); //Profumo A, Crema B, Accessorio C...
            $table->text('description')->nullable();
            $table->unsignedDecimal('price', 8, 2); //decimale e positivo
            $table->unsignedInteger('stock_quantity'); //intero e positivo
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
