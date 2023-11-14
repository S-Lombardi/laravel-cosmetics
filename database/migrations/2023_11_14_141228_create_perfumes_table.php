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
        Schema::create('perfumes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('product_id')->constrained(); // Collegate alla tabella "products"

            $table->string('fragrance')->nullable();
            $table->string('top_notes')->nullable(); //note di testa
            $table->string('heart_notes')->nullable(); //note di cuore
            $table->string('base_notes')->nullable(); //note di fondo

            $table->unsignedInteger('volume_ml'); //intero e positivo
            
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
