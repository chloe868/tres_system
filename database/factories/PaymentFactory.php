<?php

use Faker\Generator as Faker;
use App\tblpayments;

$factory->define(tblpayments::class, function (Faker $faker) {
    return [
        'payid' => $faker->numberBetween(1,20),
        'month' => $faker->monthName($max = 'now'),
        'year' => $faker->year($max = 'now') ,
        'amount' => $faker->numberBetween(100,1000),
        'dateofpayment' => $faker->date($format = 'Y-m-d', $max = 'now')
    ];
});
