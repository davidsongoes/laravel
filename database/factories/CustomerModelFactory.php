<?php
/**
 * Created by PhpStorm.
 * User: Davidson
 * Date: 04/10/2016
 * Time: 21:45
 */

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
$factory->define(\Charlie\Customer::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
        'city' =>$faker->city,
        'state' => $faker->stateAbbr,
        'birthdate' => $faker->datetime(),
        'special_customer' => $faker->boolean,

    ];
});