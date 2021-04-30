<?php

use Faker\Generator as Faker;

$factory->define(Hall\Service::class, function (Faker $faker) {
    return [
        'type' => $faker->randomElement(['Prestation','Vente']),
        'cout' => $faker->numberBetween(10000,250000),
        'delai' => $faker->dateTimeBetween('now','2022-02-25 08:37:17'),
        'description' => $faker->realText(20),
        'statut' => $faker->randomElement(['termine','en cours','echec'])

    ];
});
