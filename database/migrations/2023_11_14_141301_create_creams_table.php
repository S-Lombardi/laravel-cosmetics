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
        Schema::create('creams', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('product_id')->constrained(); // Collegate alla tabella "products"

            $table->string('body'); //viso, mani, corpo, piedi
            $table->string('skin_type'); // pelli secche, pelli grasse, pelli miste
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
        Schema::dropIfExists('creams');
    }
};
