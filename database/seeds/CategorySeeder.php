<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Nuevo',
            'description' => 'Libros en buen estado traidos y muy alta calidad',
            'priority' => 1
        ]);

        DB::table('categories')->insert([
            'name' => 'Viejo',
            'description' => 'Algunos libros en buen estado, otros un poco deteriorados y a muy buen precio',
            'priority' => 2
        ]);

        DB::table('categories')->insert([
            'name' => 'Usado',
            'description' => 'Libros en buen estado',
            'priority' => 3
        ]);

        DB::table('categories')->insert([
            'name' => 'Inglés',
            'description' => 'Libros escritos en Ingles para lectores bilingües o angloparlantes',
            'priority' => 1
        ]);
    }
}
