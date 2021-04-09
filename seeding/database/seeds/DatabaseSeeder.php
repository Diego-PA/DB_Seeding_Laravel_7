<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        //Inserción en prioridad
        DB::table('prioridad')->insert(['nombre' =>  'Alta']);

        //Inserción en abogados
        DB::table('abogados')->insert(['nombre' =>  'Juan',
                                       'apellido' =>  'Hernández',
                                       'fecha_registro' =>  '2003-12-31'
                                       ]);

    }
}

