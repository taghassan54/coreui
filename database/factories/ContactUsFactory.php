<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ContactUs;
use Faker\Generator as Faker;

$factory->define(ContactUs::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'email' => $faker->word,
        'message' => $faker->text,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
