<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(Charlie\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(\Charlie\Customer::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
        'city' =>$faker->city,
        'state' => $faker->stateAbbr,
        'birthdate' => $faker->datetime('2016-10-30'),
        'special_customer' => $faker->boolean,

    ];
});
