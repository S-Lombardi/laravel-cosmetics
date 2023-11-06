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

            $table->string('name');
            $table->text('description');
            $table->unsignedInteger('volume_ml'); //solo numeri interi non negativi
            $table->string('fragrance_family');
            $table->string('top_notes'); //note di testa
            $table->string('heart_notes'); //note di cuore
            $table->string('base_notes'); //note di fondo 
            $table->float('price', 5, 2);
            $table->unsignedInteger('quantity_available');
            // Chiave esterna per l'utente che ha creato il profumo
            $table->unsignedBigInteger('user_id'); 
            $table->foreign('user_id')->references('id')->on('users');
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
