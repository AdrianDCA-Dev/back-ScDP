<?php

use Illuminate\Database\Seeder;

class ModalidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tesis = new \App\Modalidades();
        $tesis->nombre = 'Tesis';
        $tesis->descripcion = 'solo tesis';
        $tesis->save();

        $proyecto = new \App\Modalidades();
        $proyecto->nombre = 'Proyecto de Grado';
        $proyecto->descripcion = 'solo proyecto de grado';
        $proyecto->save();
    }
}
