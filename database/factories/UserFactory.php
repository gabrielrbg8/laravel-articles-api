<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Constants\Constants;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'username' => $faker->userName,
        'email' => $faker->email,
        'password' => $faker->password(),
    ];
});
