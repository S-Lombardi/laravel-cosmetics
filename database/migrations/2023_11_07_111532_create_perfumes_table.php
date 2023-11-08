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
        Schema::create('perfumes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products');

            $table->string('name');
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->unsignedInteger('volume_ml'); //solo numeri interi non negativi
            $table->string('fragrance_family');
            $table->string('top_notes')->nullable(); //note di testa
            $table->string('heart_notes')->nullable(); //note di cuore
            $table->string('base_notes')->nullable(); //note di fondo 
            $table->float('price', 5,2);
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
        Schema::dropIfExists('perfumes');
    }
};
