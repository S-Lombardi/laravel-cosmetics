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
        Schema::create('make_ups', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('product_id')->constrained(); // Collegate alla tabella "products"

            $table->string('make_up_type'); // Fondotinta, ombretto, rossetto, struccante..
            $table->string('shade')->nullable(); // Colore o tonalità
            $table->string('formulation'); // Liquido, polvere, crema 
            $table->string('finish'); // Opaco, luminoso, satinato
            $table->boolean('waterproof'); // Indica se il prodotto è resistente all'acqua
            $table->unsignedInteger('size_ml'); //intero e positivo

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('make_ups');
    }
};
