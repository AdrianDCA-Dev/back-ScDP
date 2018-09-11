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
        //ADMINISTRADOR
        $academico = new \App\Persona();
        $academico->ci = "10326598";
        $academico->nombre = "Eiber";
        $academico->apellidos = "Molina";
        $academico->sexo = 1;
        $academico->fechaNac = "1988-02-10";
        $academico->direccion = "B/Juan 23";
        $academico->telefono = "6689325";
        $academico->celular = "77457852";
        $academico->carrera_id = 4;
        $academico->save();
        //
        //ENCARGADO
        $encargado = new \App\Persona();
        $encargado->ci = "66666559";
        $encargado->nombre = "Secretaria";
        $encargado->apellidos = "Secretaria";
        $encargado->sexo = 1;
        $encargado->fechaNac = "1988-02-10";
        $encargado->direccion = "B/Juan 23";
        $encargado->telefono = "6689325";
        $encargado->celular = "77457852";
        $encargado->carrera_id = 4;
        $encargado->save();
        //
        //DOCENTES
        $docente1 = new \App\Persona();
        $docente1->ci = "58696523";
        $docente1->nombre = "Jose Antonio";
        $docente1->apellidos = "Peralez Chilaca";
        $docente1->sexo = 1;
        $docente1->fechaNac = "2018-02-10";
        $docente1->direccion = "B/Juan Pablo II";
        $docente1->telefono = "6689325";
        $docente1->celular = "77457852";
        $docente1->carrera_id = 12;
        $docente1->save();

        $docente2 = new \App\Persona();
        $docente2->ci = "89785456";
        $docente2->nombre = "Ramiro Diego";
        $docente2->apellidos = "Ramirez Cardoso";
        $docente2->sexo = 1;
        $docente2->fechaNac = "2018-02-10";
        $docente2->direccion = "B/Carlos Murillo";
        $docente2->telefono = "6689325";
        $docente2->celular = "77457852";
        $docente2->carrera_id = 12;
        $docente2->save();

        $docente3 = new \App\Persona();
        $docente3->ci = "89754583";
        $docente3->nombre = "Julia";
        $docente3->apellidos = "Ramos Pedregal";
        $docente3->sexo = 1;
        $docente3->fechaNac = "2018-02-10";
        $docente3->direccion = "B/Carlos Murillo";
        $docente3->telefono = "6689325";
        $docente3->celular = "77457852";
        $docente3->carrera_id = 12;
        $docente3->save();
        //
        //alumnos
        $alumno1 = new \App\Persona();
        $alumno1->ci = "123456712";
        $alumno1->nombre = "Estudiante 1";
        $alumno1->apellidos = "Estudiante 2";
        $alumno1->sexo = 1;
        $alumno1->fechaNac = "2018-02-10";
        $alumno1->direccion = "B/Carlos Murillo";
        $alumno1->telefono = "6689325";
        $alumno1->celular = "77457852";
        $alumno1->carrera_id = 12;
        $alumno1->save();

        $alumno2 = new \App\Persona();
        $alumno2->ci = "123456713";
        $alumno2->nombre = "Estudiante 2";
        $alumno2->apellidos = "Estudiante 2";
        $alumno2->sexo = 1;
        $alumno2->fechaNac = "2018-02-10";
        $alumno2->direccion = "B/Carlos Murillo";
        $alumno2->telefono = "6689325";
        $alumno2->celular = "77457852";
        $alumno2->carrera_id = 12;
        $alumno2->save();

        $alumno3 = new \App\Persona();
        $alumno3->ci = "123456714";
        $alumno3->nombre = "Estudiante 3";
        $alumno3->apellidos = "Estudiante 3";
        $alumno3->sexo = 1;
        $alumno3->fechaNac = "2018-02-10";
        $alumno3->direccion = "B/Carlos Murillo";
        $alumno3->telefono = "6689325";
        $alumno3->celular = "77457852";
        $alumno3->carrera_id = 12;
        $alumno3->save();

        $alumno4 = new \App\Persona();
        $alumno4->ci = "123456715";
        $alumno4->nombre = "Estudiante 4";
        $alumno4->apellidos = "Estudiante 4";
        $alumno4->sexo = 1;
        $alumno4->fechaNac = "2018-02-10";
        $alumno4->direccion = "B/Carlos Murillo";
        $alumno4->telefono = "6689325";
        $alumno4->celular = "77457852";
        $alumno4->carrera_id = 12;
        $alumno4->save();

        $alumno5 = new \App\Persona();
        $alumno5->ci = "123456716";
        $alumno5->nombre = "Estudiante 5";
        $alumno5->apellidos = "Estudiante 5";
        $alumno5->sexo = 1;
        $alumno5->fechaNac = "2018-02-10";
        $alumno5->direccion = "B/Carlos Murillo";
        $alumno5->telefono = "6689325";
        $alumno5->celular = "77457852";
        $alumno5->carrera_id = 12;
        $alumno5->save();

    }
}
