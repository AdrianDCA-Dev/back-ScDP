<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        //Model::unguard();
        // $this->call(UsersTableSeeder::class);
        $this->call(FacultadSeeder::class);
        $this->call(CarreraSeeder::class);
        $this->call(PersonasTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(PermisosTableSeeder::class);
        $this->call(ModalidadSeeder::class);
        //DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
