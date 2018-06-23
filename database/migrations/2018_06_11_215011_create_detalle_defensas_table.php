<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleDefensasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_defensas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('defensa_id')->unsigned();
            $table->text('descripcion');

            $table->foreign('defensa_id')->references('id')->on('defensas')->onDelete('cascade');
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
        Schema::dropIfExists('detalle_defensas');
    }
}
