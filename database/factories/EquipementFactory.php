<?php

use Faker\Generator as Faker;

$factory->define(Hall\Equipement::class, function (Faker $faker) {
    return [
        'nom_equipement' => $faker->company,
        'type' => $faker->randomElement(['vehicule','moto','chaises','autres']),
        'valeur' => $faker->numberBetween(10000,25000000),
        'description' => $faker->realText(180),
        'caracteristiques' => $faker->realText(180),
        'etat' => $faker->randomElement(['bon','neuf','vieux']),
        'duree_de_vie' => $faker->numberBetween(52,520)

    ];
});
