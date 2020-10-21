<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Participant;
use Faker\Generator as Faker;

$factory->define(Participant::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'address' => $faker->address,
        'gender' => 'MALE',
        'age' => $faker->randomDigit,
        'contact_number' => $faker->numerify('##########'),
        'email_address' => $faker->word . "@test.com",
        'shirt_size' => 'M',
        'date_registered' => $faker->date,
        'race_category' => 'Junior',
    ];
});