<?php

use App\tblscholars;
use Faker\Generator as Faker;

$factory->define(tblscholars::class, function (Faker $faker) {

    $batch = $faker->randomElement(['2020', '2021']);

    return [
        'first_name' => $faker->firstName,
        'middle_name' =>$faker->lastName,
        'last_name' => $faker->lastName,
        'email' => $faker->freeEmail,
        'contact_number' =>$faker->e164PhoneNumber,
        'batch' => $batch,
    ];
});
