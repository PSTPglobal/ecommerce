<?php

use Illuminate\Database\Seeder;

class RolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        (new App\Rol)->create([
            'rol'=>'Administrador'
        ]);
        (new App\Rol)->create([
            'rol'=>'comprador'
        ]);
    }
}
