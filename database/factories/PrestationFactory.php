<?php

use Faker\Generator as Faker;

$factory->define(Hall\Prestation::class, function (Faker $faker) {
    return [
        'service_id'=>$faker->unique()->numberBetween(1,10),
        'type' => $faker->randomElement(['location salle','location vehicule','evenement']),
        'cout' => $faker->numberBetween(30000,1250000),
        'delai' => $faker->dateTimeBetween('now','+1 month'),
        'libelle' => $faker->realText(15),
        'description' => $faker->realText(180),
        'statut' => $faker->randomElement(['termine','en cours','echec'])

    ];
});
