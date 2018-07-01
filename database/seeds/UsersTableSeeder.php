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
        //DB::table('users')->truncate();

       /* $academico = new \App\User();

        $academico->name = "carlitos";
        $academico->email = "docente@docente.com";
        $academico->password = bcrypt('123456789');
        $academico->estado = 1;
        $academico->persona_id = 1;
        $academico->save();*/

        $administrativo = new \App\User();
        $administrativo->name = "Lic. Eiber";
        $administrativo->email = "eiber01@gmail.com";
        $administrativo->password = bcrypt('eiber161501');
        $administrativo->estado = 1;
        $administrativo->persona_id = 1;

        $administrativo->save();

       /* $becario = new \App\User();
        $becario->name = "Ramirez";
        $becario->email = "estudiante@estudiante.com";
        $becario->password = bcrypt('123456789');
        $becario->estado = 1;
        $becario->persona_id = 3;
        $becario->save();*/
    }
}
