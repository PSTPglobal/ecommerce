<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        (new App\Categ)->create([
            'category'=>'Electrónica'
        ]);
        (new App\Categ)->create([
            'category'=>'Salud'
        ]);
        (new App\Categ)->create([
            'category'=>'Ciencia'
        ]);
        (new App\Categ)->create([
            'category'=>'Herramientas'
        ]);
        (new App\Categ)->create([
            'category'=>'Hogar'
        ]);
        (new App\Categ)->create([
            'category'=>'Deportes'
        ]);
        (new App\Categ)->create([
            'category'=>'Ropa'
        ]);
        (new App\Categ)->create([
            'category'=>'Videojuegos'
        ]);
    }
}
