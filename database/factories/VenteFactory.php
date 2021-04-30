<?php

use Faker\Generator as Faker;

$factory->define(Hall\Vente::class, function (Faker $faker) {
    return [
        'service_id'=>$faker->unique()->numberBetween(1,9),
        'equipement_id'=>$faker->unique()->numberBetween(1,10),
        'cout' => $faker->numberBetween(30000,1250000),
        'description' => $faker->realText(180),
        'statut' => $faker->randomElement(['termine','en cours','echec'])
    ];
});
