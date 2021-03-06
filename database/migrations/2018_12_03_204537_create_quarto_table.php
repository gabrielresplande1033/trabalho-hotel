<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuartoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quarto', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('hotel_id')->unsigned();
            $table->foreign('hotel_id')->references('id')->on('hotel');

            $table->string('cidade');
            $table->string('nome');
            $table->string('descricao');
            $table->float('precoDiaria');
            $table->string('image');
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
        Schema::dropIfExists('quarto');
    }
}
