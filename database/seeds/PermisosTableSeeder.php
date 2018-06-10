<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Permission;
use App\Role;
use App\User;

class PermisosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*DB::table('roles')->truncate();
        DB::table('permissions')->truncate();
        DB::table('role_user')->truncate();
        DB::table('permission_role')->truncate();*/

        $rolAdmin = new Role(); // 1
        $rolAdmin->name = 'Admin';
        $rolAdmin->display_name = "Administrator";
        $rolAdmin->save();

        $rolDocente = new Role(); // 2
        $rolDocente->name = 'Docente';
        $rolDocente->display_name = "Administrador Docente";
        $rolDocente->save();

        $rolEstudiante = new Role(); // 3
        $rolEstudiante->name = 'Estudiante';
        $rolEstudiante->display_name = "Administrador Estudiante";
        $rolEstudiante->save();

        $rolEncargado = new Role(); // 4
        $rolEncargado->name = 'Encargado';
        $rolEncargado->display_name = "Administrador Encargado";
        $rolEncargado->save();

        $rolTribunal = new Role(); // 5
        $rolTribunal->name = 'Tribunal';
        $rolTribunal->display_name = "Administrador Tribunal";
        $rolTribunal->save();

        $user = User::where('email', '=', 'admin@admin.com')->first();
        $user->attachRole($rolAdmin);

        $admin = new Permission();
        $admin->name = "admin";
        $admin->display_name = "Administrador";
        $admin->description = "";
        $admin->save();

        $docente = new Permission();
        $docente->name = "admin_docente";
        $docente->display_name = "Admin Docente";
        $docente->description = "";
        $docente->save();

        $tribunal = new Permission();
        $tribunal->name = "admin_tribunal";
        $tribunal->display_name = "Admin Tribunal";
        $tribunal->description = "";
        $tribunal->save();

        $encargado = new Permission();
        $encargado->name = "admin_encargado";
        $encargado->display_name = "Admin Encargado";
        $encargado->description = "";
        $encargado->save();

        $estudiante = new Permission();
        $estudiante->name = "admin_estudiante";
        $estudiante->display_name = "Admin Estudiante";
        $estudiante->description = "";
        $estudiante->save();

        $rolAdmin->attachPermissions([$admin]);
        $rolDocente->attachPermissions([$docente]);
        $rolEstudiante->attachPermissions([$estudiante]);
        $rolEncargado->attachPermissions([$encargado]);
        $rolTribunal->attachPermissions([$tribunal]);

    }
}
