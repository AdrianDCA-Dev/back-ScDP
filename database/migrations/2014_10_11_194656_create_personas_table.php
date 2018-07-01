<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ci');
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('sexo');
            $table->date('fechaNac');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('celular');
            $table->integer('carrera_id')->unsigned();

            $table->foreign('carrera_id')->references('id')->on('carreras')->onDelete('cascade');
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
        Schema::dropIfExists('personas');
    }
}
