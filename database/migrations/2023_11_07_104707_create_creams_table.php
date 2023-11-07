<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Product;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creams', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products');

            $table->string('name');
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->float('price', 5, 2);
            $table->string('skin_type');
            $table->string('ingredients');
            $table->string('perfume')->nullable();
            $table->unsignedInteger('size_ml'); //solo numeri interi non negativi
            $table->unsignedInteger('quantity_available');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('creams');
    }
};
