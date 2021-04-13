<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\EmpresaAbogado;
use Faker\Generator as Faker;

$factory->define(App\EmpresaAbogado::class, function (Faker $faker) {
    //Consultamos las prioridades existentes.
    $empresas = App\Empresa::all();
    $abogados = App\Abogado::all();

    return [
        
        'id_abogado' => $faker->randomElement($abogados)->id,
        'id_empresa' => $faker->randomElement($empresas)->id,

    ];

});

$factory->state(App\EmpresaAbogado::class, 'nuevas', function (Faker $faker) {

    return [
        
        'id_abogado' => factory(\App\Abogado::class),
        'id_empresa' => factory(\App\Empresa::class),

    ];

});