<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Abogado;
use Faker\Generator as Faker;

$factory->define(Abogado::class, function (Faker $faker) {
    return [
        'nombre' => $faker->firstName(),
        'apellido' => $faker->lastName(),
        'fecha_registro' => $faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});

