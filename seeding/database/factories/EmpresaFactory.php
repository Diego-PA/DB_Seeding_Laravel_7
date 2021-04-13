<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Empresa;
use Faker\Generator as Faker;

$factory->define(Empresa::class, function (Faker $faker) {
    //Consultamos las prioridades existentes.
    $prioridades = App\Prioridad::all();

    return [
        'nombre' => $faker->company(),
        'descripcion' => $faker->bs(),
        'telefono' => $faker->numerify('55#######'),
        'correo' => $faker->safeEmail(),
        'direccion' => $faker->address(),
        'id_prioridad' => $faker->randomElement($prioridades)->id,
    ];
});

$factory->state(Empresa::class, 'AltaPrioridad', function (Faker $faker) {

    return [
        'nombre' => $faker->company(),
        'descripcion' => $faker->bs(),
        'telefono' => $faker->numerify('55#######'),
        'correo' => $faker->safeEmail(),
        'direccion' => $faker->address(),
        'id_prioridad' => '1',
    ];
});

$factory->state(Empresa::class, 'MediaPrioridad', function (Faker $faker) {

    return [
        'nombre' => $faker->company(),
        'descripcion' => $faker->bs(),
        'telefono' => $faker->numerify('55#######'),
        'correo' => $faker->safeEmail(),
        'direccion' => $faker->address(),
        'id_prioridad' => '2',
    ];
});

$factory->state(Empresa::class, 'BajaPrioridad', function (Faker $faker) {

    return [
        'nombre' => $faker->company(),
        'descripcion' => $faker->bs(),
        'telefono' => $faker->numerify('55#######'),
        'correo' => $faker->safeEmail(),
        'direccion' => $faker->address(),
        'id_prioridad' => '3',
    ];
});

$factory->state(Empresa::class, 'SinCorreo', function (Faker $faker) {

    return [
        'nombre' => $faker->company(),
        'descripcion' => $faker->bs(),
        'telefono' => $faker->numerify('55#######'),
        'correo' => 'null',
        'direccion' => $faker->address(),
        'id_prioridad' => '1',
    ];
});