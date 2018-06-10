<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDefensasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('defensas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('inscripcion_id')->unsigned();
            $table->integer('cronograma_id')->unsigned();
            $table->string('estado');

            $table->foreign('inscripcion_id')->references('id')->on('inscripciones')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('cronograma_id')->references('id')->on('cronogramas')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('defensas');
    }
}
