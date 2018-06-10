<?php

use Illuminate\Database\Seeder;

class PersonasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('personas')->truncate();

        $academico = new \App\Persona();

        $academico->ci = "10326598";
        $academico->nombre = "Carlos Benito";
        $academico->apellidos = "Choque Altamirano";
        $academico->sexo = 1;
        $academico->fechaNac = "2018-02-10";
        $academico->direccion = "B/Juan 23";
        $academico->telefono = "6689325";
        $academico->celular = "77457852";
        $academico->carrera = "Ingenieria de Sistemas";
        $academico->save();
/*
        $administrativo = new \App\Persona();
        $administrativo->ci = "58696523";
        $administrativo->nombre = "Jose Antonio";
        $administrativo->apellidos = "Peralez Chilaca";
        $administrativo->sexo = 1;
        $administrativo->fechaNac = "2018-02-10";
        $administrativo->direccion = "B/Juan Pablo II";
        $administrativo->telefono = "6689325";
        $administrativo->celular = "77457852";
        $administrativo->carrera = "Ingenieria de Redes";
        $administrativo->save();

        $becario = new \App\Persona();
        $becario->ci = "89785456";
        $becario->nombre = "Ramiro Diego";
        $becario->apellidos = "Ramirez Cardoso";
        $becario->sexo = 1;
        $becario->fechaNac = "2018-02-10";
        $becario->direccion = "B/Carlos Murillo";
        $becario->telefono = "6689325";
        $becario->celular = "77457852";
        $becario->carrera = "Ingenieria de Sistemas";
        $becario->save();

        $persona1 = new \App\Persona();
        $persona1->ci = "89754583";
        $persona1->nombre = "Julia";
        $persona1->apellidos = "Ramos Pedregal";
        $persona1->sexo = 1;
        $persona1->fechaNac = "2018-02-10";
        $persona1->direccion = "B/Carlos Murillo";
        $persona1->telefono = "6689325";
        $persona1->celular = "77457852";
        $persona1->carrera = "Ingenieria de Redes";
        $persona1->save();*/

    }
}
