<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ADMINISTRADOR
        $administrativo = new \App\User();
        $administrativo->name = "Lic. Eiber";
        $administrativo->email = "eiber01@gmail.com";
        $administrativo->password = bcrypt('eiber161501');
        $administrativo->estado = 1;
        $administrativo->persona_id = 1;
        $administrativo->save();
        //

        //ENCARGADO
        $encargado = new \App\User();
        $encargado->name = "Lic. Sabrina";
        $encargado->email = "sabrina@gmail.com";
        $encargado->password = bcrypt('123456789');
        $encargado->estado = 1;
        $encargado->persona_id = 2;
        $encargado->save();
        //

        //DOCENTES
        $docente1 = new \App\User();
        $docente1->name = "jose";
        $docente1->email = "jose@gmail.com";
        $docente1->password = bcrypt('123456789');
        $docente1->estado = 1;
        $docente1->persona_id = 3;
        $docente1->save();

        $docente2 = new \App\User();
        $docente2->name = "ramiro";
        $docente2->email = "ramiro@gmail.com";
        $docente2->password = bcrypt('123456789');
        $docente2->estado = 1;
        $docente2->persona_id = 4;
        $docente2->save();

        $docente3 = new \App\User();
        $docente3->name = "julia";
        $docente3->email = "julia@gmail.com";
        $docente3->password = bcrypt('123456789');
        $docente3->estado = 1;
        $docente3->persona_id = 5;
        $docente3->save();
        //

        //ALUMNOS
        $estudiante1 = new \App\User();
        $estudiante1->name = "alumno1";
        $estudiante1->email = "estudiante1@gmail.com";
        $estudiante1->password = bcrypt('123456789');
        $estudiante1->estado = 1;
        $estudiante1->persona_id = 6;
        $estudiante1->save();

        $estudiante2 = new \App\User();
        $estudiante2->name = "alumno2";
        $estudiante2->email = "estudiante2@gmail.com";
        $estudiante2->password = bcrypt('123456789');
        $estudiante2->estado = 1;
        $estudiante2->persona_id = 7;
        $estudiante2->save();

        $estudiante3 = new \App\User();
        $estudiante3->name = "alumno3";
        $estudiante3->email = "estudiante3@gmail.com";
        $estudiante3->password = bcrypt('123456789');
        $estudiante3->estado = 1;
        $estudiante3->persona_id = 8;
        $estudiante3->save();

        $estudiante4 = new \App\User();
        $estudiante4->name = "alumno4";
        $estudiante4->email = "estudiante4@gmail.com";
        $estudiante4->password = bcrypt('123456789');
        $estudiante4->estado = 1;
        $estudiante4->persona_id = 9;
        $estudiante4->save();

        $estudiante5 = new \App\User();
        $estudiante5->name = "alumno5";
        $estudiante5->email = "estudiante5@gmail.com";
        $estudiante5->password = bcrypt('123456789');
        $estudiante5->estado = 1;
        $estudiante5->persona_id = 10;
        $estudiante5->save();
        //
    }
}
