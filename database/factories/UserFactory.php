<?php

use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'address' => $faker->address,
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
        'bid' => str_pad(mt_rand(1,9999),4,'0',STR_PAD_LEFT),
        'uid' => str_pad(mt_rand(1,9999),4,'0',STR_PAD_LEFT),
        'fname' => $faker->firstName,
        'lname' => $faker->lastName,
        'number' => $faker->phoneNumber,
        'email' => $faker->email,
    ];
});
